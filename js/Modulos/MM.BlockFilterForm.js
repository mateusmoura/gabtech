/**
* Funcionalidade responsável pelo animate BLOCK__FILTER--FORM.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.BlockFilterForm', function(BlockFilterForm){
	BlockFilterForm.fn.initialize = function($container){
		this.container						= $container;
		this.block__filter_form				= $container.find('.block__filter--form');
		this.block__filter_close			= $container.find('.block__filter--close');
		this.block__filter_show				= $container.find('.block__filter--show');
		this.block__filter_btn_open			= $container.find('.block__filter--btn-open');
		this.block__filter_btn_close		= $container.find('.block__filter--btn-close');

		this.addEventListeners();
	};
	/**
	* Adiciona os eventos necessários.
	*/
	BlockFilterForm.fn.addEventListeners = function(){
		this.block__filter_close
			.on('click', this.toggleOpenForm.bind(this));

		this.block__filter_show
			.on('click', this.toggleOpenForm.bind(this));

		this.block__filter_btn_open
			.on('click', this.toggleOpenFilter.bind(this));

		this.block__filter_btn_close
			.on('click', this.toggleOpenFilter.bind(this));
	};
	/**
	* Funcionalidade que mostra o formulário de busca.
	*/
	BlockFilterForm.fn.toggleOpenForm = function(){
		this.block__filter_form.toggleClass('block__filter--form-active');

		return false;
	};
	/**
	* Funcionalidade que mostra o formulário de busca.
	*/
	BlockFilterForm.fn.toggleOpenFilter = function(){
		this.container.toggleClass('block__filter--open');

		return false;
	};
});