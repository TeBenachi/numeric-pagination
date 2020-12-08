/**
 * Numeric Pagination
 */
function yoneko_pagainate(){
    global $wp_query;
    echo paginate_links(array(
        'current'			 =>max(1,get_query_var('paged')),
        'total'				 =>$wp_query->max_num_pages,
		'type'				 =>'list',
		'show_all'           => true,
        'prev_next'          => true,
        'prev_text'          => __( '&laquo; Previous' ),
        'next_text'          => __( 'Next &raquo;' ),
        'end_size'           => 1,
		'mid_size'           => 2,
		'add_args'           => array(), // Array of query args to add.
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => '',
    ));
}
 
 
 
