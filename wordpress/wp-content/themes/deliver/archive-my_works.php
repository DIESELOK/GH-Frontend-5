<?php get_header(); ?>
<div id="header-wrapper">
    <?php get_template_part( 'content-top', get_post_format() ); ?>
</div>
<!-- Content -->
<div id="content-wrapper">
    <div id="content">
        <div class="container">
            <div class="row">
                <!-- тут будет вывод портфолио -->
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'content-bottom', get_post_format() );
get_footer(); ?>
