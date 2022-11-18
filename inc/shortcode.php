<?php 
/**
 * Shortcode
 */

function eh_block_grid_func( $atts ) {
	$a = shortcode_atts([
    'class' => '',
  ], $atts);

  $block_data = get_field('block_list', 'option');
  if(empty($block_data) || count($block_data) == 0) return;

  $_html = [];
  array_push($_html, '<div class="block-grid">');
  array_push($_html, '<div class="block-grid__list">');
  foreach($block_data as $index => $item) { 
    $image_url = $item['image'] ? $item['image']['url'] : '#';
    array_push($_html, '<div class="block-grid__item">');
    array_push($_html, '<a href="'. $item['link'] .'" target="_blank"><img class="block-grid__item-image" src="'. $image_url .'" alt="'. $item['title'] .'"></a>');
    array_push($_html, '<div class="block-grid__item-entry">');
    array_push($_html, '<h4><a href="'. $item['link'] .'" target="_blank">'. $item['title'] .'</a></h4>');
    array_push($_html, '<div class="block-grid__item-price">');
    array_push($_html, eh_price_html($item['price'], $item['sale_price']));
    array_push($_html, '</div>');
    array_push($_html, '</div>');
    array_push($_html, '</div>');
  }
  array_push($_html, '</div>');
  array_push($_html, '</div>');

  return implode('', $_html);
}
add_shortcode('block_grid', 'eh_block_grid_func');