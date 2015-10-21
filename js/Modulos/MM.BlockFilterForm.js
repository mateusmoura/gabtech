/**
* Funcionalidade responsável pelo animate BLOCK__FILTER--FORM.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.BlockFilterForm', function(BlockFilterForm){
	BlockFilterForm.fn.initialize = function($container){
		this.container				= $container;
		this.form					= $container.find('.block__filter--form');
		this.buttonClose			= $container.find('.block__filter--close');
		this.buttonShow				= $container.find('.block__filter--show');

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	BlockFilterForm.fn.addEventListeners = function(){
		this.buttonClose
			.on('click', this.toggleOpen.bind(this));

		this.buttonShow
			.on('click', this.toggleOpen.bind(this));
	};
	/**
	* Funcionalidade que mostra o formulário de busca.
	*/
	BlockFilterForm.fn.toggleOpen = function(){
		this.form.toggleClass('block__filter--form-active');

		return false;
	};
});