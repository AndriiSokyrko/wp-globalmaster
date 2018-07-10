<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 12.05.2018
	 * Time: 17:48
	 */
?>
 
<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'       => 'div',
		'container_class'=>'menu' ,
		'container_id'=>'primary-menu',
		'menu_class'     => 'span-28',
//			'walker' => new Primary_Walker_Naw_Menu(),
	) );
	?>
<?php endif; ?>

