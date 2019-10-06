<?php /*
Template Name: Services
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
				<div class="col-md-4">
					<h1>Pradinis</h1>
					<div class="rte">
                        SLIDERIS
					</div>
				</div>
			</div>
		</div>
	</div>

				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>