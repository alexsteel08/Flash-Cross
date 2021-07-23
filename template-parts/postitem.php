<div class="post-pading">
    <div class="blog_item">
        <div class="blog_item_content">
            <div class="blog_item_image">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
            </div>
            <div class="blog_item_meta">
                <div class="blog_item_title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
                <div class="blog_item_excerpt"><?php the_excerpt();?></div>
                <div class="blog_post_link order_button"><a href="<?php the_permalink(); ?>">Read more</a></div>
            </div>
        </div>

    </div>
</div>