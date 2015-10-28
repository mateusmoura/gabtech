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

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	ResponsiveTables.fn.addEventListeners = function () {
		$('.checkbox input', this.container)
			.unbind().on('click', this.toggleActive);

		$('.block__table')
			.on('click', '.dropdown-toggle', function (event) {
				if(isMobile || $(window).width() <= 1034){
					$(this).siblings('.dropdown-menu').toggleClass('dropdown-open').fadeToggle();
				}
			});

		$(document).on('click', function(event) {
			if(isMobile || $(window).width() <= 1034){
				if(!$(event.target).parents('.btn-toolbar').length) {
					$('.btn-toolbar .dropdown-menu').removeClass('dropdown-open').fadeOut();
				}
			}
		});
	};
	/**
	* Funcionalidade para ativar linha selecionada.
	*/
	ResponsiveTables.fn.toggleActive = function () {
		$(this).parents('tr').toggleClass('active');
	};
});