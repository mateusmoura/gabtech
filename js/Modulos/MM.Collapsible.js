/**
* Funcionalidade responsável pelo Collapse.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Collapsible', function (Collapsible) {
	Collapsible.fn.initialize = function ($container, $closeOthers) {
		this.container							= $container;
		this.block__collapse_title				= $container.find('.block__collapse--title a, .block__collapse--title button');
		this.block__collapse_content			= $container.find('.block__collapse--content');
		this.closeOthers						= $closeOthers;

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	Collapsible.fn.addEventListeners = function(){
		this.block__collapse_title
			.on('click', this.toggleOpen.bind(this));
	};
	/**
	* Funcionalidade que mostra o conteúdo.
	*/
	Collapsible.fn.toggleOpen = function(){
		this.block__collapse_content.slideToggle('500');
		this.container.toggleClass('block__collapse--open');

		if(this.closeOthers){
			this.block__collapse_title.parent().siblings('.block__collapse--open')
				.find('.block__collapse--content').slideUp(function(){
					$(this).parent().removeClass('block__collapse--open');
				}).end();
		}
		
		return false;
	};
});