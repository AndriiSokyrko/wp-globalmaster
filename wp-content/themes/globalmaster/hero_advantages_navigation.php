<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 12.05.2018
	 * Time: 17:48
	 */
?>
	<?php if ( has_nav_menu( 'hero-advantages' ) ) : ?>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'hero-advantages',
			'container'       => 'div',
			'container_class'=>'container' ,
			'container_id'=>'top-hero-advantages',
			'menu_class'     => '',
//			'walker' => new Custom_Walker_Naw_Menu(),
		) );
		?>
	<?php endif; ?>

 

