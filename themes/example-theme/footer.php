<?php
$nav_items = wp_get_nav_menu_items('footer');
$text = get_field('text','option');
?>

    <footer id="footer" role="contentinfo" class="bg-footer w-full">
      <div class="mx-auto w-full flex lg:flex-row flex-col items-center lg:justify-start justify-center font-primary text-copyright h-full md:w-containerTablet lg:w-containerDesktop xl:w-containerDesktopUp text-primary gap-4">
        <a href="/">
          <img class="mr-0 lg:mr-6 h-logo w-logo relative" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/images/logo-black.svg" alt="" loading="lazy" />
          <span class="sr-only">Return to home</span>
        </a>

        <p class="my-4 lg:my-0 mr-2">&copy; <?= esc_html(gmdate('Y')); ?> <?php if(!empty($text)): ?> <?= esc_html($text) ?> <?php endif; ?> </p>

        <?php if (!empty($nav_items)): ?>
          <nav>
            <ul class="flex flex-row gap-2 mb-8 lg:mb-0">
            <?php foreach($nav_items as $nav_link): ?>
              <li>
                <a class="my-4 underline lg:my-0" href="<?= esc_url($nav_link->url); ?>" <?php if (!empty($nav_link->target)): ?>target="<?= esc_attr($nav_link->target); ?>"<?php endif; ?>>
                  <?= esc_html($nav_link->title); ?>
                </a>
              </li>
            <?php endforeach; ?>
            </ul>
          </nav>
        <?php endif; ?>
      </div>
    </footer>
  <?php wp_footer(); ?>
  </body>
</html>