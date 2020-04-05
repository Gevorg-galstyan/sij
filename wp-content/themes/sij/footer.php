<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sij
 * @since 1.0.0
 */

?>
<footer id="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'template-parts/footer-add' ); ?>
                <p>Подвал</p>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>