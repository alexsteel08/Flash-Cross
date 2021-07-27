<?php
/*
Template Name: Registration completed
 */


get_header(); ?>

<?php get_template_part( 'template-parts/blogbaner' ); ?>
<?php get_template_part( 'template-parts/content' );?>


    <div class="add_members_form" <?php if( get_field('registration_form', 'option') ): ?> style="background-image: url(<?php the_field('registration_form', 'option'); ?>)"<?php endif; ?>>
        <?php if( get_field('add_members_title', 'option') ): ?>
            <div class="add_members_title">
                <?php the_field('add_members_title', 'option'); ?>
            </div>
        <?php endif; ?>

        <div class="add_members_content">
            <?php if( get_field('reg_comp', 'option') ): ?>
                <div class="add_members_subtitle">
                    <?php the_field('reg_comp', 'option'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>




<?php

get_footer();