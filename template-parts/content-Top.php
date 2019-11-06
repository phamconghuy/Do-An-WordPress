<!-- Products section -->
<section id="aa-product">
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="row">
        <div class="aa-product-area">
            <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#dm1" data-toggle="tab">DANH MỤC 1</a></li>
                    <li><a href="#dm2" data-toggle="tab">DANH MỤC 2</a></li>
                    <li><a href="#dm3" data-toggle="tab">DANH MỤC 3</a></li>
                    <li><a href="#dm4" data-toggle="tab">DANH MỤC 4</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- DANH MỤC SẢN PHẨM THỨ NHẤT-->
                    <div class="tab-pane fade in active" id="dm1">
                        <ul class="aa-product-catg">
                            <?php
                            $vnkings = new WP_Query(array(
                                'post_type'      => 'product',
                                'post_status'    => 'publish',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'id',
                                        'terms'    => '22'
                                    )
                                ),
                                'orderby'        => 'ID',
                                'order'          => 'ASC',
                                'posts_per_page' => '8'));
                            ?>
                            <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                                <li>
                                    <figure>
                                        <a href="#"><?php the_post_thumbnail(); ?></a>
                                        <a class="aa-add-card-btn" href="#"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                        href="#"> <?php the_title(); ?></a></h4>
                                            <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                            <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                           title="Quick View" data-toggle="modal"
                                           data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                    </div>
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                            <?php endwhile; wp_reset_query(); ?>

                        </ul>
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ NHẤT-->

                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 2-->
                    <div class="tab-pane fade" id="dm2">
                     <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        <ul class="aa-product-catg">
                            <!-- start single product item -->

                            <!--Bắt đầu một sản phẩm-->
                            <?php
                            $vnkings = new WP_Query(array(
                                'post_type'      => 'product',
                                'post_status'    => 'publish',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'id',
                                        'terms'    => '21'
                                    )
                                ),
                                'orderby'        => 'ID',
                                'order'          => 'ASC',
                                'posts_per_page' => '8'));
                            ?>
                            <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>


                                <li>
                                    <figure>
                                        <a href="#"><?php the_post_thumbnail(); ?></a>
                                        <a class="aa-add-card-btn" href="#"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                        href="#"> <?php the_title(); ?></a></h4>
                                            <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                            <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                           title="Quick View" data-toggle="modal"
                                           data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- Sản phẩm --><?php endwhile;
                            wp_reset_query(); ?>

                            <!-- start single product item -->

                        </ul>
                    </div>
                     <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 2-->

                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 3-->
                    <div class="tab-pane fade" id="dm3">
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        <ul class="aa-product-catg">
                            <!-- start single product item -->

                            <!--Bắt đầu một sản phẩm-->
                            <?php
                            $vnkings = new WP_Query(array(
                                'post_type'      => 'product',
                                'post_status'    => 'publish',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'id',
                                        'terms'    => '22'
                                    )
                                ),
                                'orderby'        => 'ID',
                                'order'          => 'ASC',
                                'posts_per_page' => '8'));
                            ?>
                            <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>


                                <li>
                                    <figure>
                                        <a href="#"><?php the_post_thumbnail(); ?></a>
                                        <a class="aa-add-card-btn" href="#"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                        href="#"> <?php the_title(); ?></a></h4>
                                            <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                            <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                           title="Quick View" data-toggle="modal"
                                           data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">khuyến mãi!</span>
                                </li>
                                <!-- Sản phẩm --><?php endwhile;
                            wp_reset_query(); ?>

                            <!-- start single product item -->

                        </ul>
                    </div>
                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 3-->

                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 4-->
                    <div class="tab-pane fade" id="dm4">
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        <ul class="aa-product-catg">
                            <!-- start single product item -->

                            <!--Bắt đầu một sản phẩm-->
                            <?php
                            $vnkings = new WP_Query(array(
                                'post_type'      => 'product',
                                'post_status'    => 'publish',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'id',
                                        'terms'    => '21'
                                    )
                                ),
                                'orderby'        => 'ID',
                                'order'          => 'ASC',
                                'posts_per_page' => '8'));
                            ?>
                            <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>


                                <li>
                                    <figure>
                                        <a href="#"><?php the_post_thumbnail(); ?></a>
                                        <a class="aa-add-card-btn" href="#"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a
                                                        href="#"> <?php the_title(); ?></a></h4>
                                            <span class="aa-product-price">$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
                                            <span class="aa-product-price"><del>$<?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?></del></span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                           title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                           title="Quick View" data-toggle="modal"
                                           data-target="#quick-view-modal"><span
                                                    class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- Sản phẩm --><?php endwhile;
                            wp_reset_query(); ?>

                            <!-- start single product item -->

                        </ul>
                    </div>
                    <!--ĐÓNG DANH MỤC SẢN PHẨM THỨ 4-->

                </div>
                <!-- quick view modal -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- / Products section -->