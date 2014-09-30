<?php get_header(); ?>

	<!-- PORTFOLIO AREA -->
	<section>

		<hr class="no-margin"></hr>

		<?php  
			wp_nav_menu(array(
				'theme_location' => 'category-menu',
				'container' => '',
				'menu_class' => 'inline align-center portfolio-header',
				'menu_id' => 'portfolio-sorting'

			));

		?>

			<!-- <hr class="no-margin"></hr> -->
			<div class="middle-container section-content">
				<div class="container">
				<?php if ( have_posts() ) : ?>
					<ul class="row portfolio-entries">
					<?php while( have_posts() ) : the_post(); ?>

						<?php  
							$categories = get_the_category();
							// $categories = get_categories();
							//print_r($categories);
							//return;
							
							//if we have any categories, we'll copy them in an array 
							if ( $categories ) {
								$class_names = array();

								foreach ( $categories as $category ) {
									// print_r($category->category_nicename . "<br>");
									$class_names[] = 'cat-' . $category->category_nicename;
								}

								$classes = join( ' ', $class_names );
								// echo $classes;

							}
							// return;	

						?>
						<li class="col-md-4 portfolio-entry <?php echo $classes ?>">
						<article class="box">
							<div class="hover-state align-right">
								<p><?php the_title(); ?></p>
								<em>Click to see project</em>
							</div> <!-- end hover-state -->

							<?php if ( has_post_thumbnail() ) : ?>
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</figure>
							<?php endif; ?>
						</article>	
						</li>
					<?php endwhile; ?>
					</ul>
				<?php else : ?>
			<div class="middle-container section-content">
				<div class="container box section-content align-center">
					<h2>No Posts were found.</h2>
				</div> <!-- end container for else -->
			</div>	<!-- end middle-container for else -->
				<?php endif ?>

				<?php 
				global $wp_query;

				if ( $wp_query->max_num_pages > 1 ) : ?>

					<div class="box align-center portfolio-nav">
						<ul class="inline">
							<li><?php previous_posts_link('&larr; Previous Page', $wp_query->max_num_pages ); ?></li>
							<li><?php next_posts_link('Next Page &rarr;', $wp_query->max_num_pages ); ?></li>
						</ul>
					</div> <!-- end cta -->
				
				<?php endif; ?>

				</div> <!-- end container -->
			</div> <!-- end middle-container -->
		</section>



<?php get_footer(); ?>


























