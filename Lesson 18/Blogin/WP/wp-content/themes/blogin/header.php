<!DOCTYPE HTML>
    <html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<header id="navbar" class="navbar">
    <div id="content-wrap" class="container">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav>
            <ul class="nav">
                <div class="iconMenu"><i class="fa fa-bars fa-2x"></i></div>
                <div class="itemsMenu">
                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );

                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </div>
            </ul>
        </nav>
    </div>
</header>

