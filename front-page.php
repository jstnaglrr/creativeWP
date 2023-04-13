<?php 

/*
    Template Name: Home
*/ 

?>

<?php get_header(); ?>

<section class="banner">
        <div class="container">

            <div class="banner__wrapper">

                <div class="banner__content">
                    <h1><?php echo get_field('banner_title');?></h1>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, ut quo! Fuga est ut esse facere cupiditate, illo ex impedit possimus natus eius sunt animi cumque veritatis saepe nobis incidunt?
                    </p>
                    <a href="#">Explore more</a>
                </div>

                <?php 
                $img = get_field('banner_image');
                if(!empty($img)) :
                ?>

                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?> 

            </div>

        </div>
    </section>

    <section class="section2">
        <div class="container">

            <div class="section2__gridWrapper">
            <?php 
            
            if(have_rows('service_repeater')) :
                while(the_repeater_field('service_repeater')) :

            ?>
                <div class="section2__gridContent">
                    <?php

                    $img = get_sub_field('service_icon');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
                    <h3><?php echo get_sub_field('service_title');?></h3>
                    <p>
                    <?php echo get_sub_field('service_content');?>
                    </p>
                    <a href="#">get a quote</a>
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
    </section>

    <section class="section3">
        <div class="container">

            <div class="section3__gridWrapper">

            <?php 
            
            if(have_rows('about_me')) :
                while(the_repeater_field('about_me')) :

            ?>
                <div class="section3__gridContent">
                    <?php

                    $img = get_sub_field('about_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
                </div>    

                <div class="section3__gridContent">
                    <h2><?php echo get_sub_field('about_title');?></h2>      
                    <p>
                    <?php echo get_sub_field('about_content');?>
                    </p>     
                    <p>
                    <?php echo get_sub_field('about_content');?>
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

        </div>    
    </section>

    <section class="Section_4">
        <div class="container">
        <?php 
            
            if(have_rows('latest_trends')) :
                while(the_repeater_field('latest_trends')) :

            ?>
            <h1><?php echo get_sub_field('latest_title');?></h1>
            <p><?php echo get_sub_field('latest_parag');?></p>

            <div class="Section__4gridWrapper">
            <?php 
            
            if(have_rows('trend_contents')) :
                while(the_repeater_field('trend_contents')) :

            ?>
                <div class="Section__4gridContent">
                    
                <?php

                    $img = get_sub_field('trend_image');
                    if(!empty($img)):

                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>

                    <div class="card">
                        <h4><?php echo get_sub_field('trend_title');?></h4>
                        <p> 
                        <?php echo get_sub_field('trend_content');?>
                        </p>
                        <a href="">Read more...</a>
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
            <?php 

                endwhile;
                else :
                    echo "There is no content!";
                endif;
                wp_reset_postdata();

            ?>
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