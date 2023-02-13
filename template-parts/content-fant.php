<section class="funfact_wrapper section-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 mb-30">
                    <div class="text-center section-title">
                        <?php 
                            $counter_title= get_field('counter_title','options');
                            if($counter_title){
                                ?>
                                <h2><?php echo $counter_title;?></h2>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                 $args=array(
                    'post_type'=>'counter',
                    'posts_per_page'=>4,
                    'orderby' => 'title', 
                        'order' => 'ASC',
                );
                $query= new WP_Query($args);
                $i=0;
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        $i++;
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
                    <div class="single_funfact_items">
                        <div class="icon_sidget">
                            <div class="icon 
                            <?php 
                            if($i==1){
                                echo 'icon-1';
                            }elseif($i==2){
                                echo 'icon-2';
                            }elseif($i==3){
                                echo 'icon-3';
                            }elseif($i==4){
                                echo 'icon-4';
                            }
                            ?>
                            ">
                                <img src="<?php the_post_thumbnail_url();?>" alt>
                            </div>
                        </div>
                        <div class="content">
                            <?php 
                            $number= get_field('number');
                           if($number){
                            ?>
                            <h3><span class="counter"><?php echo $number;?></span>+</h3>
                            <?php
                           }
                            ?>
                            
                            <p><?php the_title();?></p>
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