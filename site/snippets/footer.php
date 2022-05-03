

	<!-- SITE FOOTER -->
	<footer class="uk-block uk-block-secondary">
		<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-contrast uk-margin-bottom uk-margin-top">

			<p class="contact-social">
<?php if($site->facebook_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->facebook_url() ?>" class="uk-icon-hover uk-icon-facebook-square uk-icon-large"></a> 
<?php endif ?>
<?php if($site->linkedin_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->linkedin_url() ?>" class="uk-icon-hover uk-icon-linkedin-square uk-icon-large"></a> 
<?php endif ?>
<?php if($site->twitter_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->twitter_url() ?>" class="uk-icon-hover uk-icon-twitter-square uk-icon-large"></a> 
<?php endif ?>
<?php if($site->instagram_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->instagram_url() ?>" class="uk-icon-hover uk-icon-instagram uk-icon-large"></a> 
<?php endif ?>
<?php if($site->pinterest_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->pinterest_url() ?>" class="uk-icon-hover uk-icon-pinterest-square uk-icon-large"></a> 
<?php endif ?>
<?php if($site->youtube_url()->isNotEmpty()): ?>
				<a href="<?php echo $site->youtube_url() ?>" class="uk-icon-hover uk-icon-youtube-play uk-icon-large"></a>
<?php endif ?>
			</p>

			<p class="legal">
<?php if($site->terms_txt()->isNotEmpty()): ?>
				<a href="#terms-modal" data-uk-modal>Site Terms &amp; Conditions</a>
<?php endif ?>
<?php if($site->terms_txt()->isNotEmpty() && $site->privacy_txt()->isNotEmpty()): ?>
				 &nbsp;|&nbsp; 
<?php endif ?>
<?php if($site->privacy_txt()->isNotEmpty()): ?>
				<a href="#privacy-modal" data-uk-modal>Privacy Policy</a>
<?php endif ?>
			</p>

			<div class="footer-text">
				<?php echo $site->footer_txt()->kt() ?>
			</div>

		</div>

<?php if($site->terms_txt()->isNotEmpty()): ?>
		<!-- terms & conditions modal -->
		<div id="terms-modal" class="uk-modal">
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close modal-close-btn">
		        	<span class="modal-close-triangle">
		        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
		        	</span>
		        </button>
		        <h1 class="modal-title"><span class="titlebox">Site Terms &amp; Conditions</span></h1>

		        <div class="modal-text">
			        <?php echo $site->terms_txt()->kt() ?>

					<p class="uk-text-center"><a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#contact" class="action-btn uk-modal-close" <?php if($page->isHomePage()): ?>data-uk-smooth-scroll<?php endif ?>>contact us <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
				</div>
		    </div>
		</div>
		<!-- end of terms & conditions modal -->
<?php endif ?>

<?php if($site->privacy_txt()->isNotEmpty()): ?>
		<!-- privacy policy modal -->
		<div id="privacy-modal" class="uk-modal">
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close modal-close-btn">
		        	<span class="modal-close-triangle">
		        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
		        	</span>
		        </button>
		        <h1 class="modal-title"><span class="titlebox">Privacy Policy</span></h1>

		        <div class="modal-text">
			        <?php echo $site->privacy_txt()->kt() ?>

					<p class="uk-text-center"><a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#contact" class="action-btn uk-modal-close" <?php if($page->isHomePage()): ?>data-uk-smooth-scroll<?php endif ?>>contact us <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
				</div>
		    </div>
		</div>
		<!-- end of privacy policy modal -->
<?php endif ?>
	</footer>
	<!-- end of SITE FOOTER -->


	<!-- SITE NAVIGATION -->
	
	<!-- site menu open button -->
	<div class="menu-button-container opener">
		<a class="modal-close" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">
	    	<span class="uk-icon-navicon uk-icon-medium modal-close-icon"></span>
	    </a>
	</div>

	<nav id="site-menu" class="uk-text-center uk-contrast uk-hidden">
		<a id="menu-bg-toggle" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}"></a>
		<div class="menu-spacer"></div>
        <ul class="uk-list">
<?php if(page('home/contact')->phone_num()->isNotEmpty()): ?>
        	<li class="menu-item">
        		<a href="tel:<?php echo page('home/contact')->phone_num() ?>" class="uk-icon-hover uk-icon-phone" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}"></a>
        	</li>
<?php endif ?>
        	<li class="menu-item uk-margin-large-bottom">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#contact" class="uk-icon-hover uk-icon-envelope" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}"></a>
        	</li>
        	<li class="menu-item">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#about" class="text-item" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">About Us</a>
        	</li>
        	<li class="menu-item">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#services" class="text-item" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">Our Services</a>
        	</li>
<?php if(page('home/cases')->isVisible()): ?>
        	<li class="menu-item">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#cases" class="text-item" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">Case Studies</a>
        	</li>
<?php endif ?>
<?php if(page('home/listings')->isVisible()): ?>
        	<li class="menu-item">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#listings" class="text-item" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">Selected Listings</a>
        	</li>
<?php endif ?>
        	<li class="menu-item">
        		<a href="<?php if(!$page->isHomePage()) echo $site->homePage()->url().'/' ?>#contact" class="text-item" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">Contact Us</a>
        	</li>
        </ul>

<?php if($site->show_social_menu()->bool()): ?>
    	<p class="uk-width-9-10 uk-container-center uk-margin-large contact-social">
	<?php if($site->facebook_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->facebook_url() ?>" class="uk-icon-hover uk-icon-facebook-square uk-icon-large"></a> 
	<?php endif ?>
	<?php if($site->linkedin_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->linkedin_url() ?>" class="uk-icon-hover uk-icon-linkedin-square uk-icon-large"></a> 
	<?php endif ?>
	<?php if($site->twitter_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->twitter_url() ?>" class="uk-icon-hover uk-icon-twitter-square uk-icon-large"></a> 
	<?php endif ?>
	<?php if($site->instagram_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->instagram_url() ?>" class="uk-icon-hover uk-icon-instagram uk-icon-large"></a> 
	<?php endif ?>
	<?php if($site->pinterest_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->pinterest_url() ?>" class="uk-icon-hover uk-icon-pinterest-square uk-icon-large"></a> 
	<?php endif ?>
	<?php if($site->youtube_url()->isNotEmpty()): ?>
			<a href="<?php echo $site->youtube_url() ?>" class="uk-icon-hover uk-icon-youtube-play uk-icon-large"></a>
	<?php endif ?>
		</p>
<?php endif ?>
	</nav>

	<!-- site menu close button -->
	<div id="menu-closer" class="menu-button-container closer uk-hidden">
		<a class="modal-close" data-uk-toggle="{target:'#site-menu, #menu-closer', animation:'uk-animation-slide-top'}">
	    	<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
	    </a>
	</div>
	<!-- end of SITE NAVIGATION -->

<?php if($site->analytics()->isNotEmpty()): ?>
	<!-- ANALYTICS CODE -->
	<?php echo $site->analytics() ?>
	<!-- end of ANALYTICS CODE -->
<?php endif ?>

</body>
</html>