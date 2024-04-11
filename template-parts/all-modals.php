
<!-- #modalCallback -->
<div class="modal fade modal-common" id="modalCallback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <div class="modal-title">
                <h4>Оставьте заявку</h4>
                <!-- <p>и мы свяжемся с вами в течении 5 минут</p> -->
            </div>
            <form class="common-form" data-toggle="validator" role="form" data-focus="false" novalidate="true">
                <div class="form-group-set">
                    <div class="btn-icon">
                        <div class="form-group">
                            <label>Введите ваше имя</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя">
                        </div>
                        <i class="icon icon-user"></i>
                    </div>
                    <div class="btn-icon">
                        <div class="form-group phone">
                            <label>Ваш номер телефона</label>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                        </div>
                        <i class="icon icon-phone"></i>
                    </div>
                </div>
                <button class="btn-icon submit">
                    <span>Отправить</span>
                    <i class="icon-arrow-right"></i>
                </button>
                <div class="privacy">
                    <label class="checkbox">
                        <input type="checkbox" name="privacy" checked="">
                        <i></i>
                    </label>
                    <p>Я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь c <a href="<?php echo home_url('/privacy') ?>" target="_blank">политикой конфиденциальности</a></p>
                </div>
                <div class="info"></div>
                <input type="hidden" name="form_name" value="Обратный звонок">
                <input type="hidden" name="modal_success" value="modalSuccess">
                <input type="hidden" name="ya_metrica_goal_name" value="zayavka">
                <input type="hidden" name="download_file" value="">
                <input type="hidden" name="action" value="send_message">
            </form>
        </div>
    </div>
</div>


<!-- <div class="btn-icon">
    <div class="form-group phone">
        <label>Ваш заказ</label>
        <input type="text" class="form-control" name="order" placeholder="">
    </div>
    <i class="icon icon-cart"></i>
</div> -->


<!-- #modalNewReview -->
<div class="modal fade new-review" id="modalNewReview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <div class="modal-title">
                <h4>Оставьте свой отзыв</h4>
                <p>Ваш отзыв автоматически опубликуется на&nbsp;сайте в&nbsp;разделе "отзывы"</p>
            </div>
            <form class="common-form" data-toggle="validator" role="form" data-focus="false" novalidate="true">
                <div class="form-group-set">
                    <div class="btn-icon">
                        <div class="form-group">
                            <label>Введите ваше имя</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя" required>
                        </div>
                        <i class="icon icon-user"></i>
                    </div>
                    <div class="btn-icon">
                        <div class="form-group phone">
                            <label>Ваш номер телефона</label>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" required>
                        </div>
                        <i class="icon icon-phone"></i>
                    </div>
                </div>
                <div class="form-group textarea">
                    <label>Введите текст отзыва</label>
                    <textarea type="text" class="form-control" name="message" required></textarea>
                </div>
                <div class="bottom">
                    <div class="left-block">
                        <div class="form-group rating-stars-wrap">
                            <p>Ваша оценка</p>
                            <div class="rating-stars set" data-val></div>
                        </div>
                        <div class="privacy">
                            <label class="checkbox">
                                <input type="checkbox" name="privacy" checked="">
                                <i></i>
                            </label>
                            <p>Я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь c <a href="<?php echo home_url('/privacy') ?>" target="_blank">политикой конфиденциальности</a></p>
                        </div>
                    </div>
                    <button class="btn-icon submit">
                        <span>Отправить отзыв</span>
                        <i class="icon-cloud-text"></i>
                    </button>
                    
                </div>

                <input type="hidden" name="form_name" value="Новый отзыв">
                <input type="hidden" name="modal_success" value="modalSuccessNewReview">
                <input type="hidden" name="ya_metrica_goal_name" value="">
                <input type="hidden" name="action" value="add_review">
            </form>
        </div>
    </div>
</div>


<!-- #modalReviewView -->
<div class="modal fade review-view" id="modalReviewView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <div class="review-single"></div>
        </div>
    </div>
</div>

<!-- #modalSuccess -->
<div class="modal fade success" id="modalSuccess" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <div class="text">
                <p>Заявка успешно отправлена</p>
            </div>
        </div>
    </div>
</div>

<!-- #modalSuccessNewReview -->
<div class="modal fade success" id="modalSuccessNewReview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <div class="text">
                <p>Ваш отзыв успешно отправлен</p>
            </div>
        </div>
    </div>
</div>