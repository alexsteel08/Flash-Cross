<section class="location" <?php if( get_sub_field('location_bg') ): ?> style="background-image: url(<?php the_sub_field('location_bg'); ?>)"<?php endif; ?>>
    <?php if( get_sub_field('location_logo') ): ?>
        <div class="location_logo">
            <div class="location_logo_center">
                <img src="<?php the_sub_field('location_logo'); ?>" alt="location_logo">
            </div>
        </div>
    <?php endif; ?>
    <div class="location_block">
        <div class="location_content content_width">
            <div class="location_left">
                <?php if( get_sub_field('when_game') ): ?>
                    <div class="when_game">
                        <div class="location_label">Коли?</div>
                        <div class="location_point title"><?php the_sub_field('when_game'); ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="location_right">
                <?php if( get_sub_field('game_location') ): ?>
                    <div class="game_location">
                        <div class="location_label">Де?</div>
                        <div class="location_point title"><?php the_sub_field('game_location'); ?></div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if( get_sub_field('location_button_link') && get_sub_field('location_button_text') ): ?>
            <div class="location_bottom">
                <div class="location_btn orange_btn_bg">
                    <noindex>
                        <a href="<?php the_sub_field('location_button_link'); ?>" rel="nofollow"><?php the_sub_field('location_button_text'); ?></a>
                    </noindex>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>