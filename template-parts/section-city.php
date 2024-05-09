<section class="section-city">

    <script type="text/x-template" id="blue-part">

        <div class="blue-part">
        <vue-city :chosenPlace="chosenPlace" :places="places" :changePlace="changePlace"/>
        <vue-adress :chosenPlace="chosenPlace"/>
            <div class="place-info">  
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

    <script type="text/x-template" id="component-city">
        <div class="info-part city">
            <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/place.svg">
            <p class="chosen-city">Ваш город: <span>{{chosenPlace.city}}</span></p>
            <div class="dropdown-city" >
                <!-- <p v-for= "place in places"  @click="changePlace(place)">{{chosenPlace.city}}</p> -->
                <p v-for= "place in places" @click="changePlace(place)" >{{place.city}}</p>

                <!-- <p>Санкт-Петербург</p>
                <p class="active">Новосибирск</p>
                <p>Екатеринбург</p>
                <p>Омск</p>
                <p>Ярославль</p>  -->
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


    <script type="text/x-template" id="white-part">
        <div class="white-part ">
            <div class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">
                    </a>
                </div>

                <div class="nav-and-button">
                    <button class="header-more-info">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/menu.png">
                    </button>


                    <nav class="nav-pages">
                        <ul>
                            <li>
                                <a class="page-link" href="<?php echo home_url('/payment'); ?>">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/pay.svg">
                                    <p>Оплата</p>
                                </a>

                            </li>
                            <li>
                                <a class="page-link" href="<?php echo home_url('/calculator'); ?>">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/calc.svg">
                                    <p>Калькулятор</p>
                                </a>

                            </li>
                            <li>
                                <a class="page-link" href="<?php echo home_url('/delivery'); ?>">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/car.svg">
                                    <p>Доставка</p>
                                </a>

                            </li>
                            <li>
                                <a class="page-link" href="<?php echo home_url('/price-list'); ?>">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/rect.svg">
                                    <p>Прайс-лист</p>
                                </a>
                            </li>
                            <li>
                                <a class="page-link" href="<?php echo home_url('/contacts'); ?>">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/contact.svg">
                                    <p>Контакты</p>
                                </a>

                            </li>
                        </ul>
                    </nav>
                    <div class="logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">
                        </a>
                    </div>
                    <div class="form-group-header">
                        <div class="search-part">
                            <input type="text" name="search" placeholder="Труба ВГП 15x2,5">
                            <img class="search-icon"
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/i-find.svg">
                            <div type="submit" class="search-metall">
                                <span>Поиск</span>
                                <img class="img-close"
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/close.svg">
                            </div>

                        </div>
                        <div class="dropdown-search">
                            <p>Труба ВГП 15x2,5</p>
                            <p>Труба ВГП 15x2,5</p>
                            <p>Труба ВГП 15x2,5</p>
                            <p>Труба ВГП 15x2,5</p>
                            <p>Труба ВГП 15x2,5</p>

                        </div>
                    </div>
                </div>

            </div>
    </script>



</section>