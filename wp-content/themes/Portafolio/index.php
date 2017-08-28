<?php get_header(); ?>
<h1><?php get_sidebar();?></h1>
<!-- Funciones usadas en proyecto
<div class="row">
    <ul>
        <li><b>Descripcion: </b><?php bloginfo(descripcion)?></li>
        <li><?php bloginfo(url)?></li>
        <li><?php bloginfo(language)?></li>
        <li><?php bloginfo(stylesheet_url)?></li>
        <li><?php bloginfo(stylesheet_directory)?></li>
    </ul>
</div>
-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php bloginfo(name)?></h1>
            </div>
            <div class="col-md-12">
                Ultimos trabajos
            </div>
                <?php
                    $args = array('author' => 'Rafael');
                    $categoryPost = new WP_Query($args);
                    if($categoryPost->have_posts()) :
                        while ($categoryPost->have_posts()) :
                            $categoryPost->the_post();
                ?>
                    <div class="col-md-4">
                        <h2><?php the_title();?></h2>
                        <?php 
                            if(has_post_thumbnail()){
                                ?>
                                <img src="<?php the_post_thumbnail_url('full');?>" alt="">
                            <?php
                            /*the_post_thumbnail('medium');
                            the_post_thumbnail('large');
                            the_post_thumbnail('full');*/
                            }
                        ?>
                        <p><?php the_excerpt(); ?></p>
                        <p><?php the_tags(); ?></p>
                        <p><?php the_author(); ?></p>
                        <p><?php the_author_posts_link(); ?></p>
                        <a href="<?php the_permalink(); ?>">Leer mas</a>
                    </div>
                <?php
                        endwhile;
                    else :
                ?>
                <p>No hay posts</p>
                <?php 
                    endif;
                    /*Esta funcion se coloca cuando en un mismo archivo se tienen varios query,
                    y de esta manera el limpia variables, condicionales, que se puedan tener y 
                    asi afectar al resto de los query*/
                    wp_reset_postdata();
                ?>
                <?php/*
                    if(have_posts()){
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="col-md-4">
                                <h2><?php the_title();?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php the_tags(); ?></p>
                                <p><?php the_author(); ?></p>
                            </div>
                            <?php
                        }
                    }
                */?>
        </div>
    </div>
    <?php get_footer(); ?>