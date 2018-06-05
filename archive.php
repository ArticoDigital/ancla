<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ancla
 */

get_header(); ?>

	<div class="container">

        <div class="row">

            <div class="col-xs-12 row">

                <?php
                if ( have_posts() ) : ?>

                    <div class="page-header">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </div><!-- .page-header -->

                    <div class="col-xs-12 row blog-posts">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;
                    ?>
                    </div>
                    <?php
                    
                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </div>
        </div>
    </div>

<?php
get_footer();
