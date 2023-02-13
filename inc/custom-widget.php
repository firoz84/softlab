<?php 


class Footer_social_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Footer_social_Widget',  // Base ID
			__('footer social widget','softlab')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Footer_social_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$footer_logo=get_field('footer_logo',$widget_id);
		$footer_content=get_field('footer_content',$widget_id);
		$footer_socials=get_field('footer_social',$widget_id);
		$copy_right=get_field('copy_right',$widget_id);
		
       
		
		
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
            <div class="col-lg-4 col-md-5 col-sm-6 mt-30">
                <div class="single-footer-wid">
                    <div class="footer_logo mb-25">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php 
                            if($footer_logo){
                                ?>
                                <img src="<?php echo $footer_logo['url']; ?>" alt="">
                                <?php
                            }
                            ?>
                            
                        </a>
                    </div>
                    <?php 
                    if($footer_content){
                        ?>
                        <p><?php echo $footer_content;?></p>
                        <?php
                    }
                    ?>
                    
                    <div class="social_link_footer mt-25">
                        <?php 
                        foreach( $footer_socials as $social){
                            ?>
                             <a href="<?php echo $social['link'];?>"><i class="<?php echo $social['icons'];?>"></i></a>
                            <?php
                        }
                        ?>
                    
                    </div>
                    <div class="copy_right mt-25">
                        <?php 
                        if($copy_right){
                            ?>
                              <p><?php echo $copy_right;?></p>
                            <?php
                        }
                        ?>
                      
                    </div>
                </div>
            </div>
        <?php

		
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'softlab' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'softlab' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$footer_widget = new Footer_social_Widget();


//footer menu widget

class Footer_enu_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Footer_enu_Widget',  // Base ID
			__('footer Menu widget','softlab')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Footer_enu_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$footer_logo=get_field('footer_logo',$widget_id);
		
		
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
        <div class="col-lg-2 col-md-3 col-sm-6 mt-30">
            <div class="single-footer-wid">
                <h4>Resources</h4>

                <?php 
                wp_nav_menu(array(
                    'theme_location' =>'footer'

                ));
                ?>
                <!-- <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Documentaions</a></li>
                </ul> -->
            </div>
        </div>
        <?php

	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'softlab' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'softlab' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$footer_menu_widget = new Footer_enu_Widget();

//footer product menu

class Footer_product_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Footer_product_Widget',  // Base ID
			__('footer product widget','softlab')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Footer_product_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$footer_pros=get_field('footer_pro',$widget_id);
		
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		  ?>
       <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
            <div class="single-footer-wid">
                <h4>Our Products</h4>
                <ul>
                    <?php 
                    foreach($footer_pros as $footer_pro){
                        ?>
                         <li><a href="#"> <img src="<?php echo $footer_pro['footer_img']['url'];?>" alt><?php echo $footer_pro['pro_title'];?></a></li>
                        <?php
                    }
                    ?>
                   
                </ul>
            </div>
        </div>
        <?php

	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'softlab' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'softlab' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$footer_meu_widget = new Footer_product_Widget();


// product widget Newsletter

class Footer_newslatter extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Footer_newslatter',  // Base ID
			__('footer news latter','softlab')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Footer_newslatter' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$news_la=get_field('news_la',$widget_id);
		
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		  ?>
        
        <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
            <div class="single-footer-wid">
                <h4>Subscribe to Our Newsletter</h4>
                <div class="newsletter_box mb-25">
                    <?php 
                    echo do_shortcode('[contact-form-7 id="171" title="newslatter"]');
                    ?>
                    <!-- <form action="#">
                        <input type="email" placeholder="Enter your mail">
                        <button class="theme-btn" type="submit">Send<i class="fab fa-telegram-plane"></i></button>
                    </form> -->
                </div>
                <?php 
                if($news_la){
                    ?>
                    <p><?php echo $news_la;?></p>
                    <?php
                }
                ?>
                
            </div>
        </div>
        <?php

	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'softlab' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'softlab' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$footer_newsla_widget = new Footer_newslatter();