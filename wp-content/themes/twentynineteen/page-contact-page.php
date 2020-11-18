<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div align="center">page-contact.php</div>
			<?php
			
	/* 		$dest = "siri.learning.spanish@gmail.com";
			$sujet = "Email de test";
			$corp = "Salut ceci est un email de test envoyer par le site de Siri language";
			$headers = "From: siri.learning.spanish@gmail.com";

			//wp_mail( $to, $subject, $message, $headers, $attachments );
			//if (mail($dest, $sujet, $corp, $headers)) {
			if (wp_mail($dest, $sujet, $corp, $headers)) {
			  echo "Email envoyé avec succès à $dest ...";
			} else {
			  echo "Échec de l'envoi de l'email...";
			} */
		  
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
