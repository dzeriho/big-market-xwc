(function($){
    "use strict";

    $('.more-link, .nav-previous a, .nav-next a, #secondary .bulk-add-to-cart-now').addClass('button');
    $('#secondary .bulk-add-to-cart-now').addClass('button-blue');
    $('#primary > .woocommerce-products-header').detach().insertBefore('.shop-nav .woocommerce-result-count');

    $('.single_add_to_cart_button.alt').removeClass('alt');
 
    $(document.body).on ( 'wc_fragments_loaded', function() {
        $('.woocommerce-mini-cart__buttons .wc-forward').addClass('button-blue');
    } );

    $(document).ready( function() {
        $('.woocommerce-mini-cart__buttons .wc-forward').addClass('button-blue');
    } );

})(jQuery);