<?php /*
Template Name: Contacts
Description: A Page Template for custom page.
*/
get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
			<div class="col-md-12 column5">
                <div class="reg-form">
                    <h1>Aplikuok šiandien!</h1>
                    <form>
                        Tavo vardas ir pavardė<br> <input type="text" name="vardas"><br><br>
                        El. paštas <br> <input type="text" name="pastas"><br><br>
                        Tel. Numeris <br> <input type="text" name="numeris"><br><br>
                        <input class="submit2" type="submit" name="submit" value="Registruokis Dabar"><br><br>
                    </form>
                </div>
                <div class="reg-img">
                    <img src="">
                </div>
            </div>
			</div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>