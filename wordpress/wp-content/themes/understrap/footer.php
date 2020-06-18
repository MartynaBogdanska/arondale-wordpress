<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row">
  							<div class="col-md-6">
								<h5>ABOUT</h5>
								<p class="small">Arondale is a Queensland privately-owned commercial construction company founded in 1989. Working with some of the industry’s best known commercial builders in that time, we have solidified our place as a market leader. Equipped with some of the industry’s best and supported by our loyal suppliers, Arondale strives on continuously achieving great results for our clients within budget to a high level of detail.</p>
								<p class="small">We focus on five main key verticals: Medical, Education, Retail, Office and Aged Care/Retirement.</p>
							</div>
							<div class="col-md-3">
								<h5>CONTACT</h5>
								<p class="small">Arondale</p>
								<p class="small">Unit 2 / 16 Perrin Place<br>Salisbury, QLD 4107</p>
								<p class="small"><a href="mailto:enquiries@arondale.com.au">enquiries@arondale.com.au</a></p>
								<p class="small">+61 (07) 3277 8000</p>
							</div>
							<div class="col-md-3">
								<h5>SITE MAP</h5>
								<p class="small"><a href="../#about">About</a></p>
								<p class="small"><a href="../#projects">Project</a></p>
								<p class="small"><a href="../#careers">Careers</a></p>
								<p class="small"><a href="/terms-of-use">Terms of use</a></p>
								<p class="small"><a href="/privacy-policy">Privacy policy</a></p>
							</div>
						</div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

	<div class="site-rights text-center">
		<div class="container small">
		© Arondale Pty Ltd 2019
		</div>
	</div><!-- .site-rights -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
