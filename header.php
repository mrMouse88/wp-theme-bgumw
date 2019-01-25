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
                                <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse"><ul id="menu-topmenu" class="nav navbar-nav w-100">
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48 nav-item"><a title="UMW" href="http://umed.wroc.pl" class="nav-link" target="_blank"><img src="<?php echo get_template_directory_uri() . '/gfx/umed.png' ?>" /></a></li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-53 nav-item"><a title="BIP" href="https://bip.umed.wroc.pl/" class="nav-link" target="_blank"><img src="<?php echo get_template_directory_uri() . '/gfx/bip.png' ?>" /></a></li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-49" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49 nav-item"><a title="ENG" href="http://bg.umed.wroc.pl/eng" class="nav-link" target="_blank"><img src="<?php echo get_template_directory_uri() . '/gfx/eng.png' ?>" /></a></li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-54 nav-item"><a title="FB" href="https://www.facebook.com/BibliotekaUMW/" class="nav-link" target="_blank"><img src="<?php echo get_template_directory_uri() . '/gfx/fb.png' ?>" /></a></li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55 nav-item"><a title="Insta" href="https://www.instagram.com/biblioteka_umw/" class="nav-link" target="_blank"><img src="<?php echo get_template_directory_uri() . '/gfx/insta.png' ?>" /></a></li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item" style="line-height: 2.4em"><a title="Kontakt" href="http://156.17.100.83/bgumw/index.php/kontakt/" class="nav-link">Kontakt</a></li>
                                    </ul>
                                </div>
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