<?php get_header(); ?>

<div class="hero-interior container">
    <div class="hero-text">
        <h1>
            <?php wp_title(''); ?>
        </h1>
    </div>
</div>

<div class="interior-page">
	<div class="interior-page__container container">
		<div class="interior-page__row">
			<div id="four-page-text">
			<h2>404: Page Not Found</h2>
			<h2>
				We Can't Seem to find the page you are looking for!
			</h2>
			<a href="/" class="col-xs-12 col-sm-3 consistent-buttons text-center error-btn">
				Return to Home
				<br>
			</a>
			<a href="#" data-toggle="modal" data-target="#cwsContactModal" type="button" class="col-xs-12 col-sm-3 consistent-buttons secondary-buttons text-center ds-track-contact error-btn error-btn__contact">
				Contact Us
				<br>
			</a>
			<div class="container-fluid interior-page-wrap">
				<?php do_action( 'cws_content' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
