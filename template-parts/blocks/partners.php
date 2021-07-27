<section id="partners" class="partners">
    <div class="partners_block">
        <div class="partners_content">
            <?php if( get_sub_field('partners_title') ): ?>
                <div class="partners_title title">
                    <?php the_sub_field('partners_title'); ?>
                </div>
            <?php endif; ?>


            <?php if( have_rows('partners_list') ): ?>
                <div class="partners_items">
                    <?php while( have_rows('partners_list') ): the_row();
                        $image = get_sub_field('partners_image');
                        ?>
                        <div class="partners_item">
                            <div class="partner_content">
                                <div class="partner_logo">
                                    <img src="<?php echo $image; ?>" alt="">
                                </div>
                                <div class="partner_link">
                                    <a href="https://<?php the_sub_field('partners_link'); ?>"><?php the_sub_field('partners_link'); ?></a>
                                </div>
                                <div class="partner_descr"><?php the_sub_field('partners_text'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>