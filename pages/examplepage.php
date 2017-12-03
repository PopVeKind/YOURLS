<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
	echo "Try using a URL without the /pages/ part";
	die();
}

// Display page content. Any PHP, HTML and YOURLS function can go here.
// YOURLS-PV Replace YOURLS_SITE with YOURLS_ABSURL
$url = YOURLS_ABSURL . '/examplepage';

yourls_html_head( 'examplepage', 'Example page' );

?>

<p>This is an example page. Its URL is simply <?php echo $url; ?></p>

<?php

yourls_html_footer();

