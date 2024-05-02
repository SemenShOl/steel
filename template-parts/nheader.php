<header class="nheader">
    <div class="wrapper">
        <div class="blue-part">
            <div class="place-info">
                <div class="info-part city">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/place.svg">
                    <p class="chosen-city">Ваш город: <span>Новосибирск</span></p>
                    <div class="dropdown-city">
                        <p>Москва</p>
                        <p>Санкт-Петербург</p>
                        <p class="active">Новосибирск</p>
                        <p>Екатеринбург</p>
                        <p>Омск</p>
                        <p>Ярославль</p>
                    </div>
                </div>
                <div class="info-part">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/home.svg">
                    <p>Самовывоз: г. Новосибирск, ул. 2-я Союза Молодежи,д 31, офис 357</p>
                </div>

                <div class="info-part">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/clock.svg">

                    <p>Пн-Пт 09:00 - 18:00</p>
                </div>
            </div>

            <div class="contacts-info">
                <div class="info-part">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/mail.svg">


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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/n_Dark_logo.svg">
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
        <div id="app">
            <dropdowns />
        </div>

    </div>

    <div class="mobile-part ">
        <nav class="nav-pages">
            <ul class="t-m">
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

        <div class="metall-types t-s">
            <div class="work-type">
                <p>Трубозапорная арматура</p>
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Детали трубопроводов</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Сортовой прокат</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Листовой прокат</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Метизная продукция</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Нержавеющая сталь</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Цветной металлопрокат</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
            <div class="work-type">
                <p>Металлообработка</p>

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            </div>
        </div>

        <div class="contacts t-m">
            <div class=" info-part">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/place.svg">

                <p>Ваш город: Новосибирск</p>
            </div>
            <div class="info-part">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/home.svg">

                <p>Самовывоз: г. Новосибирск, ул. 2-я Союза Молодежи,д 31, офис 357</p>
            </div>

            <div class="info-part">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/clock.svg">

                <p>Пн-Пт 09:00 - 18:00</p>
            </div>
            <div class="info-part">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/mail.svg">

                <p>steel-n2@bk.ru</p>
            </div>
            <div class="info-part">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/phone.svg">
                <p>+7 (962) 828-87-77</p>
            </div>
            <button class="nbtn">Заказать звонок</button>

        </div>

    </div>

</header>


<!-- Поиск трубы -->
<script>
    const searchMetall = document.querySelector('.search-metall');
    const dropdownSearch = document.querySelector('.dropdown-search');

    searchMetall.addEventListener('click', () => {
        dropdownSearch.classList.toggle('active')
        searchMetall.classList.toggle('to-close')

    })

</script>

<!-- Выбор города -->
<script>
    const dropdownCity = document.querySelector('.dropdown-city');
    const cities = dropdownCity.querySelectorAll('p');
    const chosenCity = document.querySelector('.chosen-city span');

    cities.forEach(city => {
        city.addEventListener('click', () => {
            chosenCity.textContent = city.textContent
            cities.forEach(city => {
                city.classList.remove('active')
            })
            city.classList.add('active')
        })
    })
</script>


<!-- Vue.js -->
<section id="header-dropdown">
    <div class="blue-part">
        <div class="work-type" v-for="productType in productTypes">
            <p>{{productType.title}} </p>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/header-icons/arrow-down.svg">
            <div class="product-container">
                <div class="dropdown-work-type" v-for="product in productType.products">
                    <p>{{product.title}} </p>

                    <div class="sub-product-container">
                        <div class="sub-product" v-for="subProduct in product.subProducts">
                            <a :href="subProduct.ref">{{subProduct.title}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section id="blue-part-v">

</section>

<section id="white-part-v">

</section>


<script type='module'>
    const { createApp, component } = Vue;
    const app = createApp({

    })

    app.component('blue-part', {
        template: '#blue-part-v'
    })
    app.component('white-part', {
        template: '#white-part-v'
    })
    app.component('dropdowns', {
        template: '#header-dropdown',
        data() {
            return {
                productTypes: [
                    {
                        title: 'Трубозапорная арматура',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Детали трубопроводов',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Сортовой прокат',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Листовой прокат',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Метизная продукция',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Нержавеющая сталь',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Цветной металлопрокат',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },
                    {
                        title: 'Металлообработка',
                        products: [
                            {
                                title: "Вентили(клапаны)",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Клапаны синие" },
                                    { ref: 'http://project/product-card', title: "Клапаны красные" },
                                    { ref: 'http://project/product-card', title: "Клапаны зеленые" }
                                ]
                            },
                            {
                                title: "Гайки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Гайки синие" },
                                    { ref: 'http://project/product-card', title: "Гайки красные" },
                                    { ref: 'http://project/product-card', title: "Гайки зеленые" }
                                ]
                            },
                            {
                                title: "Сетки",
                                subProducts: [
                                    { ref: 'http://project/product-card', title: "Сетки синие" },
                                    { ref: 'http://project/product-card', title: "Сетки красные" },
                                    { ref: 'http://project/product-card', title: "Сетки зеленые" }
                                ]
                            },
                        ]
                    },

                ]
            }
        }
    })



    app.mount("#app");
</script>