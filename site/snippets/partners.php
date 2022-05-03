
	<!-- PARTNERS SECTION -->
	<section id="partners" class="uk-block">
		<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-margin-large-bottom uk-margin-large-top">

			<h2 class="section-title uk-margin-bottom"><span class="titlebox"><?php echo h($data->title(),false) ?></span></h2>

			<div data-uk-slider="{autoplay: true, autoplayInterval: 4000}">

			    <div class="uk-slider-container">
			        <ul class="uk-slider uk-grid uk-grid-large">
<?php foreach($data->partnerlist()->toStructure() as $partner): ?>
			            <li class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-3">
		<?php if($image = $data->image($partner->partnerlogo())): ?>
			            	<figure class="uk-overlay uk-overlay-hover">
			            		<img 
			            		width="200" height="200"
			            		src="<?php echo thumb($image, array('width' => 200, 'height' => 200, 'upscale' => true, 'grayscale' => true))->url() ?>" 
			            		srcset="<?php echo thumb($image, array('width' => 200, 'height' => 200, 'upscale' => true, 'grayscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 400, 'height' => 400, 'upscale' => true, 'grayscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 600, 'height' => 600, 'upscale' => true, 'grayscale' => true))->url() ?> 3x"
			            		style="opacity: 0.5" class="uk-responsive-height">
			            		<img 
			            		width="200" height="200"
			            		src="<?php echo thumb($image, array('width' => 200, 'height' => 200, 'upscale' => true))->url() ?>" 
			            		srcset="<?php echo thumb($image, array('width' => 200, 'height' => 200, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 400, 'height' => 400, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 600, 'height' => 600, 'upscale' => true))->url() ?> 3x" 
			            		class="uk-overlay-panel uk-overlay-image">
			            		<a class="uk-position-cover" <?php if($partner->partnerurl()->isNotEmpty()): ?>href="<?php echo $partner->partnerurl() ?>" <?php endif ?>title="<?php echo h($partner->partnername(),false) ?>"></a>
			            	</figure>
		<?php endif ?>

			            </li>
<?php endforeach ?>
			        </ul>
			    </div>

			</div>

		</div>
	</section>
	<!-- end of PARTNERS SECTION -->
