<section class="what_game">
    <div class="what_game_block content_width">
        <div class="what_game_content">
            <div class="what_game_info">
                <?php if( get_sub_field('what_game_text') || get_sub_field('what_game_title') ): ?>
                    <div class="what_game_text">
                        <div class="what_game_title title">
                            <?php the_sub_field('what_game_title'); ?>
                        </div>
                        <?php the_sub_field('what_game_text'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('what_game_image') ): ?>
                    <div class="what_game_image">
                        <img src="<?php the_sub_field('what_game_image'); ?>" alt="location_logo">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>