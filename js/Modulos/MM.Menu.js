/**
* Funcionalidade responsável pelo animate do MENU.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.Menu', function (Menu) {
	Menu.fn.initialize = function ($container) {
		this.container						= $container;
		this.btn_menu						= $container.find('.btn-menu');

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	Menu.fn.addEventListeners = function () {
		this.btn_menu
			.on('click', this.toggleOpenMenu.bind(this));
	};
	/**
	* Funcionalidade que mostrar o MENU.
	*/
	Menu.fn.toggleOpenMenu = function () {
		this.container.toggleClass('header__menu--active');

		return false;
	};
});