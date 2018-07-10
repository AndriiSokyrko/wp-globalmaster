<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 12.05.2018
	 * Time: 17:48
	 */
?>
	<?php if ( has_nav_menu( 'top' ) ) : ?>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'top',
			'container'       => 'div',
			'container_class'=>'navigation' ,
			'container_id'=>'top-menu',
			'menu_class'     => '',
//			'walker' => new Custom_Walker_Naw_Menu(),
		) );
		?>
	<?php endif; ?>

 

