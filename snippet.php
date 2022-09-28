if (!function_exists( 'evolution_manage_woocommerce_styles' ) ) :
/**
* Optimize WooCommerce Scripts
* Removes WooCommerce styles and scripts from non WooCommerce pages.
*/  
function evolution_manage_woocommerce_styles() {

    //first check that woo exists to prevent fatal errors
    if ( function_exists( 'is_woocommerce' ) ) {

        //dequeue scripts and styles
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() && ! is_account_page() ) {          
            wp_dequeue_style( 'woocommerce-layout' );
            wp_dequeue_style( 'woocommerce-smallscreen' );
            wp_dequeue_style( 'woocommerce-general' );
            wp_dequeue_style( 'evolution-woostyles' );
            wp_dequeue_script( 'wc_price_slider' );
            wp_dequeue_script( 'wc-single-product' );
            wp_dequeue_script( 'wc-add-to-cart' );
            wp_dequeue_script( 'wc-cart-fragments' );
            wp_dequeue_script( 'wc-checkout' );
            wp_dequeue_script( 'wc-add-to-cart-variation' );
            wp_dequeue_script( 'wc-single-product' );
            wp_dequeue_script( 'wc-cart' );
            wp_dequeue_script( 'wc-chosen' );
            wp_dequeue_script( 'woocommerce' );
            wp_dequeue_script( 'prettyPhoto' );
            wp_dequeue_script( 'prettyPhoto-init' );
            wp_dequeue_script( 'jquery-blockui' );
            wp_dequeue_script( 'jquery-placeholder' );
            wp_dequeue_script( 'fancybox' );
            wp_dequeue_script( 'jqueryui' );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'evolution_manage_woocommerce_styles', 99 );
endif;
