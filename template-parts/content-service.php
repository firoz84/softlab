<section class="service_wrapper section-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-35">
                    <div class="text-center section-title">
                        <?php 
                        $service_title=get_field('service_title','options');
                        $service_content=get_field('service_content','options');

                        if($service_title){
                            ?>
                                <h2><?php echo $service_title;?></h2>
                                <p><?php echo $service_content;?></p>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php 
                    $args=array(
                        'post_type'=>'servics',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'orderby' => 'title', 
                        'order' => 'ASC',
                       
                        
                    );
                    $query= new WP_Query($args);
                    $i=0;
                    if($query->have_posts()) {
                        while($query->have_posts()){
                            $query->the_post();
                             $i++;
                             ?>
                    <div class="col-md-4 col-sm-6 mt-25">
                    <div class="single_service_items <?php
                            if($i==1){
                                echo 'item-1';
                            }elseif($i==2){
                                echo 'item-2';
                            }elseif($i==3){
                                echo 'item-3';
                            }elseif($i==4){
                                echo 'item-4';
                            }elseif($i==5){
                                echo 'item-5';
                            }elseif($i==6){
                                echo 'item-6';
                            }
                     
                       ?>  text-center">
                        <div class="icons">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="content">
                            <h4><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                        </div>
                        <div class="shape">
                            <?php 
                            $images= get_field('images');
                            ?>
                            <img src="<?php echo $images['url'];?>" alt="">
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