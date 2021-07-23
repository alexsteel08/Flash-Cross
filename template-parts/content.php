<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>
        <?php if( get_row_layout() == 'baner' ): ?>
            <?php get_template_part( 'template-parts/blocks/baner' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'about_game' ): ?>
            <?php get_template_part( 'template-parts/blocks/about_game' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'location' ): ?>
            <?php get_template_part( 'template-parts/blocks/location' );?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

