<section class="component-city">

    <script type="text/x-template" id="component-city">
        <div class="info-part city">
            <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/place.svg">
            <p class="chosen-city">Ваш город: <span>{{chosenPlace.city}}</span></p>
            <div class="dropdown-city" >
                <p v-for= "place in places"  @click="changePlace(place)">{{chosenPlace.city}}</p>
                <!-- <p>Санкт-Петербург</p>
                <p class="active">Новосибирск</p>
                <p>Екатеринбург</p>
                <p>Омск</p>
                <p>Ярославль</p> -->
            </div>
        </div>
    </script>

    <script type="text/x-template" id="component-adress">
        <div class="info-part">
            <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/home.svg">
            <p>{{chosenPlace.adress}}</p>
        </div>
    </script>



    <script type="text/x-template" id="blue-part">
        <div class="blue-part">
            <div class="place-info">  
                <!-- <city/> -->
                <!-- <adress/> -->
                <div class="info-part">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/clock.svg">

                    <p>Пн-Пт 09:00 - 18:00</p>
                </div>
            </div>

            <div class="contacts-info">
                <div class="info-part">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/mail.svg">


                    <a href="mailto:steel-n2@bk.ru">steel-n2@bk.ru</a>

                </div>
                <div class="info-part">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/phone.svg">

                    <a href="tel:79628288777">
                        +7 (962) 828-87-77
                    </a>

                </div>
                <button class="nbtn blue-bg sm ask-price">Заказать звонок</button>

            </div>
        </div>
    </script>

</section>