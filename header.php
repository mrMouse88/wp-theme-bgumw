<!DOCTYPE html>
<html>

    <head>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <header>

            <div class="container">

                <div class="row">

                    <div class="col-7">

                        <div class="row bg-logo">

                            <img src="<?php echo get_template_directory_uri() . '/gfx/logo-bgumw-color.png' ?>">

                        </div>

                    </div>

                    <div class="col-5 p-0">

                        <div class="pl-0 pr-0 bg-topmenu">

                            <nav class="navbar navbar-expand-md navbar-light w-100 p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                wp_nav_menu(
                                        array(
                                            'theme_location' => 'top-menu',
                                            'depth' => 2,
                                            'container' => 'div',
                                            'container_class' => 'collapse navbar-collapse',
                                            'container_id' => 'bs-example-navbar-collapse-2',
                                            'menu_class' => 'nav navbar-nav w-100',
                                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker' => new WP_Bootstrap_Navwalker(),
                                        )
                                )
                                ?>

                            </nav>

                        </div>

                    </div>

                </div>



                <div class="row bg-mainmenu">

                    <nav class="navbar navbar-expand-md navbar-light bg-light-md w-100 bg-mainmenu" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
Menu
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav w-100',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>

                    </nav>

                </div>

            </div>

        </header>