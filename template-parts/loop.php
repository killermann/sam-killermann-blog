<?php
/**
 * Template part for displaying the standard loop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samkillermannblog
 */

if ( ! is_single() ) : echo '<div class="loop-content chameleon-border">'; endif;

if ( in_category('patrons-only') ) :
echo '<a class="sign-post for-patrons-only" href="' . home_url() . '/sign-up" title="Content for Patrons Only">
	<div class="sign-title">Patrons Only</div>
	<div class="sign-description">No General Admittance</div>
</a>';
endif;

get_template_part( 'template-parts/content', get_post_format() );

if ( ! is_single() ) : echo '</div><!--loop-content-->'; endif;
