<section class="save_child">
    <div class="save_child_block">
        <div class="save_child_content content_width">
            <?php if( get_sub_field('title_logo') || get_sub_field('save_child_title')): ?>
                <div class="save_child_title title">
                    <img class="save_child_logo" src="<?php the_sub_field('title_logo'); ?>" alt="">
                    <?php the_sub_field('save_child_title'); ?>
                </div>
            <?php endif; ?>
            <div class="save_child_descr">
                <?php if( get_sub_field('save_child_text') ): ?>
                    <div class="save_child_text">
                        <?php the_sub_field('save_child_text'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('save_child_right_image') ): ?>
                    <div class="save_child_image">
                        <img src="<?php the_sub_field('save_child_right_image'); ?>" alt="img">
                    </div>
                <?php endif; ?>
            </div>
            <div class="save_child_bottom">
                <?php if( get_sub_field('bottom_title') ): ?>
                    <div class="bottom_title">
                        <?php the_sub_field('bottom_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('bottom_text') ): ?>
                    <div class="bottom_text text">
                        <?php the_sub_field('bottom_text'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>