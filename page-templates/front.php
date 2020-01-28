<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="ba-main-content">
	<div class="ba-about" id="about">
        <div class="row column">
            <div class="ba-about-section">
                <div class="ba-about-image">
                    <?php
                    $image = get_field('about_image');
                    $size = 'section-image';
                    ?>
                    <?php if($image) :?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
                </div>
                <div class="ba-about-text">
                    <h2 class="ba-about-text__title"><?php the_field('about_title'); ?></h2>
                    <p class="ba-about-text__desc"><?php the_field('about_description'); ?></p>

                    <?php $button = get_field('about_button'); ?>
                    <?php if($button) : ?>
                        <div class="ba-about-text__button">
                            <a href="<?php echo $button['button_url'] ?>"><?php echo $button['button_text'] ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <?php $about_symbols = get_field('symbols_text'); ?>
                <?php if($about_symbols) : ?>
                    <div class="ba-about-symbol">
                        <p><?php echo $about_symbols['one_symbol'] ?></p>
                    </div>

                    <div class="ba-about-ver-text">
                        <p><?php echo $about_symbols['vertical_text'] ?></p>
                    </div>
                <?php endif; ?>


            </div>

        </div>
        <!-- .row .column -->
    </div>

    <div class="ba-services" id="services" style="background: url(<?php the_field('services_background'); ?>) ;background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="row column">
            <h2 class="ba-services_title"><?php the_field('services_title'); ?></h2>
            
            <?php 
            $servicesArgs = array(
            	'post_type'=>'ba-services',
            	'posts_per_page'=>3,
            );
            	$services = new WP_Query($servicesArgs);?>
            	<?php if($services->have_posts()): ?>
                    <div class="ba-services-posts">
                        <?php while($services->have_posts()): $services->the_post() ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="ba-services-post">
                                    <div class="ba-services-post-img">
                                        <?php the_post_thumbnail('services-image') ?>
                                    </div>
                                    <div class="ba-services-post_text">
                                        <h3 class="ba-services-post_title"><?php the_title(); ?></h3>
                                        <p class="ba-services-post_desc"><?php the_field('services_description'); ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
            	<?php endif;?>
            	<?php wp_reset_postdata(); ?>
            

        </div>
        <?php if (get_field('services_symbol')) : ?>
            <div class="ba-services-symbol">
                <?php the_field('services_symbol'); ?>
            </div>
        <?php endif; ?>

        <?php if (get_field('services_vertical_text')) : ?>
            <div class="ba-services-vertical">
                <?php the_field('services_vertical_text'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="ba-projects" id="projects">
        <div class="row column">
            <h2 class="ba-projects-title"><?php the_field('projects_title'); ?></h2>
        </div>
        <div class="ba-projects-slider-one">
            <?php
            $images = get_field('slider_one');
            $size = 'slider-image'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="ba-projects-slider-two">
            <?php
            $images = get_field('slider_two');
            $size = 'slider-image'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="row column">
            <div class="ba-projects-button">
                <a href="#">More</a>
            </div>
        </div>

        <?php if (get_field('projects_symbol')) : ?>
            <div class="ba-projects-symbol">
                <?php the_field('projects_symbol'); ?>
            </div>
        <?php endif; ?>

        <?php if (get_field('projects_vertical_text')) : ?>
            <div class="ba-projects-vertical">
                <?php the_field('projects_vertical_text'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="ba-testimonials-section" style="background: url(<?php the_field('testimonials_background'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="row column">
            <div class="ba-testimonials-slider">
                <?php if( have_rows('testimonails') ):?>
                    <?php while ( have_rows('testimonails') ) : the_row();?>
                        <div class="ba-testimonial">
                            <img src="<?php the_field('testimonials_quote_icon'); ?>" alt="" class="ba-testimonial-quote">
                            <p class="ba-testimonials-text"><?php the_sub_field('text'); ?></p>
                            <p class="ba-testimonials-author"><?php the_sub_field('author'); ?></p>
                            <p class="ba-testimonials-car"><?php the_sub_field('car'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if (get_field('testimonials_symbol')) : ?>
            <div class="ba-testimonials-symbol">
                <?php the_field('testimonials_symbol'); ?>
            </div>
        <?php endif; ?>

        <?php if (get_field('testimonials_vertical_text')) : ?>
            <div class="ba-testimonials-vertical">
                <?php the_field('testimonials_vertical_text'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="ba-charger" id="charger">
        <div class="row column">
            <div class="ba-charger-section">
                <div class="ba-charger-image">
                    <?php
                    $image = get_field('charger_image');
                    $size = 'section-image';
                    ?>
                    <?php if($image) :?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
                </div>
                <div class="ba-charger-text">
                    <h2 class="ba-charger-text__title"><?php the_field('charger_title'); ?></h2>
                    <p class="ba-charger-text__desc"><?php the_field('charger_description'); ?></p>

                    <?php $button = get_field('charger_button'); ?>
                    <?php if($button) : ?>
                        <div class="ba-charger-text__button">
                            <a href="<?php echo $button['button_url'] ?>"><?php echo $button['button_text'] ?></a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (get_field('services_symbol')) : ?>
                    <div class="ba-charger-symbol">
                        <?php the_field('charger_symbol'); ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('charger_vertical_text')) : ?>
                    <div class="ba-charger-vertical">
                        <?php the_field('charger_vertical_text'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- .row .column -->
    </div>
</main>

<footer class="ba-footer">
    <div class="row column">
        <div class="flex-container">
            <div>
                <a class="any-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                    <?php if(has_custom_logo()) : ?>
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img src="<?php echo $image[0] ?>" alt="<?php bloginfo( 'name' ); ?>" />

                    <?php else : ?>
                        <span class="fonts">
                            <?php bloginfo( 'name' ); ?>
                        </span>
                    <?php endif ?>
                    <span class="ba-header_logo_text">
                        <div class="ba-header-bar__title">
                            <?php the_field('header_logo_title'); ?>
                        </div>
                        <div class="ba-header-bar__desc">
                            <?php the_field('header_logo_description'); ?>
                        </div>
                    </span>
                </a>
                <div class="ba-footer-copyright">
                    <p><?php the_field('footer_copyright', 'option'); ?></p>
                </div>
            </div>
            <div>
                <nav>
                    <?php foundationpress_top_bar_r(); ?>
                    <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" type="button" data-toggle="off-canvas-menu"></button>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>
