<section class="hero_wrapper bg-cover bg-center overflow-hidden" style="background-image: url(<?php echo get_theme_file_uri();?>./assets/img/banner.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                   
                    <div class="hero_banner">
                        <h1><?php the_field('hero_title','options');?></h1>
                        <p><?php the_field('hero_content','options');?></p>
                        <a href="<?php the_field('hero_btn','options');?>" class="theme-btn mt-40"><?php the_field('btn_text','options');?></a>
                    </div>
                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <div class="banner_img">
                       <?php 
                        $hero_img= get_field('hero_image','options');
                       ?>
                        <img src="<?php echo $hero_img['url'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>