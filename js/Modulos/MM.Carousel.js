/**
* Funcionalidade responsável pelos Carousels
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Carousel', function (Carousel) {
	Carousel.fn.initialize = function ($carousel) {
		this.$container = $carousel;
		this.defaults = {
			loop			: false,
			margin			: 10,
			nav				: true,
			responsive		: {
								0 : {
									items: 1
								}
							}
		};

		this.loadScripts();
	};
	/**
	* Carregar Scripts necessários para funcionalidade.
	*/
	Carousel.fn.loadScripts = function(){
		var _this = this;

		jQuery.ajaxSetup({
			cache: true
		});

		if(jQuery.fn.owlCarousel === undefined){
			$.when(
				$.getScript(base_url + "js/plugins/jQuery.owl.carousel.js"),
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
	* Configuração do plugin para mostrar os Tooltips.
	*/
	Carousel.fn.config = function(){
		this.settings = {};

		this.settings = $.extend({}, this.defaults, this.settings||{});

		this.$container.owlCarousel(this.settings);
	};
});