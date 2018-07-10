<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- .content-area -->
<div class="hero-advantages">
	<?php if ( has_nav_menu( 'hero-advantages' ) ) : ?>
		<?php
		get_hero_advantages_navigation();
		?>
	<?php endif; ?>
</div>
<div class="intro">
	<div class="text home-hero prepend-15 span-13 last">

		<div class="title-home">
			Ремонт бытовой техники
			<br>
			в Киеве и пригороде
		</div>
		<div class="description">
			<p>
				Устраним любые проблемы в&nbsp;работе вашей техники качественно, в&nbsp;кратчайший срок и&nbsp;по&nbsp;честной
				цене. Для вас мы работаем каждый день: будни, выходные и праздники.
			</p>
			<div class="home-comment">
				Выезд на дом в Киеве.
			</div>
		</div>
	</div>
</div>

<div class="container">

	<div class="content" id="content">

		<div class="products main">
			<style>#remont li{padding-left:1.56%;margin-left:1.56%;width:22.50%;margin-bottom:20px;}#remont li:first-child{padding-left:0;margin-left:0;}#remont li img{width:100%; max-width: 310px;}#remont li:nth-child(4n+1) {padding-left:0;margin-left:0;} .lscheme{height:20px;margin:0 auto;border-left:2px solid #DDD;border-top:2px solid #DDD;border-right:2px solid #DDD;margin-bottom:-30px;}</style>

			<h2>Узнайте стоимость ремонта вашей техники</h2><div class="lscheme" style="width:76%;"><div class="lscheme" style="width:34%;border-top:none;"></div></div>
			<ul id="remont">

				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D1%85%D0%BE%D0%BB%D0%BE%D0%B4%D0%B8%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/fridge.png" alt="Холодильник, минибар"><span>Холодильник, минибар</span></a></li>
				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D1%81%D1%82%D0%B8%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/washer.png" alt="Стиральная машина"><span>Стиральная<br>машина</span></a></li>
				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%BF%D0%BE%D1%81%D1%83%D0%B4%D0%BE%D0%BC%D0%BE%D0%B5%D1%87%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/dishwasher.png" alt="Посудомоечная машина"><span>Посудомоечная машина</span></a></li>
				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%B2%D0%B0%D1%80%D0%BE%D1%87%D0%BD%D1%8B%D1%85-%D0%BF%D0%BE%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%BE%D1%81%D1%82%D0%B5%D0%B9.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/hob-install.png" alt="Варочная панель"><span>Варочная панель</span></a></li>
				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%B2%D0%B0%D1%80%D0%BE%D1%87%D0%BD%D1%8B%D1%85-%D0%BF%D0%BE%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%BE%D1%81%D1%82%D0%B5%D0%B9.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/cooker-install.png" alt="Электроплита"><span>Электроплита</span></a></li>

				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D0%B2%D0%BE%D0%BB%D0%BD%D0%BE%D0%B2%D0%BE%D0%BA-%D0%BA%D0%B8%D0%B5%D0%B2.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/oven-install.png" alt="Духовой шкаф"><span>Микроволновка</span></a></li>

				<li><a href="http://globalmaster.com.ua/%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%BA%D0%BE%D0%BD%D0%B4%D0%B8%D1%86%D0%B8%D0%BE%D0%BD%D0%B5%D1%80%D0%BE%D0%B2.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/ффф.png" alt="Духовой шкаф"><span>Кондиционер</span></a></li>
				<li><a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA-%D0%BA%D0%B8%D0%B5%D0%B2.htm">
						<img src="<?php echo get_template_directory_uri()?>/images/51078f25ac7959482a005f5e.png" alt="Духовой шкаф"><span>Сантехника</span></a></li>

			</ul>

			<style>#connect li{padding-left:1.56%;margin-left:1.56%;width:22.50%;margin-bottom:20px;}#connect li:first-child{padding-left:0;margin-left:0;}#connect li img{width:100%; max-width: 310px;}#connect li:nth-child(4n+1) {padding-left:0;margin-left:0;} .lscheme{height:20px;margin:0 auto;border-left:2px solid #DDD;border-top:2px solid #DDD;border-right:2px solid #DDD;margin-bottom:-30px;}</style>
		</div>

		<div class="text home prepend-10 append-1 span-17 last">



			<h2>ГЛОБАЛ–МАСТЕР РЕМОНТ БЫТОВОЙ ТЕХНИКИ НА ПРОФЕССИОНАЛЬНОМ УРОВНЕ</h2>
			<p>Сервисный центр  ГЛОБАЛ-МАСТЕР  предоставляет услуги по  профессиональному  ремонту  крупногабаритной бытовой техники – стиральных машин, варочных поверхностей, холодильного оборудования и др.
			</p>
			<h2>НУЖЕН ВЫСОКОКВАЛИФИЦИРОВАННЫЙ МАСТЕР ПО  РЕМОНТУ БЫТОВОЙ ТЕХНИКИ – ОБРАЩАЙТЕСЬ К НАМ!</h2>
			<p>Поломка техники происходит всегда внезапно и привносит с собой массу неудобств. В таких ситуациях Глобал Мастер всегда к Вашим услугам.  Достаточно связаться с нами по   телефону (044) 222-63-56,  и мы избавим Вас от возникших проблем,  взяв на себя ответственность по их устранению.
			</p><p>При подаче заявки, вам необходимо сообщить, каким образом  проявляется неисправность техники и наши специалисты, благодаря накопленному опыту работы, смогут дистанционно выполнить ее предварительную диагностику. В результате таких предварительных операций мастер сервисного центра приедет к Вам домой  с необходимыми запасными деталями и нужным для ремонта оборудованием.
			</p><p>В самые короткие сроки Вами будет получена исправная, полностью пригодная для дальнейшей эксплуатации, работоспособная техника.
			</p>



			<h2>НУЖЕН КАЧЕСТВЕННЫЙ И БЫСТРЫЙ РЕМОНТ БЫТОВОЙ ТЕХНИКИ НА ДОМУ – ОБРАЩАЙТЕСЬ К НАМ!</h2>
			<p>Если внезапно случилась поломка бытовой техники – Глобал Мастер к Вашим услугам.  Достаточно всего лишь  набрать наш контактный номер телефона (044) 222-63-56 и ваши проблемы станут нашими заботами.
			</p>


			<h2>Сантех-ремонты</h2>
			<p>Мы выполняем любые <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B-%D0%BA%D0%B8%D0%B5%D0%B2.htm">сантехнические работы</a>: <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D0%BF%D0%BE%D1%81-%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5.htm">подключение посудомоечных</a> и <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%81%D1%82%D0%B8%D1%80-%D0%BF%D0%BE%D0%B4%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5.htm">стиральных машин</a>, <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%83%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0-%D0%B1%D0%BE%D0%B9%D0%BB%D0%B5%D1%80%D0%BE%D0%B2.htm">установка бойлеров</a>, <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D0%BF%D1%80%D0%BE%D1%87%D0%B8%D1%81%D1%82%D0%BA%D0%B0-%D0%BA%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8.htm">прочистка канализаций</a>, <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%83%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0-%D1%80%D0%B0%D0%B4%D0%B8%D0%B0%D1%82%D0%BE%D1%80%D0%BE%D0%B2.htm">установка батарей</a>, <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%83%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0-%D1%83%D0%BD%D0%B8%D1%82%D0%B0%D0%B7%D0%B0-%D0%BA%D0%B8%D0%B5%D0%B2.htm">унитазов</a>, <a href="http://globalmaster.com.ua/%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA/%D1%83%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0-%D0%BA%D1%80%D0%B0%D0%BD%D0%B0.htm">смесителей</a>.</p>




			<h2>
				Оформления заказа: как ускорить процесс?</h2>
			<p>Нужно знать точную модель вашей бытовой техники.</p>
			<p>Подробно описать менеджеру  неисправность. Детально изложить ваши последние действия. Это поможет избежать недоразумений.
			</p><p>Сообщить мастеру адрес, где будет проводиться ремонт техники и контактный номер телефона.</p>
			<p>Мы пытаемся работать по принципу: «КЛИЕНТ ВСЕГДА ПРАВ». На протяжении всех лет работы мы стараемся создать все условия для хорошего сервиса потому у нас нет недовольных клиентов. Мы с радостью идем навстречу клиентам по вопросам гарантийного и послегарантийного обслуживания бытовой техники.
			</p>

			<div class="callback" id="callback">
				<h2 style="margin-bottom:5px">Сделайте заявку со <span class="important">скидкой 5%</span></h2>
				<p style="margin-bottom:10px">Оформляя заявку на ремонт через сайт, вы получите скидку на ремонт 5%.</p>
				<div class="column span-5"> <a class="order2" href="http://globalmaster.com.ua/%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0.htm">Вызвать мастера</a> </div>
			</div>
		</div>

	</div>

</div>

</div>





<?php get_footer(); ?>
