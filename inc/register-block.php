<?php 
add_action('acf/init', 'eh_acf_blocks_init');

function eh_acf_blocks_init() {

  // Check function exists.
  if( function_exists('acf_register_block_type') ) {

    // Register a testimonial block.
    acf_register_block_type(array(
      'name' => 'block-product-grid',
      'title' => __('Block Product Grid'),
      'description' => __('...'),
      'render_callback' => 'eh_block_product_grid_callback',
      'category' => 'formatting',
      'mode' => 'edit',
    ));
  }
}