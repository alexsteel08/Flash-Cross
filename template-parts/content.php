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

        <?php if( get_row_layout() == 'save_child' ): ?>
            <?php get_template_part( 'template-parts/blocks/save_child' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'how_to_help' ): ?>
            <?php get_template_part( 'template-parts/blocks/how_to_help' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'what_game' ): ?>
            <?php get_template_part( 'template-parts/blocks/what_game' );?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

