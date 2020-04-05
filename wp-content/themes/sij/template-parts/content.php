<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sij
 * @since 1.0.0
 */

?>

<article <?php post_class();?> id="post-<?php the_ID();?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Основная часть</p>
            </div>
        </div>
    </div>

    <?php
	if (is_search() || !is_singular()) {
		the_excerpt();
	} else {
		the_content(__('Continue reading', 'sij'));
	}
	?>

</article><!-- .post -->