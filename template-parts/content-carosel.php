
<!-- Start slider -->
<?php

?>
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <?php
                    $vnkings = new WP_Query(array(
                        'post_status'=>'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'posts_per_page'=> '4'));
                    ?>
                    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                    <li>
                        <div class="seq-model">
                            <img data-seq src="<?php the_post_thumbnail(); ?>" />
                        </div>
                        <div class="seq-title">
                            <span data-seq><?php the_title(); ?></span>
                            <h2 data-seq>Bộ sưu tập 1</h2>
                            <p data-seq>Không biết ghi cái gì hết.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>
                    <?php endwhile ; wp_reset_query() ;?>
                    <!-- single slide item -->

                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->