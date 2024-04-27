<section class="section-techlogoies">

    <div class="nwrapper">
        <div class="head">
            <div class="ncol-2">
                <p class="section-number">01</p>
            </div>
            <div class="ncol-10">
                <h1>Наша продукция</h1>
            </div>
        </div>

        <div class="product-type">
            <div class="ncol-2">
                <p>Трубозапорная арматура</p>
            </div>
            <div class="ncol-10">
                <div class="production-line">
                    <div class="product">
                        <a href="">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_1.png">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product ">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_2.png">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_3.png">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_4.png">

                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_4.png">

                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_4.png">

                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_4.png">

                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/1_4.png">

                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                </div>

                <div class="show-line">
                    <div class="line"></div>
                    <p>Свернуть </p>
                    <img class="rotate"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                    <div class="line"></div>

                </div>
            </div>
        </div>
        <div class="product-type">
            <div class="ncol-2">
                <p>Трубозапорная арматура</p>
            </div>
            <div class="ncol-10">
                <div class="production-line">
                    <div class="product">
                        <a href="">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_1.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_2.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_3.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_4.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_5.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#">
                            <img class=""
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/2_6.jpg">
                            <p>Вентили (клапаны)</p>
                        </a>
                    </div>
                </div>

                <div class="show-line">
                    <div class="line"></div>
                    <p>Свернуть </p>
                    <img class="rotate"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/production/arrow-down.svg">
                    <div class="line"></div>

                </div>
            </div>
        </div>
    </div>
</section>






<!-- Скрипт, отвечающий за отображение/скрытие продуктов -->
<script>
    const products = document.querySelectorAll('.product');
    function countProductsInFirstRow(debug) {
        //Расчёт количества продуктов в первой строке (считаются только те продукты, у которых нет класса hidden)
        let firstOffset = products[0].offsetTop;
        let counter = 0;
        products.forEach((col) => {
            let offset = col.offsetTop
            if (firstOffset !== offset) {
                return counter
            }
            counter += 1;
        })
        return counter;
    }


    function renderAllProducts() {
        //Отрисовка всех продуктов  на странице (убираем у всех класс hidden)
        productsGrid.forEach((productsPart) => {
            productsPart.forEach((product) => {
                product.classList.remove('hidden')
            })
        })

    }
    const productTypes = Array.from(document.querySelectorAll('.product-type'));
    const productsGrid = [];
    const showLinesMore = [];
    productTypes.forEach((productType) => {
        //productsGrid - матрица, где строка - это сетка продуктов (сетки в верстке, разделены show-line-ми и имеют класс production-line), столбец - продукты в сетке
        //showLinesMore - линия и кнопка "Свернуть"
        productsGrid.push(productType.querySelectorAll('.ncol-10 .production-line .product'))
        showLinesMore.push(productType.querySelector('.ncol-10 .show-line'))
    })

    let productsInFirstRow = countProductsInFirstRow();

    //Массив флагов, где i-ый флаг отвечает за то свернута ли i-ая сетка
    let isClosed = new Array(productsGrid.length).fill(false);

    window.addEventListener('resize', () => {
        //При изменение размера экрана отрисовываем все продукты (чтобы правильно посчитать количество продуктов в 1-ой строке), 
        // высчитаывем сколько их помещается в первой строке, и если они должны быть 
        //свернуты, то сворачиваем их

        renderAllProducts();
        productsInFirstRow = countProductsInFirstRow();
        showLinesMore.forEach((showLine, index) => {
            !isClosed[index] ? openExtraProducts(index) : closeExtraProducts(index);
        })
    });

    function closeExtraProducts(index) {
        //Сворачиваем index-ую сетку
        for (let i = productsInFirstRow; i < productsGrid[index].length; i++) {
            productsGrid[index][i].classList.add('hidden')
        }
    }
    function openExtraProducts(index) {
        //Разворачиваем index-ую сетку
        for (let i = productsInFirstRow; i < productsGrid[index].length; i++) {
            productsGrid[index][i].classList.remove('hidden')
        }
    }

    showLinesMore.forEach((showLine, index) => {
        //Проходимся по всем showLine-м и добавляем слушатель клика на каждую линию, а также берем текст и иконку, чтобы менять их при сворачивании
        const showLineMoreText = showLine.querySelector('p');
        const showLineMoreImg = showLine.querySelector('img');
        showLine.addEventListener('click', () => {
            productsInFirstRow = countProductsInFirstRow();
            isClosed[index] ? openExtraProducts(index) : closeExtraProducts(index);


            if (isClosed[index]) {
                showLineMoreText.textContent = 'Свернуть'
                showLineMoreImg.classList.add('rotate');
            }
            else {
                showLineMoreText.textContent = 'Развернуть'
                showLineMoreImg.classList.remove('rotate');
            }
            isClosed[index] = !isClosed[index];
        })
    })



</script>