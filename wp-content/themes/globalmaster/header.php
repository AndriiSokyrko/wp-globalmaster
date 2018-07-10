<!DOCTYPE html>
<!-- saved from url=(0027)http://globalmaster.com.ua/ -->
<html <?php language_attributes(); ?> >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="keywords" content="<?php bloginfo( 'content' ); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE 6]>
	<script src="/scripts/jquery.modal.ie6.js" type="text/javascript"></script><![endif]-->
	<link rel="shortcut icon" href="http://globalmaster.com.ua/images/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="http://globalmaster.com.ua/images/favicon.ico" type="image/x-icon">


	<?php   wp_head();?>
</head>

<body class="home-body" oncopy="return false;">

<div class="container">

	<div class="header">
		<div class="base">
			<div class="logo">
				<a href="http://globalmaster.com.ua/">
					<?php echo get_custom_logo();?>
				</a>
			</div>
			<div class="slogan small">
				<?php bloginfo( 'description' ); ?>
			</div>
			<div class="slogan2 small2 ">
				<?php $str= get_option('site_phones')?>
				<?php $str= explode(';',$str) ?>

<!--				(044) 222-63-56 <br>(063) 406-97-71 <br>(097) 006-46-01-->
			</div>
			<div class="city-info">
				<span class="select">Телефоны</span>
				<div class="phone">
					<?php
						foreach ( $str as $item ) {
							$kod= substr($item,0,3);
							$number = substr($item,3);
							echo '<a href="tel:+'.$item.'" >('.$kod.')'.$number.'</a>,';
						}
					?>
				</div>
			</div>


			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<?php
				get_navigation();
				?>

			<?php endif; ?>


		</div> <!-- //base -->

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<?php
			get_primary_navigation();
			?>

		<?php endif; ?>

	</div>

	<a name="1"></a>
	<a name="2"></a>
	<a name="3"></a>
	<a name="4"></a>