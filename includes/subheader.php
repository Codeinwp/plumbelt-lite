<?php if( get_theme_mod( 'ti_subheader_title','This is a nice headline to get my attention' ) || get_theme_mod( 'ti_subheader_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi' ) || get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ): ?>	
	
	<section id="featured">

		<div class="container">

		

			<div class="three-cols">

				<div class="two-cols frontpage-content">

					<?php

					if ( get_theme_mod( 'ti_subheader_title','This is a nice headline to get my attention' ) ) {

						echo '<h2>'. get_theme_mod( 'ti_subheader_title','This is a nice headline to get my attention' ) .'</h2>';

					}



					if ( get_theme_mod( 'ti_subheader_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi' ) ) {

						echo '<p>'. get_theme_mod( 'ti_subheader_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi' ) .'</p>';

					}

					?>

				</div>

			</div>

			<?php

			if ( is_front_page() ) {



				if ( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) ) {

					echo '<div class="widget cf">';

					echo do_shortcode( get_theme_mod( 'ti_subheader_contact_form_shortcode' ) );

					echo '</div>';

				}



			}

			?>

		</div><!--/.container-->

	</section><!--/#featured-->
	
<?php endif; ?>	