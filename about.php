<?php 

/*
    Template Name: About
*/ 

?>

<?php get_header(); ?>

<section class="banner_2">

        <div class="container">
            <div class="banner__wrapper2">
                <div class="banner_content2">
                    <p><?php echo get_field('banner_p');?></p>
                    <h1><?php echo get_field('banner_title');?></h1>
                    <P><?php echo get_field('banner_content');?></P>
                    <P><?php echo get_field('banner_content');?></P>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>

                </div>
                <?php 
                $img = get_field('banner_image');
                if(!empty($img)) :
                ?>

                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?> 
            </div>
        </div>

        <div class="arrow">
            <a href=""></a><i class="fa-sharp fa-solid fa-chevron-down"></i></a>
        </div>  

    </section>

    <section class="section_trends">

        <div class="container">
            <h1>My Recent Projects</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="section__trendsGridWrapper">
            <?php 
            
            if(have_rows('recent_repeater')) :
                while(the_repeater_field('recent_repeater')) :

            ?>
                <div class="Section__4gridContent">
                    <?php

                    $img = get_sub_field('recent_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>

                    <div class="card_trends">
                    <h4><?php echo get_sub_field('recent_title');?></h4>
                    <P><?php echo get_sub_field('recent_content');?></P>
                    </div>

                </div>

                 <?php 

                endwhile;
                else :
                    echo "There is no content!";
                endif;
                wp_reset_postdata();

            ?>

            </div>

            <div class="Section__4gridWrapper">
            <?php 
            
            if(have_rows('recent_repeater')) :
                while(the_repeater_field('recent_repeater_2')) :

            ?>
                <div class="Section__4gridContent">
                    <?php

                    $img = get_sub_field('recent_image_2');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>

                    <div class="card_trends">
                    <h4><?php echo get_sub_field('recent_title_2');?></h4>
                    <P><?php echo get_sub_field('recent_content_2');?></P>
                    </div>

                </div>

                 <?php 

                endwhile;
                else :
                    echo "There is no content!";
                endif;
                wp_reset_postdata();

            ?>

            </div>

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
    </section>


<?php get_footer(); ?>