/**
* Funcionalidade responsável por utilizar o PLUGIN Responsive Tables
* @author: Mateus Moura
* @Version: 1.0
* @require: Load CSS in HEADER (rwd-table.css)
*/

Module('MM.ResponsiveTables', function(ResponsiveTables){
	ResponsiveTables.fn.initialize = function($settings){
		this.settings = $settings;

		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	ResponsiveTables.fn.loadScripts = function(){
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if( $.fn.responsiveTable === undefined ){
			$.when(
				$.getScript(base_url + "js/plugins/jQuery.rwd-table.js"),
				$.Deferred(function(deferred){
					$(deferred.resolve)
				})
			).done(function(){
				_this.config();
			}).fail(function() {
				console.log('Erro getScript');
			});
		} else{
			_this.config();
		}
	};
	/**
	* Configuração e Inicialização do plugin.
	*/
	ResponsiveTables.fn.config = function(){
		var defaults = { },
			settings = $.extend({}, defaults, this.settings||{});


		$('.table-responsive').responsiveTable(settings);
	};
});