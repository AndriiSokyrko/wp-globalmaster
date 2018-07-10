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
			'theme_location' => 'advantages',
			'container'       => '',
			'container_class'=>'' ,
			'container_id'=>'',
			'menu_class'     => 'advantages',
//			'walker' => new Custom_Walker_Naw_Menu(),
		) );
		?>
	<?php endif; ?>

 

