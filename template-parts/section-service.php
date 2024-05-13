<section class="section-techlogoies">

    <div class="nwrapper">
        <div class="head">
            <div class="ncol-2">
                <p class="section-number">03</p>
            </div>
            <div class="ncol-10">
                <h1>Наши услуги</h1>
            </div>
        </div>

        <div class="product-type service-type">
            <div class="ncol-2">
            </div>
            <div class="ncol-10">
                <div class="production-line ">
                    <div class="service ">
                        <a href="">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group.png">
                        </a>
                    </div>
                    <div class="service ">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-1.png">
                        </a>
                    </div>
                    <div class="service ">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-2.png">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-3.png">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-4.png">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-5.png">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <p>Вентили (клапаны)</p>

                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/Mask group-6.png">
                        </a>
                    </div>
                </div>
                <div class="show-line">
                    <div class="line"></div>
                    <p>Свернуть </p>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                    <div class="line"></div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Скрипт, отвечающий за отображение/скрытие услуг (такой же как и с продуктами) -->
<script>
    const services = document.querySelectorAll('.service');
    function countServicesInFirstRow() {
        //Расчёт количества продуктов в первой строке (считаются только те продукты, у которых нет класса hidden)
        let firstOffset = services[0].offsetTop;
        let counter = 0;
        services.forEach((col) => {
            let offset = col.offsetTop
            if (firstOffset !== offset) {
                return counter
            }
            counter += 1;
        })
        return counter;
    }


    function renderAllservices() {
        //Отрисовка всех продуктов  на странице (убираем у всех класс hidden)
        servicesGrid.forEach((servicesPart) => {
            servicesPart.forEach((product) => {
                product.classList.remove('hidden')
            })
        })

    }
    const servicesTypes = Array.from(document.querySelectorAll('.product-type.service-type'));
    const servicesGrid = [];
    const showLinesMoreService = [];
    console.log('servicesTypes: ', servicesTypes);
    servicesTypes.forEach((productType) => {
        //servicesGrid - матрица, где строка - это сетка продуктов (сетки в верстке, разделены show-line-ми и имеют класс production-line), столбец - продукты в сетке
        //showLinesMoreService - линия и кнопка "Свернуть"
        servicesGrid.push(productType.querySelectorAll('.ncol-10 .production-line .service'))
        showLinesMoreService.push(productType.querySelector('.ncol-10 .show-line'))
    })

    let servicesInFirstRow = countServicesInFirstRow();

    //Массив флагов, где i-ый флаг отвечает за то свернута ли i-ая сетка
    let isClosedService = new Array(servicesGrid.length).fill(false);

    window.addEventListener('resize', () => {
        //При изменение размера экрана отрисовываем все продукты (чтобы правильно посчитать количество продуктов в 1-ой строке), 
        // высчитаывем сколько их помещается в первой строке, и если они должны быть 
        //свернуты, то сворачиваем их

        renderAllservices();
        servicesInFirstRow = countServicesInFirstRow();
        showLinesMoreService.forEach((showLine, index) => {
            !isClosedService[index] ? openExtraservices(index) : closeExtraservices(index);
        })
    });

    function closeExtraservices(index) {
        //Сворачиваем index-ую сетку
        for (let i = servicesInFirstRow; i < servicesGrid[index].length; i++) {
            servicesGrid[index][i].classList.add('hidden')
        }
    }
    function openExtraservices(index) {
        //Разворачиваем index-ую сетку
        for (let i = servicesInFirstRow; i < servicesGrid[index].length; i++) {
            servicesGrid[index][i].classList.remove('hidden')
        }
    }


    function changeServicesVisibility(index, showLineMoreText, showLineMoreImg) {
        servicesInFirstRow = countServicesInFirstRow();
        isClosedService[index] ? openExtraservices(index) : closeExtraservices(index);

        if (isClosedService[index]) {
            showLineMoreText.textContent = 'Свернуть'
            showLineMoreImg.classList.add('rotate');
        }
        else {
            showLineMoreText.textContent = 'Развернуть'
            showLineMoreImg.classList.remove('rotate');
        }
        isClosedService[index] = !isClosedService[index];
    }
    showLinesMoreService.forEach((showLine, index) => {
        //Проходимся по всем showLine-м и добавляем слушатель клика на каждую линию, а также берем текст и иконку, чтобы менять их при сворачивании
        const showLineMoreText = showLine.querySelector('p');
        const showLineMoreImg = showLine.querySelector('img');
        showLine.addEventListener('click', () => {
            changeServicesVisibility(index, showLineMoreText, showLineMoreImg);
        })
        changeServicesVisibility(index, showLineMoreText, showLineMoreImg);

    })





</script>