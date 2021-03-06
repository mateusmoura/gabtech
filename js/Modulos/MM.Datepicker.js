/**
* Funcionalidade responsável pelas funcionalidades do Datepicker
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Datepicker', function (Datepicker) {
	Datepicker.fn.initialize = function ($settings) {
		this.settings = $settings;

		//this.config();
		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	Datepicker.fn.loadScripts = function () {
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if( $.datepicker === undefined ){
			$.when(
				$.getScript(base_url + "js/plugins/jQuery.ui-datepicker.js"),
				$.Deferred(function (deferred) {
					$(deferred.resolve)
				})
			).done(function () {
				_this.config();
			}).fail(function () {
				console.log('Erro getScript')
			});
		} else{
			_this.config();
		}
	};
	/**
	* Configuração e Inicialização do plugin.
	*/
	Datepicker.fn.config = function () {
		var defaults = {
				dateFormat: 'dd/mm/yy',
				showOtherMonths: true,
				changeMonth: true,
				changeYear: true,
				dayNames: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
				dayNamesMin: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
				dayNamesShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb' ],
				monthNames: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
				monthNamesShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ]
			},
			settings = $.extend({}, defaults, this.settings||{});


		$('.datepicker').datepicker(settings);
	};
});