<section class="testimonial_wrapper position-relative overflow-hidden section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-30">
                    <div class="text-center section-title">
                        <?php 
                        $testimonial_title=get_field('testimonial_title','options');
                        if($testimonial_title){
                            ?>
                            <h2><?php echo $testimonial_title;?></h2>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="row ">
               <div class="col-12">
                <div class="testimonial_widget owl-carousel">
                    <?php 
                    $args=array(
                        'post_type'=>'testimonials',
                        'posts_per_page'=>3
                    );
                    $query= new WP_Query($args);
                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                            ?>
                             <div class="testimonial_items">
                        <div class="content text-center">
                            <div class="rating_author">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h6><?php the_title();?></h6>
                            <p><?php the_excerpt();?></p>
                            <hr>
                            <div class="author">
                                <div class="author_img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt>
                                </div>
                                <div class="author_name">
                                    <?php 
                                    $name=get_field('name');
                                    $desc=get_field('desc');
                                    if($name && $desc) {
                                        ?>
                                        <h6><?php echo $name;?></h6>
                                    <small><?php echo $desc;?></small>
                                        <?php
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                    }
                    ?>
                   
                </div>
               </div>
            </div>
            <div class="shape_1 d-none d-md-block">
                <img src="<?php echo get_theme_file_uri();?>./assets/img/te_v_01.svg" alt="">
            </div>
            <div class="shape_2 d-none d-md-block">
                <img src="<?php echo get_theme_file_uri();?>./assets/img/te_v_02.svg" alt="">
            </div>
        </div>
    </section>