<section class="how_to_help" <?php if( get_sub_field('how_to_help_bg') ): ?> style="background-image: url(<?php the_sub_field('how_to_help_bg'); ?>)"<?php endif; ?>>
    <div class="how_to_help_block">
        <div class="how_to_help_content">
            <?php if( get_sub_field('how_to_help_title') ): ?>
                <div class="how_to_help_title title">
                    <?php the_sub_field('how_to_help_title'); ?>
                </div>
            <?php endif; ?>
            <?php if( get_sub_field('how_to_help_text') ): ?>
                <div class="how_to_help_text text">
                    <?php the_sub_field('how_to_help_text'); ?>
                </div>
            <?php endif; ?>

            <div class="how_to_help_buttons baner_buttons">
                <?php if( get_sub_field('hth_button_link_left') && get_sub_field('hth_button_left') ): ?>
                    <div class="how_to_help_left blue_btn">
                        <noindex>
                            <a href="<?php the_sub_field('hth_button_link_left'); ?>" rel="nofollow"><?php the_sub_field('hth_button_left'); ?>
                            </a>
                        </noindex>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('hth_button_link_right') && get_sub_field('hth_button_right') ): ?>
                    <div class="how_to_help_right orange_btn">
                        <noindex>
                            <a href="<?php the_sub_field('hth_button_link_right'); ?>" rel="nofollow"><?php the_sub_field('hth_button_right'); ?>
                            </a>
                        </noindex>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>