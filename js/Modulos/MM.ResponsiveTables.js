/**
* Funcionalidade responsável por utilizar o PLUGIN Responsive Tables
* @author: Mateus Moura
* @Version: 1.0
* @require: Load CSS in HEADER (rwd-table.css)
*/

Module('MM.ResponsiveTables', function (ResponsiveTables) {
	ResponsiveTables.fn.initialize = function ($settings) {
		this.settings = $settings;

		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	ResponsiveTables.fn.loadScripts = function() {
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if( $.fn.responsiveTable === undefined ){
			$.when(
				$.getScript(base_url + "js/plugins/jQuery.rwd-table.js"),
				$.Deferred(function (deferred) {
					$(deferred.resolve)
				})
			).done(function () {
				_this.config();
			}).fail(function () {
				console.log('Erro getScript');
			});
		} else{
			_this.config();
		}
	};
	/**
	* Configuração e Inicialização do plugin.
	*/
	ResponsiveTables.fn.config = function () {
		var defaults = { },
			settings = $.extend({}, defaults, this.settings||{});

		this.container = $('.table-responsive');

		this.container.responsiveTable(settings);

		this.block__tableSimulateStripe = this.container.parents('div.table-wrapper').siblings('.block__table--simulate-stripe');

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	ResponsiveTables.fn.addEventListeners = function () {
		$('.checkbox input', this.container)
			.unbind().on('click', this.toggleActive);

		console.log($('> table tr', this.container));

		$('> table tbody tr', this.container)
			.unbind().on('mouseenter mouseleave', this.toggleHover);

		$('.block__table--actions .selectAll')
			.on('click', function(event) {
				$('table .checkbox input', this.container).trigger('click');
			});

		$('.block__table')
			.on('click', '.dropdown-toggle', function (event) {
				if(isMobile || $(window).width() <= 1024){
					$(this).siblings('.dropdown-menu').toggleClass('dropdown-open').fadeToggle('fast');
				}
			});

		$(document).on('click', function(event) {
			if(isMobile || $(window).width() <= 1024){
				if(!$(event.target).parents('.btn-toolbar').length) {
					$('.btn-toolbar .dropdown-menu').removeClass('dropdown-open').fadeOut('fast');
				}
			}
		});
	};
	/**
	* Funcionalidade para ativar linha selecionada.
	*/
	ResponsiveTables.fn.toggleActive = function () {
		var _parent = $(this).parents('tr'),
			_block__tableSimulateStripe = _parent.parents('div.table-wrapper').siblings('.block__table--simulate-stripe');

		_parent.toggleClass('active');

		if(_block__tableSimulateStripe) {
			var _index = $('tr', _parent.parents('table')).index(_parent);

			$('table tr', _block__tableSimulateStripe).eq(_index - 1).toggleClass('active');
		}
	};
	/**
	* Funcionalidade para hover de uma linha.
	*/
	ResponsiveTables.fn.toggleHover = function (event) {
		var _parent = $(this),
			_block__tableSimulateStripe = _parent.parents('div.table-wrapper').siblings('.block__table--simulate-stripe');

		if(_block__tableSimulateStripe) {
			var _index = $('tr', _parent.parents('table')).index(_parent);

			$('table tr', _block__tableSimulateStripe).eq(_index-1).toggleClass('hover');
		}
	};
});