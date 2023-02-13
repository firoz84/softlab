<section class="about_wrapper section-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <?php 
                            $about_image=get_field('about_image','options');
                            if($about_image){
                                ?>
                                <img src="<?php echo $about_image['url'];?>" alt="about">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 ps-3">
                    <div class="about_content">
                        <?php 
                        $about_title=get_field('about_title','options');
                        $about_content=get_field('about_content','options');
                        $about_btn=get_field('about_btn','options');
                        $about_text=get_field('about_text','options');

                        if($about_title){
                            ?>
                            <h2><?php echo $about_title;?></h2>
                            <?php
                        }
                        
                        ?>
                        <?php 
                        if($about_content){
                            ?>
                            <p><?php echo $about_content;?>.</p>
                            <?php
                        }
                        ?>
                        <?php 
                        if($about_btn  && $about_text){
                            ?>
                            
                        <a href="<?php echo $about_btn;?>" class="theme-btn mt-30"><?php echo $about_text;?></a>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="shape_bg d-none d-xl-block">
            <img src="<?php echo get_theme_file_uri();?>./assets/img/bg_shape.svg" alt="">
        </div>
        <div class="shape_element">
            <img src="<?php echo get_theme_file_uri();?>./assets/img/Vector1.svg" alt>
        </div>
    </section>