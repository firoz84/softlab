<section class="blog_wrapper section-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-30">
                    <div class="text-center section-title">
                        <?php 
                            $blog_title= get_field('blog_title','options');
                            $blog_content= get_field('blog_content','options');
                            if($blog_title && $blog_content){
                                ?>
                                <h2><?php echo $blog_title ;?></h2>
                                <p><?php echo $blog_content ;?></p>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $args=array(
                    'post_type'=>'post',
                    'posts_per_page'=>-1,

                );
                $query= new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        ?>
                         <div class="col-lg-4 mt-30">
                    <div class="single_blog">
                        <div class="blog_img bg-center bg-cover" style="background-image: url(<?php the_post_thumbnail_url();?>.);">
                         </div>
                        <div class="content">
                            <div class="date d-flex align-items-center justify-content-between">
                                <a href="#" class="btn"><?php the_author();?></a>
                                <a href="#" class="btn"><i class="far fa-calendar-alt"></i><?php echo get_the_date("F j, Y");?></a>
                            </div>
                            <h4><?php the_title();?></h4>
                            <a href="<?php the_permalink();?>" class="btnd mt-15">Explore <i class="fas fa-long-arrow-right"></i></a>
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
    </section>