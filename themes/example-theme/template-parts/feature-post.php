<?php
$args = wp_parse_args(
  $args,
  [
    'block_contents' => null,
    'block' => null
  ]
);

[
  'block_contents' => $block_contents,
  'block' => $block
] = $args;

?>
