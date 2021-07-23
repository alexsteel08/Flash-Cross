<section class="timeline">
    <div class="timeline_block content_width">
        <div class="timeline_content">
            <?php if( have_rows('timeline_items') ): ?>
                <div class="timeline_items">
                    <?php while( have_rows('timeline_items') ): the_row(); ?>
                        <div class="timeline_item">
                            <div class="timeline_item_content">
                                <div class="timeline_item_number"><span><?php the_sub_field('timeline_number'); ?></span></div>
                                <div class="timeline_item_title"><?php the_sub_field('timeline_title'); ?></div>
                                <div class="timeline_item_text"><?php the_sub_field('timeline_text'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <?php if( get_sub_field('timeline_button_link') && get_sub_field('timeline_button') ): ?>
                <div class="timeline_btn">
                    <div class="timeline_btn blue_btn">
                        <noindex>
                            <a href="<?php the_sub_field('timeline_button_link'); ?>" rel="nofollow"><?php the_sub_field('timeline_button'); ?>
                            </a>
                        </noindex>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>