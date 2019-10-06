<?php /*
Template Name: Home page
Description: A Page Template for custom page.
*/
get_header(); ?>
	<!-- About -->
	<?php $args = array( 'post_type' => 'aprasymas', 'posts_per_page' => 9999 );?>
        <?php $loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : $loop->the_post(); ?>			
				<div class="container about remove" id="about-content">
					<div class="row">
						<div class="col-md-12">
							<div class="about-wrapper">
								<?php if(has_post_thumbnail() ): ?> 
									<h1 class="about-title-responsive"><?php the_title(); ?> </h1>
									<div class="about-main-pic">   
										<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' ); 
										echo '<img class="about-pic" src="' . $image_src[0]  . '" width="100%"; height="auto"  />'; ?> 
									</div>	
									<div class="about-text">
										<h1 class="about-title"><?php the_title(); ?> </h1>
										<h1 class="about-content"><?php the_content(); ?></h1>  
									</div>
									  
								<?php endif; ?> 
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>	

	<!-- Partneriai -->
	
	<div class="partners remove" id="partners-content">
		<div class="row partners-row">
			<div class="col-md-12 partners-col">
				<h1 class="partners-title">Partneriai</h1>
					<?php 
					$i = 0;
					$args = array( 'post_type' => 'partner', 'posts_per_page' => 9999 ); ?>
						<div class="partners-wrapper">
							<div class="owl-one owl-carousel owl-theme">
								<?php $loop = new WP_Query( $args ); ?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="item"> <?php the_post_thumbnail('logo-list'); ?> </div>
									<?php $i++; endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
			</div>
		</div>
	</div>

	<!-- Blogas -->
	

		<div class="blog-wrap remove" id="blog-content">
			<div class="blog-row">
				<div class="col-md-12 blog-col">
					<?php
						$args = array( 'post_type' => 'blog', 'posts_per_page' => 1 ); 
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="blog-material remove">
								<div class="blog-pic">
									<?php  
									if(has_post_thumbnail() ):                
										$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'large' ); 
										echo '<img src="' . $image_src[0]  . '" width="100%"; height="100%"  />'; 
									 endif; ?>
								</div>
								<div class="blog-title">
									<a href="https://www.wix.com" class="title-link"><h1>Tinklaraštis</h1></a> 
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
	
			
<?php include_once 'contactform.php'; ?>
	<!-- Kontaktai -->		
	<?php $args = array( 'post_type' => 'kontaktas', 'posts_per_page' => 1 );?>
		<?php $loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : $loop->the_post(); ?>	
				<div class="container form1 remove" id="forms-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row-form">
								<div class="reg-form">
									<h1 class="reg-contact">Susisiekite </h1>
									<div class="form-class">
										<form action="" method="post" class="form-submit">
											<!-- <div class="alert-class alert-red-name">Nurodykite vardą</div> -->
											<p>Vardas ir pavardė</p>
											<input type="text" name="name" class="name" value=""><br><br>
											<!-- <div class="alert-class alert-red-email">Nurodykite el. pašto adresą</div> -->
											<p>El. paštas </p>
											<input type="text" name="email" class="email" value=""><br><br>
											<!-- <div class="alert-class alert-red-phone">Nurodykite tel. nr.</div> -->
											<p>Tel. Numeris </p>
											<input type="text" name="phone" class="phone" value=""><br><br>
											<p> Žinutė </p>
											<textarea name="message" rows="7" cols="50" minlength="10" maxlength="1000" class="msg" value=""></textarea><br><br>	
											<button class="btn btn-default" type="submit" name="button" class="form-button">Pateikti</button>
											</span><div class="alert-class alert alert-success" role="alert"><p class="alert-heading">Pranešimas išsiųstas!</p></div>
										</form>
									</div>
								</div>
								<div class="reg-img">  
									<?php 
									if(has_post_thumbnail() ):   
										$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'large' ); 
										echo '<img src="' . $image_src[0]  . '" width="100%"; height="auto"  />'; 
									endif; ?>	
								</div>	
							</div>
						</div>	
					</div>
				</div>
			<?php endif; ?>		

<?php get_footer(); ?>