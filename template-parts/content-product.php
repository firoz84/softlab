<section class="our_product section-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-30">
                    <div class="text-center section-title">
                        <?php 
                        $product_title= get_field('product_title','options');
                        $product_text= get_field('product_text','options');

                        if($product_title){
                            ?>
                             <h2><?php echo $product_title;?></h2>
                            <?php
                        }
                        
                        ?>

                       <?php 
                       if($product_text){
                        ?>
                        <p><?php echo $product_text;?></p>
                        <?php
                       }
                       ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $args=array(
                    'post_type'=>'product',
                    'posts_per_page'=>3
                );
                $query=new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        ?>
                         <div class="col-md-4 col-sm-6 mt-30">
                    <div class="single_product text-center">
                        <div class="icons">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="content">
                            <h4><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="btnd mt-30">Explore <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
               
            </div>
        </div>
        <div class="shape_element_1 d-none d-md-block">
            <img src="<?php echo get_theme_file_uri();?>./assets/img/vector.svg" alt>
        </div>
        <div class="shape_element_2 d-none d-md-block">
            <img src="<?php echo get_theme_file_uri();?>./assets/img/vector_02.svg" alt>
        </div>
        <div class="shape_element_3 d-none d-md-block">
            <img src="<?php echo get_theme_file_uri();?>./assets/img/vector_02.svg" alt>
        </div>
    </section>