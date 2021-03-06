/**
* Arquivo responsavel pela chamada de todas as funcionalidades do site 
*
* @author: Mateus Moura
* @email: chagas[dot]mateus[at]gmail[dot]com
* @date: 13/10/2014
* 
* Copyright(c) Todos os direitos reservados a 
*/

var isMobile = false;

if (window.console == null) window.console = { log: function (p) { }, error: function (p) { } };

(function(a, b) {
	if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) {
		isMobile = true;
		document.documentElement.className += ' ' + b;
	}
})(navigator.userAgent || navigator.vendor || window.opera, 'mobile');

if (!Function.prototype.bind) {
	Function.prototype.bind = function (oThis) {
		if (typeof this !== "function") {
			// closest thing possible to the ECMAScript 5 internal IsCallable function
			throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
		}

		var aArgs = Array.prototype.slice.call(arguments, 1),
			fToBind = this,
			fNOP = function () {},
			fBound = function () {
			  return fToBind.apply(this instanceof fNOP && oThis
						 ? this
						 : oThis,
					aArgs.concat(Array.prototype.slice.call(arguments)));
			};

		fNOP.prototype = this.prototype;
		fBound.prototype = new fNOP();

		return fBound;
	};
};

var site = {
	/*
	* Funcionalidades GLOBAL onde e chamado em todas as páginas do projeto.
	*/
	global: function () {
		var _collapse				= $('.block__collapse'),
			_blockFilterForm		= $('.block__filter'),
			_autocomplete			= $('.autocomplete'),
			_tooltip				= $('.tooltip:not([disabled]), .tooltip__title:not([disabled])'),
			_dropdown				= $('.block__dropdown'),
			_carousel				= $('.block__carousel');

		if(MM.Mascarar) {
			MM.Mascarar();
		}
		if(MM.Datepicker) {
			MM.Datepicker();
		}
		if(MM.Modal) {
			MM.Modal();
		}
		if(MM.ResponsiveTables) {
			MM.ResponsiveTables({
				addFocusBtn					: false,
				addDisplayAllBtn			: false
			});
		}

		for (var i = _collapse.length - 1; i >= 0; i--) {
			MM.Collapsible(_collapse.eq(i), _collapse.eq(i).data('closeothers'));
		}

		for (var i = _blockFilterForm.length - 1; i >= 0; i--) {
			MM.BlockFilterForm(_blockFilterForm.eq(i));
		};

		for (var i = _autocomplete.length - 1; i >= 0; i--) {
			MM.InputMultipleSelect(_autocomplete.eq(i));
		};

		for (var i = _tooltip.length - 1; i >= 0; i--) {
			MM.Tooltip(_tooltip.eq(i));
		};

		for (var i = _dropdown.length - 1; i >= 0; i--) {
			MM.Dropdown(_dropdown.eq(i));
		};

		for (var i = _carousel.length - 1; i >= 0; i--) {
			MM.Carousel(_carousel.eq(i));
		};

		$('form.validate').each(function(index, el) {
			var obj_temp = $(el).data('settings'),
				callback  = $(el).data('callfn');

			MM.ValidarFormularios($(el), obj_temp, callback);
		});

		if(MM.Menu) {
			MM.Menu($('header'));
		}

		this.closeMessages();
		this.selectAvatar();
		//Simulators
		this.editNotes();
		this.showFormPanel();

		//$('.btn-introduction').trigger('click');
	},
	/*
	* Funcionalidade de troca de passo na página de Cadastro.
	*/
	registerChangeStep: function ($form, $resp) {
		var _blockCollapse				= $form.parents('.block__collapse--open:first'),
			_blockCollapseTitle			= _blockCollapse.find('.block__collapse--title');

		$('.block__collapse--form-data', _blockCollapseTitle).remove();

		// Adiciona o conteúdo salvo na View
		$($resp).appendTo(_blockCollapseTitle);
		$('a', _blockCollapseTitle).trigger('click');
		_blockCollapse.addClass('block__collapse--saved');

		if(_blockCollapse.next('.block__collapse').length) {
			_blockCollapse.next('.block__collapse').find('.block__collapse--title a').trigger('click');
		}
	},

	saveRequest: function ($form, $resp) {
		console.log('call request');
	},
	/*
	* Funcionalidade para fechar as mensagem do block__message.
	*/
	closeMessages: function () {
		$('.block__message').on('click', '.btn-close', function(event) {
			event.preventDefault();
			/* Act on the event */
			var _parent = $(this).parents('.block__message');

			_parent.removeClass('animated');

			setTimeout(function () {
				_parent.remove();
			}, 800)
		});
	},
	/*
	* Funcionalidade para selecionar um avatar no block__notes.
	*/
	selectAvatar: function () {
		var _block__notesAvatars = $('.block__notes--avatars');

		$('.block__menu--avatar', _block__notesAvatars)
			.on('click', function(event) {
				event.preventDefault();
				/* Act on the event */

				//$('.block__menu--avatar-selected', _block__notesAvatars).removeClass('block__menu--avatar-selected');
				$(this).toggleClass('block__menu--avatar-selected');
			});
	},
	/*
	* Funcionalidade para mostrar formulário para editar o lembrete. block__notes--list-edit.
	*/
	editNotes: function () {
		$('.block__notes--list')
			.on('click', '.btn-edit', function(event) {
				event.preventDefault();
				/* Act on the event */
				var _parent = $(this).parents('.block__notes--list:first');

				$('.block__notes--list-head, .block__notes--list-content', _parent).fadeOut(300, function () {
					$('.block__notes--list-edit', _parent).fadeIn(300);
				});
			})
			.on('click', '.btn-cancel', function(event) {
				event.preventDefault();
				/* Act on the event */
				var _parent = $(this).parents('.block__notes--list:first');

				$('.block__notes--list-edit', _parent).fadeOut(300, function () {
					$('.block__notes--list-head, .block__notes--list-content', _parent).fadeIn(300);
				});
			});
	},
	/*
	* Funcionalidade para mostrar formulário para editar ou novo item na página de view. block__panel.
	*/
	showFormPanel: function () {
		$('.block__view--title .btn-new')
			.on('click', function (event) {
				event.preventDefault();
				/* Act on the event */
				var _parent = $(this).parents('.block__view--title:first'),
						_emptyBlock = $('.block__panel--empty:visible', _parent.siblings('.block__panel'));

				if(_emptyBlock.length) {
					_emptyBlock.parent().fadeOut(300, function() {
						_parent.siblings('.block__panel--new').fadeIn(300);
					});
				} else {
					_parent.siblings('.block__panel--new').fadeIn(300);
				}
			});

		$('.block__panel--new')
			.on('click', '.btn-cancel', function (event) {
				event.preventDefault();
				/* Act on the event */
				$(this).parents('.block__panel--new').fadeOut(300);
			});

		$('.block__panel--heading')
			.on('click', '.btn-edit', function (event) {
				event.preventDefault();
				/* Act on the event */
				var _parent = $(this).parents('.block__panel:first');

				_parent.fadeOut(300, function() {
					_parent.siblings('.block__panel--edit').fadeIn(300);
				});
			});

		$('.block__panel--edit')
			.on('click', '.btn-cancel', function (event) {
				event.preventDefault();
				/* Act on the event */
				var _parent = $(this).parents('.block__panel:first');

				$(this).parents('.block__panel--edit').fadeOut(300, function () {
					_parent.siblings('.block__panel:not(.block__panel--new):not(.block__panel--edit)').fadeIn(300);
				});
			});
	}
}


$( function(){
	site.global();
});