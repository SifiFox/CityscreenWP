<section class="screens">
    <div class="screens-header">
        <h3 class="screens-title">CityScreen</h3>
        <h2 class="screens-subtitle">Наши экраны</h2>
    </div>
    <div class="screens-map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1URHIPFKG6XMdcfacKH1lKLE8-gsgpvg&ehbc=2E312F"
                class="map"></iframe>
    </div>
    <div class="screens-cards">
        <?php
        global $post;
        $query = new WP_Query([
            'posts_per_page' => 5,
            'post_type' => 'our-screens'
        ]);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="screens-card">
                    <a href="<?php echo get_the_permalink(); ?>" class="screens-card__link">
                        <div class="screens-card__img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                echo '<img src="http://localhost/cityscreen/wp-content/uploads/2024/05/image_not_found.jpg"/>';
                            } ?>
                        </div>
                        <strong class="screens-card__title"><?php the_title() ?></strong>
                        <p class="screens-card__subtitle"><?php the_excerpt();?></p>
                    </a>
                </div>
                <?php
            }
        } else {
            echo 'экранов не найдено';
        }
        wp_reset_postdata();
        ?>
    </div>
</section>