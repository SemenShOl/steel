//---------------------------------
//	Forms
//---------------------------------
import { helpers } from './helpers.js';

export function Forms($) {

    // Маска телефона
    $('input.form-control[name=phone]').mask('+7 (000) 000-00-00', 
        {
            clearIfNotMatch: true,
            onKeyPress: function(cep, event, currentField, options) {
                if (cep.length === 5) {
                    let lastChar = Number(cep[cep.length - 1]);
                    if (lastChar === 7 || lastChar === 8) {
                        $(currentField).val('+7 (');
                    }
                }

                if (cep.length >= 18) {
                    $(currentField).closest('.btn-icon').addClass('input-success');
                } else {
                    $(currentField).closest('.btn-icon').removeClass('input-success');
                }
            }
        })
        .on('focus', function(){
            $(this).val('+7 (');
            var self = this;
            setTimeout(() => {
                self.setSelectionRange(4, 4);
            }, 100);
        })


    // Проверка введённого имени
    $('.common-form .btn-icon .form-control[name=name]').on('keyup', function(){
        if ($(this).val().length >= 2) {
            $(this).closest('.btn-icon').addClass('input-success');
        } else {
            $(this).closest('.btn-icon').removeClass('input-success');
        }
    });
        
        

	// Отправка формы
    $('.common-form').validator().on('submit', function(e) {
		var form = $(this),
            formData = form.serializeArray(),
            formName = form.find('input[name="form_name"]').val(),
            formModalSuccess = form.find('input[name="modal_success"]').val(),
			formGoal = form.find('input[name="ya_metrica_goal_name"]').val(),
            formDownloadFile = form.find('input[name="download_file"]').val(),
			formPrivacy = form.find('input[name="privacy"]').prop("checked");

        setTimeout(function () {
            form.find('.form-group').removeClass('has-error has-danger');
        }, 3000);

        formData.push({ name: 'from_site', value: window.location.origin + window.location.pathname });

        if (helpers.getUrlParameter('utm_source') !== undefined) {
            formData.push({ name: 'utm_source', value: helpers.getUrlParameter('utm_source') });
        }

        if (helpers.getUrlParameter('utm_medium') !== undefined) {
            formData.push({ name: 'utm_medium', value: helpers.getUrlParameter('utm_medium') });
        }

        if (helpers.getUrlParameter('utm_campaign') !== undefined) {
            formData.push({ name: 'utm_campaign', value: helpers.getUrlParameter('utm_campaign') });
        }

        if (helpers.getUrlParameter('utm_content') !== undefined) {
            formData.push({ name: 'utm_content', value: helpers.getUrlParameter('utm_content') });
        }

        if (helpers.getUrlParameter('utm_term') !== undefined) {
            formData.push({ name: 'utm_term', value: helpers.getUrlParameter('utm_term') });
        }

        // console.log(formData)

		if (!e.isDefaultPrevented()) {
            e.preventDefault();

            if(formPrivacy) {
                form.find('.submit').addClass('is-loading').prop('disabled', true);
                $.ajax({
                    type: "POST",
                    url: globalParams.ajax_url,
                    data: formData,
                    success: function(res) {
                        // console.log(res);

                        form.trigger('reset');
                        form.find('.submit').removeClass('is-loading').prop('disabled', false);

                        $('.modal').modal('hide');

                        if (formModalSuccess !== undefined && formModalSuccess !== '') {
                            setTimeout(function () {
                                $('.modal#' + formModalSuccess).modal('show');
                            }, 500);
                            setTimeout(function () {
                                $('.modal#' + formModalSuccess).modal('hide');
                            }, 5000);
                        } else {
                            alert('Сообщение успешно отправлено!');
                        }

                        // Скачивание файла
                        if (formDownloadFile !== undefined && formDownloadFile !== '') {
                            // $('body').append('<a href="' + formDownloadFile + '" class="download-file" download></a>').ready(function(){
                            $('body').append('<a href="' + formDownloadFile + '" class="download-file" target="_blank"></a>').ready(function(){
                                setTimeout(function() {
                                    $('body .download-file')[0].click();
                                }, 500);

                                setTimeout(function() {
                                    $('body .download-file').remove();
                                }, 2000);
                            });
                        }

                        // Yandex metrika send goals
                        const ya_metrika_id = globalParams.ya_metrika_id;

                        if (ya_metrika_id !== null && ya_metrika_id !== undefined && ya_metrika_id !== '') {
                            if (formGoal !== undefined && formGoal !== '') {
                                ym(Number(ya_metrika_id), 'reachGoal', formGoal);
                            }
                        }
                    },
                    error: function(e) {
                        console.log(e)
                        
                        form.find('.info').addClass('is-active is-error').html('Во время отправки произошла ошибка');

                        setTimeout(function() {
                            form.find('.info').removeClass('is-active is-error').html('');
                        }, 4000);
                    }
                });
                return false;
            } else {
                alert('Без согласия на обработку данных мы не может принять заявку');
            }
		}
	});
	
}
