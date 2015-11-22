/**
* Funcionalidade responsável pelos Tooltips
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Tooltip', function (Tooltip) {
	Tooltip.fn.initialize = function ($tooltip) {
		this.$container = $tooltip;

		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	Tooltip.fn.loadScripts = function(){
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if($.mask === undefined){
			$.when(
				$.getScript(base_url + "js/plugins/jQuery.tooltipster.min.js"),
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
	* Configuração do plugin para mostrar os Tooltips.
	*/
	Tooltip.fn.config = function(){
		this.$container.tooltipster({
			content: $(this.$container.html()),
			animation: 'fade',
			autoClose: true,
			delay: 200,
			theme: 'tooltipster-default',
			touchDevices: true,
			iconTouch: true,
			position: 'left',
			functionBefore: function (origin, continueTooltip) {
				if(isMobile || $(window).width() < 1024){
					$('#overlay').fadeIn(200);
				}
				$(this).addClass('oppened');
				continueTooltip();
			},
			functionAfter: function (origin) {
				if(isMobile || $(window).width() < 1024){
					$('#overlay').fadeOut(100);
				}
				$(this).removeClass('oppened');
			}
		});
	};
});