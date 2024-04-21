<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package default-theme
 */

get_header();

?>
<!-- 
<section class="l-page page-calculator page-post-archive">
	<div class="nwrapper">
		<div class="ncol-2">
			<ul class="product-types">
				<li class="product-type">

					<nav сlass="certain-product">
						<ul>
							<li>
								<a class="link">
									<p>Вентили (клапаны)</p>
								</a>
							</li>
							<li>
								<a class="link">
									<p>Задвижки</p>
								</a>
							</li>
							<li>
								<a class="link">
									<p>Затворы</p>
								</a>
							</li>
							<li>
								<a class="link">
									<p>Клапаны обратные</p>
								</a>
							</li>
							<li>
								<a class="link">
									<p>Краны шаровые под приварку</p>
								</a>
							</li>
							<li>
								<a class="link">
									<p>Краны шаровые фланцевые, муфтовые</p>
								</a>
							</li>
						</ul>
					</nav>
				</li>

			</ul>
		</div>
		<div class="ncol-10">
			<h1 class="section-title">Калькулятор металлопроката</h1>

			<div class="metall-types">
				<div class="metall-types__item active">Нержавеющая сталь</div>
				<div class="metall-types__item">Алюминий</div>
				<div class="metall-types__item">Медь</div>
				<div class="metall-types__item">Латунь</div>
				<div class="metall-types__item">Бронза</div>

			</div>

			<div class="metall-info">
				<div class="metall-info__scheme">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/metall/scheme.svg">

				</div>

				<div class="metall-info__inputs">
					<div class="form-group">
						<label>Внешний диаметр, мм</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<div class="form-group">
						<label>Количество, шт</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<div class="form-group">
						<label>Толщина стенки, мм</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<div class="form-group">
						<label class="text-red">Общий вес, т</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<div class="form-group">
						<label>Длина, мм</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<div></div>
					<div class="form-group">
						<label class="text-red">Вес 1 шт, кг</label>
						<input type="number" class="form-control" placeholder="Например, 100">

					</div>
					<button class="nbtn ">Рассчитать стоимость</button>
				</div>
				<p class="metall-info__description">
					Калькулятор металла позволяет вам быстро и точно рассчитать вес выбранного металлопроката,
					основываясь на его размерах. Это очень полезный инструмент при планировании и оценке проектов, а
					также при заказе необходимого количества материала. Мы надеемся, что наш калькулятор металла будет
					полезным для вас. Если у вас возникнут вопросы или потребуется дополнительная информация, не
					стесняйтесь обращаться!
				</p>
			</div>
		</div>

	</div>
</section> -->



<section class="l-page page-about-company">

  <?php
  // Section - Contacts
  get_template_part(
    'template-parts/section-contacts',
    null,
    array(
      'section-number' => '08',
    )
  );
  ?>

  <?php
  // Section - Map
  get_template_part('template-parts/section-map');
  ?>
</section>



<?php get_footer(); ?>