<!-- social icons phone -->
<div class="socialIcon__list d-flex d-md-none pt-3">
    <ul>
        <li>
            <a class="icon-footer" href="https://www.facebook.com/HagileAgenciaDigital" target="_blank" aria-label="facebook da hagile" rel="noopener">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li>
            <a class="icon-footer" href="https://www.instagram.com/hagiledigital/" target="_blank" aria-label="instagram da hagile" rel="noopener">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li>
            <a class="icon-footer" href="https://br.linkedin.com/company/hagile-ag-ncia-digital" target="_blank" aria-label="linkedIn da hagile" rel="noopener">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </li>
    </ul>
</div>

<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
        <?php 
            if(is_home()) {
                echo '<h1 class="logo--black text-hide m-0">Hagile Agência Digital</h1>';
            } else {
                echo '<h1 class="logo--white text-hide m-0">Hagile Agência Digital</h1>';
            }
        ?>
    </a>

    <button class="navbar-toggler animated-button border-0" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation" id="main-button">
        <div class="animated-icon" id="main-animated"><span></span><span></span><span></span><span></span></div>
    </button>
    
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'mainMenu',
            'menu_class'        => 'navbar-nav ml-auto align-items-end mr-lg-4',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
    <div class="socialIcon__list d-none d-md-flex">
        <ul>
            <li>
                <a class="icon-footer" href="https://www.facebook.com/HagileAgenciaDigital" target="_blank" aria-label="facebook da hagile" rel="noopener">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a class="icon-footer" href="https://www.instagram.com/hagiledigital/" target="_blank" aria-label="instagram da hagile" rel="noopener">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a class="icon-footer" href="https://br.linkedin.com/company/hagile-ag-ncia-digital" target="_blank" aria-label="linkedIn da hagile" rel="noopener">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>