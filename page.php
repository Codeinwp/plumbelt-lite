	<?php

	/*
	* 	The template for displaying Page.
	*
	* 	@package plumbelt-lite
	*/

	get_header();

	?>

	<section class="content">

		<div class="container">

			<div class="main-wrapper">

				<h1>

					<?php the_title(); ?>

				</h1>



				<?php

				if ( have_posts() ) {

					while ( have_posts() ) {

						the_post(); ?>



						<article>

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

	<?php get_footer(); ?>