<?php
//---------------------------------------------------------------------------- 
//START PRODUCTS PER PAGE
//----------------------------------------------------------------------------
function woobizz_list_related_products_per_page( $args ) {
	$woobizz_related_totalproductsidebar= get_option(WOOBIZZLIST.'_woobizz_related_totalproductsidebar');
	$woobizz_related_totalproductnosidebar= get_option(WOOBIZZLIST.'_woobizz_related_totalproductnosidebar');
		if (is_active_sidebar('sidebar-1') ){	
			$wbl_related_show_number= $woobizz_related_totalproductsidebar;
		} else {
			$wbl_related_show_number= $woobizz_related_totalproductnosidebar;
		}
	
	$args['posts_per_page'] = $wbl_related_show_number; 
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'woobizz_list_related_products_per_page', 20 );
//---------------------------------------------------------------------------- 
//END PRODUCTS PER PAGE
//----------------------------------------------------------------------------