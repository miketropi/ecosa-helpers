<?php 
/**
 * Helpers
 */
function eh_price_html($price, $sale_price = '') {
  ob_start();
  if($sale_price) {
    return sprintf('
      <ins><bdi>%s</bdi></ins>
      <del><bdi>%s</bdi></del>
      ', $sale_price, $price);
  } else {
    return sprintf('<ins><bdi>%s</bdi></ins>', $price);
  }
}