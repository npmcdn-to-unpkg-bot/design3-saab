<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

		<section id="info-section">
					<div class="overlay-title">
				<h1><?php the_field('valkomstext');?></h1></div>

							<!--<h1 id="insta-title"><a href="https://www.instagram.com/traktorochmaskin/">@traktorochmaskin</a></h1>-->

					<div id="instafeed">

					</div>



					<!--<a href="#" class="black-btn">Se mer på instagram</a>-->
			


		</section>

		<!--<section id="welcome-section-para" class="para" style="background-image:url('http://localhost:8080/traktorOMaskin/wp-content/uploads/2016/07/thecrew.jpg')">

								<div class="container">

			<div class="row">
				<div class="col-md-7 col-sm-7 animated" id="text">
				<?php the_content(); ?>
				</div>

			</div>

			</div>
		</section>-->

		<section id="intro">
				<!--<div class="stripes"></div>-->
			<div class="container">


				<?php the_content(); ?>


								<div class="col-md-12">
					<!--<img src="<?php bloginfo('template_url')?>/images/crew.jpg">-->

				</div>
			</div>
		</section>
		<!--<section id="youtube">
			<iframe width="1900" height="1069" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
		</section>

		<section id="welcome-section" style="background-image:url('<?php bloginfo('template_url')?>/images/crew-wide.jpg')">


								<div class="container">


								<!--<h1>Välkommen</h1>-->

			<div class="row">

				<div class="col-md-9 col-sm-9 col-md-offset-3" id="text">
				<?php //the_content(); ?>
				</div>


			</div>

			</div>
		</section>
		<section id="facebook">
		<div class="container">
		<div class="row">
			<div class="col-md-6 red-box" id="youtube">
			<h3 class="sub-title">Ta en rundtur på youtube!</h3>
				<iframe width="640" height="360" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<p>Se fina bilder från våra faciliteter i Björkvik, bilderna är från 2014</p>
			</div>

			<div class="col-md-2">
				<!--<div class="border"></div>-->
			</div>

			<div class="col-md-4">

			<div class="fb-wrap red-box">

			<h3 class="sub-title">Vi finns på Facebook</h3>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTraktor-Maskin-i-S%25C3%25B6rmland-AB-442543515902113%2F%3Ffref%3Dnf&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=911661125591162" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			</div>
			</div>
			</div>
		</section>
		<div class="clearfix"></div>
	</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script type="text/javascript">
/*
jQuery(window).load(function ($) {

	console.log($(window).height());
	//$('.banner').height($(window).height() -123);


});
*/

console.log('footer');
var feed = new Instafeed({
        get: 'user',
        userId: 3127068056,

        accessToken: '3127068056.1677ed0.6dccf6aae5074bb08e9aef60f8227ca7',
        template: '<div class="insta grid-item"><a href="{{link}}"><div class="text"><small>{{caption}}</small></div><img src="{{image}}" /></a></div>',
        limit: 12,
        resolution: 'standard_resolution',

         after: function() {
         	console.log('done');
         	jQuery('#instafeed').append('<div class="clearfix"></div>');
         }
    });
    feed.run();
</script>

<?php get_footer();?>