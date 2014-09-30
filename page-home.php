<?php  
/*==========================================
=            Home Page Template            =

Template Name: Home Page
==========================================*/
get_header();

?>

<!-- PORTFOLIO AREA -->
		<section>
			<hr class="no-margin"></hr>
			<div class="middle-container section-content">
				<div class="container">
					<ul class="row">
						<li class="col-md-4">
						<article class="box">
							<div class="intro-content align-center">
								<h1>I am da moose</h1> 
							</div> <!-- end intro-content -->
						</article>
						</li>
						<li class="col-md-4">
						<article class="box">
							<div class="intro-content align-center">
								<h1>I create super awesome stuff</h1> 
							</div> <!-- end intro-content -->
						</article>
						</li>
						<li class="col-md-4">
						<article class="box">
							<div class="intro-content align-center">
								<h1>I am available for freelance projects</h1> 
							</div> <!-- end intro-content -->
						</article>
						</li>
					</ul>

				<?php 
				$args = array(
					'posts_per_page' => 3
				); 

				$portfolio_items = new WP_Query($args);

				if ( $portfolio_items->have_posts() ) : ?>

					<ul class="row portfolio-entries">
					<?php while ( $portfolio_items->have_posts() ) : $portfolio_items->the_post(); ?>
						<li class="col-md-4 portfolio-entry">
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
				
				<?php endif; ?>

					<div class="cta align-center">
						<a href="<?php echo home_url( ); ?>/portfolio" class="btn btn-primary">See my full portfolio</a>
					</div> <!-- end cta -->

				</div> <!-- end container -->
			</div> <!-- end middle-container -->
		</section>

<?php get_footer(); ?>






















