	<?php

	/*
	* 	The template for displaying Front Page.
	*
	* 	@package plumbelt-lite
	*/

	get_header();

	if ( get_option( 'show_on_front' ) == 'page' ){?>

		<section class="content">

		<div class="container">

			<div class="main-wrapper">

				<?php

				if ( have_posts() ) {

					while ( have_posts() ) {

						the_post(); ?>



						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<?php the_content(); ?>

							
						</article>



						<?php }

				}

				?>

			</div><!--/.main-wrapper-->



			<?php get_sidebar(); ?>



			<div class="clear"></div>

		</div><!--/.container-->

	</section><!--/.content-->

	<?php } else { 

	get_template_part( 'includes/subheader' );



	if ( !dynamic_sidebar() ) {

		$content_style = 'style="position: relative";';

	}

	?>

	<section class="content" <?php echo $content_style; ?>>

		<div class="container">
			
			<?php 

			if (get_theme_mod( 'ti_frontpage_boxone_title' ) || get_theme_mod( 'ti_frontpage_boxone_content' ,'Go to Appearance - Customize, to add content.') || get_theme_mod( 'ti_frontpage_boxtwo_title' ) || get_theme_mod( 'ti_frontpage_boxtwo_content','Go to Appearance - Customize, to add content.' ) || get_theme_mod( 'ti_frontpage_boxthree_title' ) || get_theme_mod( 'ti_frontpage_boxthree_content','Go to Appearance - Customize, to add content.' )): 
			?>

			<div class="three-cols-content">

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxone_title' ) ) {

						echo '<h3>'. get_theme_mod( 'ti_frontpage_boxone_title' ) .'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxone_content','Go to Appearance - Customize, to add content.' ) ) {

						echo '<p>'. get_theme_mod( 'ti_frontpage_boxone_content','Go to Appearance - Customize, to add content.' ) .'</p>';

					}

					?>

				</div><!--/.col-->

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxtwo_title' ) ) {

						echo '<h3>'. get_theme_mod( 'ti_frontpage_boxtwo_title' ) .'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxtwo_content' ) ) {

						echo '<p>'. get_theme_mod( 'ti_frontpage_boxtwo_content','Go to Appearance - Customize, to add content.' ) .'</p>';

					}

					?>

				</div><!--/.col-->

				<div class="col">

					<?php

					if ( get_theme_mod( 'ti_frontpage_boxthree_title' ) ) {

						echo '<h3>'. get_theme_mod( 'ti_frontpage_boxthree_title' ) .'</h3>';

					}



					if ( get_theme_mod( 'ti_frontpage_boxthree_content' ) ) {

						echo '<p>'. get_theme_mod( 'ti_frontpage_boxthree_content','Go to Appearance - Customize, to add content.' ) .'</p>';

					}

					?>

				</div><!--/.col-->

			</div><!--/.three-cols-content-->



			<hr class="separator" />

			<?php endif; ?>
			
			<?php if( get_theme_mod( 'ti_frontpage_article_image' ) || get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) ) || get_theme_mod( 'ti_frontpage_article_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ): ?>

			<article class="big">

				<?php

				if ( get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri() .'/upload/article-1.jpg' ) ) {

					echo '<img src="'. get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri() .'/upload/article-1.jpg' ) .'" alt="" title="" />';

				}



				if ( get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) ) ) {

					echo '<h2>'. get_theme_mod( 'ti_frontpage_article_title',__( 'About our services', 'plumbelt-lite' ) ) .'</h2>';

				}


				if ( get_theme_mod( 'ti_frontpage_article_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ) {

					echo get_theme_mod( 'ti_frontpage_article_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' );

				}

				?>

				<span class="clear"></span>

			</article><!--/.big-->



			<hr class="separator" />

			<?php endif; ?>


		</div><!--/.container-->

	</section><!--/.content-->


	<?php } get_footer(); ?>