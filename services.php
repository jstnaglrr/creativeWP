<?php 

/*
    Template Name: Services
*/ 

?>

<?php get_header(); ?>

<section class="banner_3">
        <div class="container">
            <div class="banner__wrapper3">
                
                <div class="banner_content3">
                    <h1><?php echo get_field('banner_title');?></h1>

                    <P><?php echo get_field('banner_content');?></p>
                    <P><?php echo get_field('banner_content');?></p>
                    <p class="price">PRICE START AT <br> <span>$250-$350</span> <br> Price start depending on <br> the
                        design and Development</p>
                </div>
                <?php

                    $img = get_field('banner_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>

            </div>

            <div class="arrow">
                <a href=""></a><i class="fa-sharp fa-solid fa-chevron-down"></i></a>
            </div>
        </div>

    </section>

    <section class="services_3">
        <div class="container">
            <div class="services__wrapper3">
            <?php 
            
            if(have_rows('gv_design')) :
                while(the_repeater_field('gv_design')) :

            ?>
                <?php

                    $img = get_sub_field('gv_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>

                <div class="services_content3">
                    <h1><?php echo get_sub_field('gv_title');?></h1>

                    <P><?php echo get_sub_field('gv_content');?></P>
                    <P><?php echo get_sub_field('gv_content');?></P>

                    <p class="services_price">PRICE START AT <br> <span>$250-$350</span> <br> Price may vary depending
                        on the design
                    </p>

                </div>
            <?php 

                endwhile;
                else :
                    echo "There is no content!";
                endif;
                wp_reset_postdata();

            ?>
            </div>
            
            <div class="arrow"><a href=""></a><i class="fa-sharp fa-solid fa-chevron-down"></i></a>

            </div>
        </div>

    </section>

    <section class="banner_4">
        <div class="container">
            <div class="banner__wrapper4">
            <?php 
            
            if(have_rows('media_repeater')) :
                while(the_repeater_field('media_repeater')) :

            ?>
                <div class="banner_content4">
                <h1><?php echo get_sub_field('media_title');?></h1>

                <P><?php echo get_sub_field('media_content');?></P>
                <P><?php echo get_sub_field('media_content_2');?></P>

                    <p class="banner_4price">PRICE START AT <br> <span>$250-$350</span> <br> Price start depending on <br> the
                        design and Development</p>
                </div>
                <?php

                    $img = get_sub_field('media_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
            <?php 

                endwhile;
                else :
                    echo "There is no content!";
                endif;
                wp_reset_postdata();

            ?>
            </div>

            <div class="arrow">
                <a href=""></a><i class="fa-sharp fa-solid fa-chevron-down"></i></a>
            </div>
        </div>

    </section>

    
    <section class="section_5">
        <div class="container">
        
            <div class="section5__gridWrapper">
        
                <div class="section5__gridContent"> 
                    <h3>Feel free to talk us about your Projects</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a href="#">Contact Us</a>
                </div>
        
            </div>
        </div>    
    </section>

    <?php get_footer(); ?>