<?php
/**
 * WeCodeArt Framework.
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package		WeCodeArt Framework
 * @subpackage  OffCanvas
 * @since		5.0.0
 * @version    	5.5.1
 */

defined( 'ABSPATH' ) || exit();

/**
 * @param   mixed  	$id			Toggle ID
 * @param   string	$title		Offcanvas Title
 * @param   string	$content	Offcanvas Content
 */

$classnames = [ 'offcanvas' ];

if( isset( $classes ) && is_array( $classes ) ) {
	$classnames = array_merge( $classnames, $classes );
}

?>
<div class="<?php echo esc_attr( join( ' ', $classnames ) ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<div class="offcanvas-header">
		<?php if( isset( $title ) ) : ?>
		<h5 class="offcanvas-title"><?php echo esc_html( $title ); ?></h5>
		<?php endif; ?>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body"><?php

		// Is Ok, we render Navigation Gutenberg blocks here
		echo $content;

	?></div>
</div>