<div class="col-lg-3 col-md-4">
    <div class="sidebar">
        <header>
            <h3><i class="fas fa-sort"></i> Pesquisar postagens:</h3>

            <div class="search mt-3">
                <?php get_search_form(); ?>
            </div>
        </header>

        <!-- last-news -->
        <div class="sidebar__lastPosts">
            <?php
                // ADICIONA WIDGET DINAMICO
                dynamic_sidebar('Ultimos Posts');
            ?>
        </div>
    </div>
</div>