<section class="registration" <?php if( get_sub_field('registration_bg') ): ?> style="background-image: url(<?php the_sub_field('registration_bg'); ?>)"<?php endif; ?>>
    <div class="registration_block">
        <div class="registration_content">
            <?php if( get_sub_field('registration_title') ): ?>
                <div class="registration_title title">
                    <?php the_sub_field('registration_title'); ?>
                </div>
            <?php endif; ?>
            <?php if( get_sub_field('registration_text') ): ?>
                <div class="registration_text text">
                    <?php the_sub_field('registration_text'); ?>
                </div>
            <?php endif; ?>
            <?php if( get_sub_field('registration_button_link') && get_sub_field('registration_button_text') ): ?>
                <div class="registration_button_link orange_btn_bg">
                    <noindex>
                        <a href="<?php the_sub_field('registration_button_link'); ?>" rel="nofollow"><?php the_sub_field('registration_button_text'); ?>
                        </a>
                    </noindex>
                </div>
            <?php endif; ?>
            <?php if( get_sub_field('bottom_text') ): ?>
                <div class="bottom_text">
                    <?php the_sub_field('bottom_text'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>