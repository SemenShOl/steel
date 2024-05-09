<?php
$sectionNumber = '01';

$modalOpen = 'modalCallback';
$sectionTitle = '<span class="wow fadeInUp" data-wow-delay=".2s">Оставьте свои</span> <span class="wow fadeInUp" data-wow-delay=".3s">контакты</span>';
$sectionSubtitle = 'Запишем на консультацию или экскурсию на наши строящиеся объекты';
$formTitle = '<span class="wow fadeInUp" data-wow-delay=".2s">Свяжитесь с&nbsp;нами</span> <span class="wow fadeInUp" data-wow-delay=".3s">напрямую</span>';
$circleButtonTextImg = esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts.svg';
$circleButtonIconImg = esc_url(get_template_directory_uri()) . '/assets/images/svg/section-circle-contacts-phone.svg';
$sectionLink = '';
$mobileButtonText = 'Перезвоните мне';

if ($args['section-number'])
    $sectionNumber = $args['section-number'];
if ($args['modal-open'])
    $modalOpen = $args['modal-open'];
if ($args['section-title'])
    $sectionTitle = $args['section-title'];
if ($args['section-subtitle'])
    $sectionSubtitle = $args['section-subtitle'];
if ($args['form-title'])
    $formTitle = $args['form-title'];
if ($args['circle-button-text-img'])
    $circleButtonTextImg = $args['circle-button-text-img'];
if ($args['circle-button-icon-img'])
    $circleButtonIconImg = $args['circle-button-icon-img'];
if ($args['section-link'])
    $sectionLink = $args['section-link'];
if ($args['mobile-button-text'])
    $mobileButtonText = $args['mobile-button-text'];
?>

<section class="section-contacts" style="grid-area: contacts;">
    <h2 class="section-title"><?php echo $formTitle; ?></h2>
    <div id="contacts">
        <div class="contacts-list">
            <div class="item fadeIn" data-wow-delay=".3s" style="grid-area: position;">
                <p>Отдел продаж</p>
            </div>

            <div class="item  fadeIn" data-wow-delay=".4s" style="grid-area: phone;">
                <!-- <a href="tel:+74996816153" class="phone">
                 +7<i>(</i>499<i>)</i><span>681</span><i>.</i><span>61</span><i>.</i><span>53</span> 
                 {{chosenPlace.phone[0]}} 
                +7 (962) 828-87-77
            </a> -->
                <a :href="'tel:' + chosenPlace.phone[0]" class="phone">
                    <!-- +7<i>(</i>499<i>)</i><span>681</span><i>.</i><span>61</span><i>.</i><span>53</span> -->
                    {{chosenPlace.phone[0]}}
                    <!-- +7 (962) 828-87-77 -->
                </a>
            </div>
            <div class="item fadeIn" data-wow-delay=".5s" style="grid-area: email;">
                <!-- <a href="mailto:steel-n2@bk.ru" class="mail">
                {{chosenPlace.email}} 
                steel-n2<span>@</span>bk.ru
            </a> -->

                <a :href="'mailto:' + chosenPlace.email" class="mail">
                    {{chosenPlace.email}}
                </a>

            </div>
            <div class="item fadeIn" data-wow-delay=".6s" style="grid-area: address;">
                <p class="gray">
                    {{chosenPlace.adress}}
                </p>

            </div>
            <div class="item fadeIn" data-wow-delay=".6s" style="grid-area: time;">
                <p class="gray">
                    пн-пт 9:00-18:00, без перерыва
                </p>

            </div>
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
    <!-- </div> -->



</section>

<?php
// Section - Dropdown
get_template_part(
    'template-parts/section-dropdown'
);
?>

<?php

get_template_part(
    'template-parts/section-city'
)
    ?>