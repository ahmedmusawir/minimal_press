<?php  
/*==========================================
=            Contact Page Template            =

Template Name: Contact Page
==========================================*/
get_header();

?>
		<!-- CONTACT AREA -->
		<section>
			<hr class="no-margin"></hr>
			
			<div class="middle-container section-content">
				<div class="container box section-content align-center">
					
					<h2>Let's Get in Touch</h2>

					<p>You can call me, email me directly or connect with me through my social networks.</p>
					<p>(+40) 744122222 <br /><a href="#">hello@damoose.com</a></p> 
					
					<ul class="social-icons inline">
						<li><a href="" class="icon-twitter"></a></li>
						<li><a href="" class="icon-facebook"></a></li>
						<li><a href="" class="icon-dribbble"></a></li>
					</ul>

					<hr class="alt"/>

					<h2>Need a Quote?</h2>

					<p>Use the form below. All fields are required.</p>

					<form action="<?php the_permalink(); ?>" method="POST" class="quote-form" novalidate>
						<p>
							<label for="quote-name">Full Name:</label>
							<input type="text" name="quote-name" id="quote-name" placeholder="">
						</p>
						<p>
							<label for="quote-email">Email Address:</label>
							<input type="email" name="quote-email" id="quote-email" placeholder="">
						</p>
						<p>
							<label for="quote-phone">Phone Number</label>
							<input type="tel" name="quote-phone" id="quote-phone" placeholder="">
						</p>
						<p class="select-container">
							<label for="quote-project-type">Project Type:</label>
							<select name="quote-project-type" id="quote-project-type" >
								<option value="0">- Select Project Type -</option>
								<option value="1">Website</option>
								<option value="2">Logo Design</option>
								<option value="3">Print</option>
							</select>
						</p>
						<p>
							<label for="quote-project-description">Project Description:</label>
							<textarea name="" id="quote-project-description" cols="30" rows="10"></textarea>
						</p>
						<p>
							<label for="quote-budget">Available Budget:</label>
							<input type="number" name="quote-budget" id="quote-budget" value="50" min="50" step="50" class="align-right" placeholder="">
						</p>

						<div class="cta">
							<input type="submit" name="submit" class="btn btn-primary" value="Give me a quote" />
						</div> <!-- end ca -->
					</form>

				</div> <!-- end container -->
			</div> <!-- end middle-container -->
		</section>



<?php get_footer('contact'); ?>