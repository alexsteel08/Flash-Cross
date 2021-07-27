<section id="teams" class="teams">
    <div class="teams_block">
        <div class="teams_content content_width">
            <?php if( get_sub_field('teams_title') ): ?>
                <div class="teams_title title">
                    <?php the_sub_field('teams_title'); ?>
                </div>
            <?php endif; ?>


            <table>

                <?php
                $featured_posts = get_sub_field('members_items');

                $i = 1;
                if( $featured_posts ): ?>
                    <tr>
                        <th>Рег.№</th>
                        <th>Назва команди</th>
                        <th>Гравець 1</th>
                        <th>Гравець 2</th>
                        <th>Клас</th>
                    </tr>

                        <?php foreach( $featured_posts as $post ):
                            setup_postdata($post);  ?>

                            <tr>
                                <td>
                                    <?php
                                    echo $i++;
                                    ?>

                                </td>
                                <td><?php the_title(); ?></td>
                                <td><?php the_field( 'nickname_1' ); ?></td>
                                <td><?php the_field( 'nickname_2' ); ?></td>
                                <td><?php the_field( 'gender_1' ); ?><?php the_field( 'gender_2' ); ?></td>
                            </tr>
                        <?php endforeach; ?>

                    <?php

                    wp_reset_postdata(); ?>
                <?php endif; ?>


            </table>

        </div>
    </div>
</section>