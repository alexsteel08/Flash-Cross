<section class="baner_section" <?php if( get_sub_field('baner_bg') ): ?> style="background-image: url(<?php the_sub_field('baner_bg'); ?>)"<?php endif; ?>>
    <div class="baner_block content_width">
        <div class="baner_content">
            <?php if( get_sub_field('baner_title') ): ?>
                <div class="baner_title">
                    <?php the_sub_field('baner_title'); ?>
                </div>
            <?php endif; ?>
            <?php if( get_sub_field('baner_descr') ): ?>
                <div class="baner_descr">
                    <?php the_sub_field('baner_descr'); ?>
                </div>
            <?php endif; ?>
            <div class="baner_buttons">
                <?php if( get_sub_field('baner_button_link_1') && get_sub_field('baner_button_1') ): ?>
                    <div class="baner_btn_left blue_btn">
                        <noindex>
                            <a href="<?php the_sub_field('baner_button_link_1'); ?>" rel="nofollow"><?php the_sub_field('baner_button_1'); ?>
                            </a>
                        </noindex>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('baner_button_link_2') && get_sub_field('baner_button_2') ): ?>
                    <div class="baner_btn_right orange_btn">
                        <noindex>
                            <a href="<?php the_sub_field('baner_button_link_2'); ?>" rel="nofollow"><?php the_sub_field('baner_button_2'); ?>
                            </a>
                        </noindex>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>