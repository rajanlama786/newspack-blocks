<?php
/**
 * Subscribe Pattern 3.
 *
 * @package Newspack_Blocks
 */

return array(
	'title'         => __( 'Subscribe Pattern 3', 'newspack-blocks' ),
	'content'       => "<!-- wp:group {\"className\":\"newspack-pattern subscribe__style-4\"} -->\n<div class=\"wp-block-group newspack-pattern subscribe__style-4\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:cover {\"url\":\"https://newspack.newspackstaging.com/wp-content/uploads/2020/03/automated_upload-62.jpg\",\"id\":131} -->\n<div class=\"wp-block-cover has-background-dim\" style=\"background-image:url(https://newspack.newspackstaging.com/wp-content/uploads/2020/03/automated_upload-62.jpg)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:heading -->\n<h2>" . __( 'Subscribe to our newsletter', 'newspack-blocks' ) . "</h2>\n<!-- /wp:heading --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:jetpack/mailchimp /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
	'viewportWidth' => 1000,
	'categories'    => array( 'newspack-subscribe' ),
);
