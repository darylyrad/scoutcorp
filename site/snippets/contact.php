	
	<!-- CONTACT SECTION -->
	<section id="contact" class="uk-block uk-block-primary">
		<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-contrast">
			<h2 class="section-title"><span class="titlebox"><?php echo h($data->title(),false) ?></span></h2>
<?php if($data->phone_num()->isNotEmpty()): ?>
			<p class="contact-phone">
				<a href="tel:<?php echo $data->phone_num() ?>">
					<span class="uk-icon-phone"></span> <?php e($data->phone_display()->isNotEmpty(),h($data->phone_display(),false),$data->phone_num()) ?>
				</a>
			</p>
<?php endif ?>
<?php if($data->mainemail()->isNotEmpty() && $data->email_display()->isNotEmpty()): ?>
			<p class="contact-email">
				<?php echo kirbytag(array( 'email' => $data->mainemail(), 'text' => '<span class="uk-icon-envelope"></span> '.h($data->email_display(),false))) ?> 
			</p>
<?php endif ?>
<?php if($data->address()->isNotEmpty()): ?>
			<div class="contact-address">
				<span class="uk-icon-map-marker"></span>
				<?php echo $data->address()->kt() ?>
			</div>
<?php endif ?>
<?php if($site->show_social_contacts()->bool()): ?>
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
<?php endif ?>

			<hr>

			<form id="contact-form" class="uk-form" method="post" action="">

		        <div class="form-row">
		        	<input name="name" id="form-name" type="text" placeholder="Your Name *" class="uk-width-1-1" required>
		        </div>
		        <div class="form-row">
		        	<input name="phone" id="form-phone" type="tel" placeholder="Your Phone" class="uk-width-1-1">
		        </div>
		        <div class="form-row">
		        	<input name="email" id="form-email" type="email" placeholder="Your Email *" class="uk-width-1-1" required>
		        </div>
		        <div class="form-row">
		        	<!-- a 'honeypot' field, to help us detect spam bots (use css to hide it) -->
					<input name="website" type="text" id="form-website" value="" class="uk-hidden">
		        	<textarea name="message" id="form-message" rows="12" placeholder="Your Message" class="uk-width-1-1"></textarea>
		        </div>

			    <div id="form-alert" class="uk-alert uk-animation-slide-top uk-hidden">
				    <a class="uk-alert-close uk-close" data-uk-toggle="{target:'#form-alert', animation: 'uk-animation-slide-bottom'}"></a>
				    <p class="form-result"></p>
				</div>

			    <p class="uk-text-center">
			    	<button name="reset" type="reset" value="reset" class="reset-btn uk-button">Reset <span class="uk-icon-undo uk-icon-small"></span></button> &nbsp;&nbsp;&nbsp; 
			    	<button name="submit" type="submit" value="submit" class="action-btn uk-button">Send <span class="uk-icon-send uk-icon-small"></span></button>
			    </p>
			</form>

		</div>
	</section>
	<!-- end of CONTACT SECTION -->
