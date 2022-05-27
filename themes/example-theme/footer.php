<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package First_And_Third
 */

?>


	</div> <?php // end .site-content ?>

</main> <?php // end .site-main ?>

<footer class="site-footer">
	<?php get_template_part('template-parts/navigation/navigation', 'footer'); ?>

	<div class="copyright">
		<p>&copy; <?php echo date('Y'); ?> Workflow, Inc. All rights reserved.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>