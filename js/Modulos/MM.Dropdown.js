/**
* Funcionalidade responsável pelo animate BLOCK__DROPDOWN.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Dropdown', function (Dropdown) {
	Dropdown.fn.initialize = function ($container){
		this.container						= $container;
		this.button 						= $('.btn-dropdown', this.container);
		this.block__options					= $('.block__dropdown--options', this.container);
		this.overlay						= $('#overlay');
		this.fadeTimeStamp					= 200;

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	Dropdown.fn.addEventListeners = function(){
		this.button
			.on('click', this.toggleOpenDrop.bind(this));

		this.container
			.on('click', this.closeDrop.bind(this));

		$('body')
			.on('click', this.closeDropOut.bind(this));
	};
	/**
	* Funcionalidade que mostra as opções do dropdown.
	*/
	Dropdown.fn.toggleOpenDrop = function (event) {
		if(isMobile || $(window).width() < 1024) {
			this.overlay.fadeToggle(this.fadeTimeStamp);
		}
		this.block__options.fadeToggle(this.fadeTimeStamp);
		this.container.toggleClass('block__dropdown--open');

		return false;
	};
	/**
	* Funcionalidade que fecha as opções do dropdown.
	*/
	Dropdown.fn.closeDrop = function (event) {
		if(this.container.hasClass('block__dropdown--open')) {
			if(isMobile || $(window).width() < 1024){
				this.overlay.fadeOut(this.fadeTimeStamp);
			}
			this.block__options.fadeOut(this.fadeTimeStamp);
			this.container.removeClass('block__dropdown--open');
		}
	};
	/**
	* Funcionalidade que fecha as opções do dropdown.
	*/
	Dropdown.fn.closeDropOut = function (event) {
		if(!$(event.target).parents('.block__dropdown').length) {
			this.closeDrop();
		}
	};
});