<?php
/**
 * Common functions
 * 
 * Actions and hooks and common functions
 *
 * @package _s
 */

 
if ( ! function_exists( '_s_add_bulk_add_to_cart' ) ) :
	/**
	 * Add top bar
	 */
    
    function _s_add_bulk_add_to_cart() {
        function _s_add_bulk_add_to_cart_begin() {
            if ( is_home() || is_front_page() ) {
                return false;
            }

            echo do_shortcode( '[bulk_add_to_cart_xforwc]' );
        }
        add_action( '_s_begin_sidebar', '_s_add_bulk_add_to_cart_begin', 10 );
    }
    _s_add_bulk_add_to_cart();

endif;

if ( ! function_exists( '_s_add_top_bar' ) ) :
	/**
	 * Add top bar
	 */
    
    function _s_add_top_bar() {
        function _s_add_top_bar_begin() {
            if ( is_home() || is_front_page() ) {
                return false;
            }

            get_template_part( 'template-parts/top-bar' );
        }
        add_action( '_s_end_header', '_s_add_top_bar_begin', 10 );
    }
    _s_add_top_bar();

endif;

if ( ! function_exists( '_s_move_woocommerce_breadcrumbs' ) ) :
	/**
	 * Move breadcrumbs
	 */
    
    function _s_move_woocommerce_breadcrumbs() {

        function _s_move_woocommerce_breadcrumbs_begin() {
?>
            <div class="breadcrumbs">&nbsp;
<?php
                if ( function_exists( 'woocommerce_breadcrumb' ) ) {
                    woocommerce_breadcrumb();
                }
        }
        //add_action( '_s_end_header', '_s_move_woocommerce_breadcrumbs_begin', 20 );

        function _s_move_woocommerce_breadcrumbs_end() {
?>
            </div>
<?php
        }
        //add_action( '_s_end_header', '_s_move_woocommerce_breadcrumbs_end', 30 );

        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    }
    _s_move_woocommerce_breadcrumbs();

endif;

if ( ! function_exists( '_s_register_footer_sidebars' ) ) :
	/**
	 * Register sidebars
	 */
    
    function _s_register_footer_sidebars() {

        function _s_register_footer_sidebars_init() {
            register_sidebar( array(
                'name'          => __( 'Footer 1', 'textdomain' ),
                'id'            => 'footer-1',
                'description'   => __( 'Widgets in this area will be shown in footer.', '_s' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );
            
            register_sidebar( array(
                'name'          => __( 'Footer 2', 'textdomain' ),
                'id'            => 'footer-2',
                'description'   => __( 'Widgets in this area will be shown in footer.', '_s' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );

            register_sidebar( array(
                'name'          => __( 'Footer 3', 'textdomain' ),
                'id'            => 'footer-3',
                'description'   => __( 'Widgets in this area will be shown in footer.', '_s' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );

            register_sidebar( array(
                'name'          => __( 'Footer 4', 'textdomain' ),
                'id'            => 'footer-4',
                'description'   => __( 'Widgets in this area will be shown in footer.', '_s' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );
        }
        add_action( 'widgets_init', '_s_register_footer_sidebars_init' );

    }
    _s_register_footer_sidebars();

endif;

if ( ! function_exists( '_s_move_add_results_orderby' ) ) :
	/**
	 * Add wrapper around sowing results and order by
	 */
    
    function _s_move_add_results_orderby() {
        function _s_move_add_results_orderby_begin() {
?>
            <div class="shop-nav">
<?php
                do_action( 'prdctfltr_output' );
        }
        add_action( 'woocommerce_before_shop_loop', '_s_move_add_results_orderby_begin', 15 );

        function _s_move_add_results_orderby_end() {
?>
            </div>
<?php
        }
        add_action( 'woocommerce_before_shop_loop', '_s_move_add_results_orderby_end', 35 );
    }
    _s_move_add_results_orderby();

endif;


if ( ! function_exists( '_s_add_product_info_wrapper' ) ) :
	/**
	 * Add products heading and add to cart wrapper
	 */
    
    function _s_add_product_info_wrapper() {
        function _s_add_product_info_wrapper_begin() {
?>
            <div class="product-info">
<?php
        }
        add_action( 'woocommerce_shop_loop_item_title', '_s_add_product_info_wrapper_begin', 0 );

        function _s_add_product_info_wrapper_end() {
?>
            </div>
<?php
        }
        add_action( 'woocommerce_after_shop_loop_item', '_s_add_product_info_wrapper_end', 999999999999 );
    }
    _s_add_product_info_wrapper();

endif;

if ( ! function_exists( '_s_no_sidebar' ) ) :
	/**
	 * Add no sidebar
	 */
    
    function _s_no_sidebar() {
        function _s_no_sidebar_deactivate( $is_active_sidebar, $index ) {
            if ( $index === 'sidebar-1' ) {
                return false;
            }

            return $is_active_sidebar;
        }

        function _s_no_sidebar_begin() {
            add_filter( 'is_active_sidebar', '_s_no_sidebar_deactivate', 10, 2 );
        }
        add_action( '_s_before_no_sidebar', '_s_no_sidebar_begin', 0 );
    }
    _s_no_sidebar();

endif;
