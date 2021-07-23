<section class="about_game">
    <div class="about_game_block">
        <div class="about_game_content">
            <?php if( get_sub_field('about_game_title') ): ?>
                <div class="about_game_title">
                    <?php the_sub_field('about_game_title'); ?>
                </div>
            <?php endif; ?>
            <div class="about_game_text">
                <?php if( get_sub_field('about_game_logo') ): ?>
                    <div class="about_game_img">
                        <img src="<?php the_sub_field('about_game_logo'); ?>" alt="logo">
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('about_game_text') ): ?>
                    <div class="about_game_decr">
                        <?php the_sub_field('about_game_text'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>