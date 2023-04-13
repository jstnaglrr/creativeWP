<?php 

/*
    Template Name: Updates
*/ 

?>

<?php get_header(); ?>

<section class="updateTrends">
        <div class="container">
            <h2><?php echo get_field('update_title');?></h2>
            <p><?php echo get_field('update_text');?></p>

            <div class="updateTrends_wrapper">

                <div class="leftContent">

                <?php 

                    $args = array(
                        'post_type' => 'creativeVD',
                        'posts_per_page' => 2,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'uncategorized'
                          )
                        )
                    );
                    $newQuery = new WP_Query($args); 

                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                
                    <div class="updateTrends_topic border-bottom">
                    <?php echo get_the_post_thumbnail() ?>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user"></i>Justin Aguilar
                                <i class="fa-solid fa-calendar-days"></i>March 3, 2023
                                <i class="fa-solid fa-tags"></i>Web Design | Wire Frame
                            </li>
                        </ul>
                        <h3>Designing Concept</h3>
                        <?php the_excerpt() ?>
                        <a href="<?php the_permalink()?>">Read More...</a>
                    </div>

                <?php 

                endwhile;
                    else : 
                        echo "no available post yet";
                endif;
                    wp_reset_postdata();
                
                ?>
                    
                </div>

                <div class="rightContent">

                    <div class="categories border-bottom">
                        <h2>CATEGORIES</h2>
                    <?php 
            
                    if(have_rows('updates_repeater')) :
                        while(the_repeater_field('updates_repeater')) :

                    ?>
                        <ul>
                            <li>
                                <p><?php echo get_sub_field('update_item_1');?></p>
                                <p><?php echo get_sub_field('update_no_1');?></p>
                            </li>
                        </ul>
                    <?php 

                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();

                    ?>
                    </div>

                    <div class="recentPost border-bottom">
                    
                        <h2><?php echo get_field('recent_title');?></h2>
                        <?php 
            
                        if(have_rows('recent_repeater')) :
                            while(the_repeater_field('recent_repeater')) :

                        ?>
                            <div class="thePost">
                                <?php

                                $img = get_sub_field('recent_image');
                                if(!empty($img)):

                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                                <?php endif;?>
                                
                                <div>
                                    <h4>
                                    <?php echo get_sub_field('recent_content');?>
                                    </h4>
                                    <p>
                                    <?php echo get_sub_field('recent_date');?>
                                    </p>
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

                    <div class="tags">
                        <a href="#">WEB DESIGN</a>
                        <a href="#">WIRE FRAME</a>
                        <a class="bg-dark t-white   ">WEB DEVELOPMENT</a>
                        <a href="#">VECTOR</a>
                        <a href="#">LOGO</a>
                        <a href="#">SOCIAL MEDIA</a>
                    </div>
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
        </div>    
    </section>

<?php get_footer(); ?>