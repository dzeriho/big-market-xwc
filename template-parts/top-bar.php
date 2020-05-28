<?php
/**
 * Template part Top Bar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<div id="topbar">
    <div class="left">
        <?php woocommerce_breadcrumb(); ?>
    </div><!-- .left -->
    <div class="right">
        <p><?php esc_html_e( 'Need help? Call now! +1 800 999 999', '_s' ); ?></p>
    </div><!-- .right -->
</div><!-- #top-bar -->