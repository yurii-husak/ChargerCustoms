
<header class="ba-header" style="/*background: url(<?php the_sub_field('image'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;*/">
	<div class="ba-header-bar">
		<div class="ba-navigation">
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

            <nav>
                <?php foundationpress_top_bar_r(); ?>
                <button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon hide-for-medium" type="button" data-toggle="off-canvas-menu"></button>
            </nav>
            <div class="class"></div>
        </div>
	</div>

    <?php if( have_rows('header_slider') ): ?>
        <div class="ba-header-slide">
            <?php while ( have_rows('header_slider') ) : the_row(); ?>
                    <div class="ba-slide">
                        <div class="ba-header-slide-image" style="background: url(<?php the_sub_field('image'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="ba-header-section">
                                <div class="ba-header-section_text">
                                    <h1 class="ba-header-section__title"><?php the_sub_field('slide_title'); ?></h1>
                                    <p class="ba-header-section__desc"><?php the_sub_field('slide_desc'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>


    <div class="ba-header-options">
        <?php if (have_rows('socials', 'option')) : ?>
            <div class="ba-header-socials">
                <ul>
                    <?php while (have_rows('socials', 'option')) : the_row(); ?>
                        <li><a href="<?php the_sub_field('url') ?>" target="_blank"><?php the_sub_field('text') ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="ba-section-scroll">
            <a href="<?php the_field('scroll_down_url'); ?>"><?php the_field('scroll_down_text'); ?></a>
        </div>
    </div>
</header>