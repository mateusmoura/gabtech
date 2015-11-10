/**
* Funcionalidade responsável pelo animate BLOCK__FILTER--FORM.
* @author: Mateus Moura
* @Version: 1.0
*/

Module('MM.BlockFilterForm', function(BlockFilterForm){
	BlockFilterForm.fn.initialize = function($container){
		this.container						= $container;
		this.wrap__options					= $container.siblings('.block__filter--wrap:first');
		this.block__filter_form				= $container.find('.block__filter--form');
		this.block__filter_close			= $container.find('.block__filter--close');
		this.block__filter_show				= $container.find('.block__filter--show');
		this.block__filter_btn_open			= $container.find('.block__filter--btn-open');
		this.block__filter_btn_close		= $container.find('.block__filter--btn-close');
		this.footer							= $('footer');

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
		if(isMobile || $(window).width() < 1024){
			this.wrap__options.add(this.container).toggleClass('block__filter--open');

			if(!this.wrap__options.hasClass('block__filter--open')) {
				$('.block__collapse:not(:first) .block__collapse--content', this.wrap__options).slideUp();
				$('.block__collapse:not(:first)', this.wrap__options).removeClass('block__collapse--open');
				this.wrap__options.siblings('.block__table').add(this.footer).show();
			} else {
				this.wrap__options.siblings('.block__table').add(this.footer).hide();
			}
		} else {
			if(this.wrap__options.hasClass('block__filter--open')) {
				this.wrap__options.addClass('block__filter--closing');

				setTimeout(function () {
					this.wrap__options.add(this.container).toggleClass('block__filter--open').removeClass('block__filter--closing');
					this.wrap__options.toggleClass('col-m-3');
					$('.page__list .block__table').toggleClass('col-m-9');
				}.bind(this), 400);
			} else {
				this.wrap__options.add(this.container).toggleClass('block__filter--open');
				this.wrap__options.toggleClass('col-m-3');
				$('.page__list .block__table').toggleClass('col-m-9');
			}
		}

		return false;
	};
});