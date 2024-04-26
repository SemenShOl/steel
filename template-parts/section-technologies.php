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

<script>
    function countProductsInFirstRow() {
        const products = document.querySelectorAll('.product');
        let counter = {}
        products.forEach((col) => {
            let offset = col.offsetTop
            counter[offset] = counter[offset] ? counter[offset] + 1 : 1
        })
        return Object.values(counter)[0]
    }

    const productTypes = Array.from(document.querySelectorAll('.product-type'));
    const productsGrid = [];
    const showLinesMore = [];
    productTypes.forEach((productType) => {
        productsGrid.push(productType.querySelectorAll('.ncol-10 .production-line .product'))
        showLinesMore.push(productType.querySelector('.ncol-10 .show-line'))
    })

    let productsInFirstRow = countProductsInFirstRow();
    let isClosed = false;

    // window.addEventListener('resize', () => {
    //     productsInFirstRow = countProductsInFirstRow();
    //     showLinesMore.forEach((showLine, index) => {
    //         !isClosed ? openExtraProducts(index) : closeExtraProducts(index);
    //     })
    // });

    function closeExtraProducts(index) {
        for (let i = productsInFirstRow; i < productsGrid[index].length; i++) {
            productsGrid[index][i].classList.add('hidden')
        }
    }
    function openExtraProducts(index) {
        for (let i = productsInFirstRow; i < productsGrid[index].length; i++) {
            productsGrid[index][i].classList.remove('hidden')
        }
    }

    showLinesMore.forEach((showLine, index) => {
        const showLineMoreText = showLine.querySelector('p');
        const showLineMoreImg = showLine.querySelector('img');
        console.log(showLineMoreImg)
        showLine.addEventListener('click', () => {
            // isClosed ? openExtraProducts(index) : closeExtraProducts(index);
            for (let i = productsInFirstRow; i < productsGrid[index].length; i++) {
                productsGrid[index][i].classList.toggle('hidden')
            }
            if (isClosed) {
                showLineMoreText.textContent = 'Свернуть'
                showLineMoreImg.classList.add('rotate');
            }
            else {
                showLineMoreText.textContent = 'Развернуть'
                showLineMoreImg.classList.remove('rotate');
            }
            isClosed = !isClosed;
        })
    })



</script>