//---------------------------------
//	Modals
//---------------------------------

export function Modals($) {

	// Модальное окно - Заказать звонок
	(function(){
		$('.modal-common').on('show.bs.modal', function (e) {

			if ($(e.relatedTarget).data('modal-title') !== undefined) {
				$('.modal-common .modal-title h4').html($(e.relatedTarget).data('modal-title'));
			}
			if ($(e.relatedTarget).data('modal-subtitle') !== undefined) { 
				$('.modal-common .modal-title p').html($(e.relatedTarget).data('modal-subtitle'));
			}
			if ($(e.relatedTarget).data('modal-button') !== undefined) {
				$('.modal-common .submit span').html($(e.relatedTarget).data('modal-button'));
			}
			if ($(e.relatedTarget).data('modal-form-name') !== undefined) {
				$('.modal-common input[name=form_name]').val($(e.relatedTarget).data('modal-form-name'));
			}
			if ($(e.relatedTarget).data('modal-ya-goal-name') !== undefined) {
				$('.modal-common input[name=ya_metrica_goal_name]').val($(e.relatedTarget).data('modal-ya-goal-name'));
			}
			if ($(e.relatedTarget).data('modal-success') !== undefined) {
				$('.modal-common input[name=modal_success]').val($(e.relatedTarget).data('modal-success'));
			}
			if ($(e.relatedTarget).data('modal-download') !== undefined) {
				let fileUrl = $(e.relatedTarget).data('modal-download');
	
				// if ($(e.relatedTarget).data('modal-download-mobile') !== undefined) {
				// 	if (window.innerWidth <= 768) fileUrl = $(e.relatedTarget).data('modal-download-mobile');
				// }
	
				$('.modal-common input[name=download_file]').val(fileUrl);
			}

			if ($(e.relatedTarget).data('modal-textarea') !== undefined && $(e.relatedTarget).data('modal-textarea') !== '') {
				const html = '<div class="form-group textarea"><label>' + $(e.relatedTarget).data('modal-textarea-label') + ' </label><textarea required class="form-control" name="' + $(e.relatedTarget).data('modal-textarea') + '" required></textarea></div>';

				$('.modal-common .form-group-set').append(html);
			}


			if ($(e.relatedTarget).data('modal-order') !== undefined && $(e.relatedTarget).data('modal-order') !== '') {
				const html = '<div class="btn-icon order"><div class="form-group"><label>Ваш заказ</label><input type="text" class="form-control" name="' + $(e.relatedTarget).data('modal-order') + '" placeholder="" value="' + $(e.relatedTarget).data('modal-order-data') + '"></div><i class="icon icon-cart"></i></div>';

				$('.modal-common .form-group-set').append(html);
			}
			

		});

		$('.modal-common').on('hidden.bs.modal', function (e) {
			$('.modal-common .modal-title h4').html('Оставить заявку');
			$('.modal-common .modal-title p').html('и мы свяжемся с вами в течении 5 минут');
			$('.modal-common .order').remove();
			$('.modal-common .form-group.textarea').remove();
			$('.modal-common .submit span').html('Отправить');
			$('.modal-common .form-group-set .textarea').remove();
			$('.modal-common input[name=form_name]').val('Обратный звонок');
			$('.modal-common input[name=ya_metrica_goal_name]').val('');
			$('.modal-common input[name=modal_success]').val('modalSuccess');
			$('.modal-common input[name=download_file]').val('');
		});
	})();



	// Модальное окно - Один отзыв
	(function(){
		$('#modalReviewView').on('show.bs.modal', function (e) {
			if ($(e.relatedTarget).data('post-id') !== undefined) {
				const id = $(e.relatedTarget).data('post-id');

				$.ajax({
                    type: "POST",
                    url: globalParams.ajax_url,
                    data: {
						id: id,
						action: 'view_review'
					},
                    success: function(res) {
						if (res && res !== undefined && res !== '') {
                        	$('#modalReviewView .review-single').html(res);
						}
                    },
                    error: function(e) {
                        console.log(e)
                        
                    }
                });
			}
		});

		$('#modalReviewView').on('hidden.bs.modal', function (e) {
			$('#modalReviewView .review-single').html('');
		});
	})();

}


