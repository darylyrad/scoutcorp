
	<!-- ABOUT US SECTION -->
	<section id="about" class="uk-block uk-block-primary">
		<div class="top-part">
			<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-contrast">
				<h2 class="section-title"><span class="titlebox"><?php echo h($data->title(),false) ?></span></h2>
				<div class="section-text">
					<?php echo $data->text()->kt() ?>

<?php if($data->modalreadbtntxt()->isNotEmpty()): ?>
					<p class="uk-margin-large-bottom"><a href="#about-modal" class="action-btn" data-uk-modal><?php echo h($data->modalreadbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
				</div>
<?php endif ?>
<?php if(page('home/staff')->isVisible()) snippet('staff_gallery', array('data' => page('home/staff'))); ?>

			</div>
		</div>
		<div class="bottom-part uk-text-center">
			<a href="#services" class="triangle-down" data-uk-smooth-scroll>
				<span class="triangle-inner-link"></span>
			</a>
		</div>

		<!-- main about modal -->
		<div id="about-modal" class="uk-modal">
		    <div class="uk-modal-dialog">
			        <button class="uk-modal-close modal-close-btn">
			        	<span class="modal-close-triangle">
			        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
			        	</span>
			        </button>
			        <h1 class="modal-title"><span class="titlebox"><?php echo h($data->modaltitle(),false) ?></span></h1>

<?php if($data->modalimage()->isNotEmpty() && $image = $data->image($data->modalimage())): ?>
			        <p class="feature-img uk-margin-large-bottom uk-text-center">
		        		<img 
		        			width="400" height="250" 
		        			src="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
		        			srcset="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 800, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 1200, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
		        		>
		        	</p>
<?php endif ?>

			        <div class="modal-text">
				        <?php echo $data->modaltext()->kt() ?>

<?php if($data->modalcontactbtntxt()->isNotEmpty()): ?>
						<p class="uk-text-center"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->modalcontactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a>
					    </p>
<?php endif ?>
					</div>
		    </div>
		</div>
		<!-- end of main about modal -->

<?php if(page('home/staff')->isVisible()) snippet('staff_modals', array('data' => page('home/staff'))); ?>

	</section>
	<!-- end of ABOUT US SECTION -->
