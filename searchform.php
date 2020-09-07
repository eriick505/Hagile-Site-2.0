<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">

    <div class="input-group">
        <input type="search" class="form-control" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" />
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <?php 
        global $post;
        $post_slug = $post->post_name;

        switch($post_slug) {
            case 'clientes':
                echo '<input type="hidden" name="post_type" value="cliente" />';
            break;

            case 'portfolios':
                echo '<input type="hidden" name="post_type" value="portfolio" />';
            break;

            default:
                echo '<input type="hidden" name="post_type" value="post" />';
                // echo '<input type="hidden" name="post_type" value="'.$post_slug.'" />';
            break;
        }
    ?>
</form>



 