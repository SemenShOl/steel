<section class="section-contacts-component">
    <script type="text/x-template" id="component-contacts">
    <div class="contacts-list">
        <div class="item fadeIn" data-wow-delay=".3s" style="grid-area: position;">
            <p>Отдел продаж</p>
        </div>

        <div class="item  fadeIn" data-wow-delay=".4s" style="grid-area: phone;">
            <a href="tel:+74996816153" class="phone">
                <!-- +7 (962) 828-87-77 -->
                {{chosenPlace.phone}}
            </a>
        </div>
        <div class="item fadeIn" data-wow-delay=".5s" style="grid-area: email;">
            <!-- <a href="mailto:steel-n2@bk.ru" class="mail">steel-n2<span>@</span>bk.ru</a> -->
            <a href="mailto:steel-n2@bk.ru" class="mail">
                {{chosenPlace.email}}
            </a>

        </div>
        <div class="item fadeIn" data-wow-delay=".6s" style="grid-area: address;">
            <p class="gray">
                <!-- г. Новосибирск,
                ул. Союза Молодежи
                2-я, 31, офис 357 -->

                {{chosenPlace.address}}
            </p>

        </div>
        <div class="item fadeIn" data-wow-delay=".6s" style="grid-area: time;">
            <p class="gray">
                пн-пт 9:00-18:00, без перерыва
            </p>

        </div>
    </div>

    <form class="common-form wow fadeIn" data-wow-delay=".6s" data-toggle="validator" role="form" data-focus="false"
        novalidate="true">
        <h4>Или оставьте заявку на консультацию</h4>
        <div class="form-group-set">
            <div class="form-group" style="grid-area: name;">
                <label>Имя</label>
                <input type="text" class="form-control" name="name" minlength="2" required
                    placeholder="Введите ваше имя">
            </div>
            <i class="icon icon-user"></i>
            <div class="form-group phone" style="grid-area: phone;">
                <label>Номер телефона</label>
                <input type="text" class="form-control" name="phone" placeholder="+7" required>
            </div>
            <i class="icon icon-phone"></i>
            <div class="form-group comment" style="grid-area: comment;">
                <label>Комментарий</label>
                <input type="text" class="form-control" name="comment" placeholder="Введите ваш вопрос" required>
            </div>
            <button class="nbtn submit ask-price" style="grid-area: submit;">
                <span>Перезвоните мне</span>
                <!-- <i class="icon icon-arrow-right"></i> -->
            </button>
            <div class="privacy" style="grid-area: privacy;">
                <p>Нажимая на кнопку, я соглашаюсь с&nbsp;<a href="<?php echo home_url('/privacy') ?>"
                        target="_blank">условиями обработки персональных данных</a></p>
            </div>
        </div>
    </form>
    </script>
</section>