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
    
    <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto align-items-end mr-lg-4">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo get_site_url(); ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Soluções
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="criacao-de-sites">Criação de sites</a>
                    <a class="dropdown-item" href="desenvolvimento-de-sistemas">desenvolvimento de sistemas</a>
                    <a class="dropdown-item" href="impulsione-suas-redes-sociais">Gestão de Redes Sociais</a>
                    <a class="dropdown-item" href="crie-sua-identidade-visual">Identidade Visual</a>
                    <a class="dropdown-item" href="lancamentos-digitais">Lançamentos Digitais</a>
                    <a class="dropdown-item" href="links-patrocinados">Links Patrocinados</a>
                    <a class="dropdown-item" href="fotos-e-videos">Fotos e Vídeos</a>
                    <a class="dropdown-item" href="otimizacao">Otimização</a>
                    <a class="dropdown-item" href="hospedagem">Hospedagem</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#estrategia">Estratégias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolios">Portfólio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clientes">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#contato">Contato</a>
            </li>
        </ul>
    </div>

    <div class="socialIcon__list">
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