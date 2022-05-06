<?php
$header_items = wp_get_nav_menu_items('header');
$current_url = home_url($wp->request);

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <?php wp_site_icon(); ?>
</head>

<body>

  <?php wp_body_open(); ?>

  <header id="header" role="banner" class="w-full bg-primary h-full">

    <?php if (!empty($header_items)) : ?>
      <nav>
        <ul class="flex flex-row gap-2 lg:mb-0 text-gray-300 bg-gray-800">
          <?php foreach ($header_items as $nav_link) : ?>
            <li>
              <a class="hover:underline" href="<?= esc_url($nav_link->url); ?>" <?php if (!empty($nav_link->target)) : ?>target="<?= esc_attr($nav_link->target); ?>" <?php endif; ?>>
                <?= esc_html($nav_link->title); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    <?php endif; ?>
  </header>