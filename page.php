<?php $mts_options = get_option(MTS_THEME_NAME); ?>
<?php get_header(); ?>
<?php
    if(get_the_title() == "page-cart")
    {
        get_template_part('/template-parts/content','MyCart');
    }
?>
<?php get_footer(); ?>