<?php
function softlab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer ', 'softlab' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'softlab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'softlab_widgets_init' );