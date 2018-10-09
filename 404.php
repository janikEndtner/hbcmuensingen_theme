<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Milestonez Pro
 */

get_header(); ?>

<div class="container content-area">
    <div class="middle-align">
        <div class="error-404 not-found sitefull">
            <header class="page-header">
                <h1 class="title-404"><?php _e( '<strong>404</strong> Uuups.', 'milestonez-pro' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php _e( 'Auch wir verfehlen das Tor manchmal... <br />Diese Seite exitiert leider nicht.', 'milestonez-pro' ); ?></p>
                
            </div><!-- .page-content -->
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>