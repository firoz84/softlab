<section class="cta_wrapper bg-center bg-cover overflow-hidden" style="background-image: url(<?php echo get_theme_file_uri();?>./assets/img/cta_bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <?php 
                        $action_title= get_field('action_title','options');
                        $content= get_field('content','options');
                        $btn_title= get_field('btn_title','options');
                        $btn_link= get_field('btn_link','options');
                        if($action_title && $content && $btn_title && $btn_link){
                            ?>
                            <h2><?php echo $action_title;?></h2>
                            <p><?php echo $content;?></p>
                            <a href="<?php echo $btn_link;?>" class="btnd mt-30"><?php echo $btn_title;?></a>
                            <?php
                        }
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </section>