/**
* Funcionalidade responsável pelas funcionalidades dos input multiple select
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.InputMultipleSelect', function(InputMultipleSelect){
	InputMultipleSelect.fn.initialize = function($element, $settings){
		this.element				= $element;
		this.tagList				= $element.parents('.block__input--data:first').siblings('.block__input--list');
		this.settings				= $settings;
		this.cache					= {};
		this.remotesource			= this.element.data('remotesource');
		this.datasource				= ['Escola', 'Obra', 'Construção', 'Empregado', 'Teste', 'Prédio', 'Casas'];
		this.valuesSelected			= [];

		//this.config();
		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	InputMultipleSelect.fn.loadScripts = function(){
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if( $.ui === undefined || $.ui.autocomplete === undefined ){
			$.when(
				$.getScript(base_url + 'js/plugins/jQuery.ui-autocomplete.js'),
				$.Deferred(function(deferred){
					$(deferred.resolve)
				})
			).done(function(){
				_this.config();
			}).fail(function() {
				console.log('Erro getScript')
			});
		} else{
			_this.config();
		}
	};
	/**
	* Configuração e Inicialização do plugin.
	*/
	InputMultipleSelect.fn.config = function(){
		var defaults = {
				minLength : 0,
				source : this.datasource,
				select : function (event, ui) {
					if(this.valuesSelected.indexOf(ui.item.value) === -1) {
						this.valuesSelected.push(ui.item.value);
						this.updateSelecteds(ui.item.value);
					}

					return false;
				}.bind(this)
			},
			settings = {};

		if(this.remotesource) {
			defaults.source = function (request, response) {
				var term = request.term;
				if (term in cache) {
					response(cache[term]);
					return;
				}

				$.getJSON( this.datasource, request, function (data, status, xhr) {
					cache[ term ] = data;
					response( data );
				});
			}
		}

		settings = $.extend({}, defaults, this.settings||{})

		this.element.autocomplete(settings);

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	InputMultipleSelect.fn.addEventListeners = function(){
		this.element
			.on('keyup', function (event) {
				if(event.keyCode === 13) {
					var _value = this.element.val();

					if(this.valuesSelected.indexOf(_value) === -1) {
						this.valuesSelected.push(_value);
						this.updateSelecteds(_value);
					}

					this.element.val('');
				}
			}.bind(this));

		this.element.siblings('.btn-more')
			.on('click', function (event) {
				var _value = this.element.val();
				if(_value && this.valuesSelected.indexOf(_value) === -1) {
					this.valuesSelected.push(_value);
					this.updateSelecteds(_value);
				}

				this.element.val('');
			}.bind(this));

		this.tagList
			.on('click', '.btn-icon', function (event) {
				var _tag = $(event.currentTarget).parent();

				this.removeItem(_tag.text());
				_tag.remove();
			}.bind(this));
	};
	/**
	* Funcionalidade para adicionar um novo item.
	*/
	InputMultipleSelect.fn.updateSelecteds = function(value){
		var _template = $('<p class="block__input--list-item">'+ value +' <a href="#this" class="btn btn-icon"><i class="icon icon-remove"></i></a></p>');

		this.tagList.append(_template);
	};
	/**
	* Funcionalidade para remover um item.
	*/
	InputMultipleSelect.fn.removeItem = function(value){
		this.valuesSelected.splice(value, 1);

	};
});