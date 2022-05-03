
	<!-- SERVICES SECTION -->
	<section id="services" class="uk-block uk-block-secondary">
		<div class="top-part">
			<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-contrast">
				<h2 class="section-title"><span class="titlebox"><?php echo h($data->title(),false) ?></span></span></h2>
				<div class="section-text">
					<?php echo $data->text()->kt() ?>

					<div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-xlarge-1-3 uk-margin-large-top" data-uk-grid="{gutter: 20}">
<?php 
	$x = 0;
	foreach($data->servicelist()->toStructure() as $service): 
		$x += 1;
?>
					    <div class="service-item">
					    	<a href="#service-modal-<?php echo $x ?>" class="uk-panel service-item-link" data-uk-modal>
					    		<p class="item-description"><?php echo h($service->servicetitle(),false) ?></p>
					    	</a>
					    </div>
<?php endforeach ?>					    
					</div>

<?php if($data->contactbtntxt()->isNotEmpty()): ?>
					<p class="uk-margin-large-bottom"><a href="#contact" class="action-btn" data-uk-smooth-scroll><?php echo h($data->contactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
<?php endif ?>
				</div>
			</div>
		</div>

<?php if(page('home/cases')->isVisible()): ?>
		<div class="bottom-part uk-text-center">
			<a href="#cases" class="triangle-down" data-uk-smooth-scroll>
				<span class="triangle-inner-link"></span>
			</a>
		</div>
<?php endif ?>

		<!-- service modals -->
<?php 
	$x = 0;
	foreach($data->servicelist()->toStructure() as $service): 
		$x += 1;
?>
		<div id="service-modal-<?php echo $x ?>" class="uk-modal">
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close modal-close-btn">
		        	<span class="modal-close-triangle">
		        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
		        	</span>
		        </button>
		        <h1 class="modal-title">
		        	<span class="titlebox"><?php echo h($service->servicetitle(),false) ?></span>
		        </h1>

		        <div class="modal-text">

	<?php if($service->serviceimage()->isNotEmpty() && $image = $data->image($service->serviceimage())): ?>
		        	<p class="feature-img uk-margin-large-bottom uk-text-center">
		        		<img 
		        			width="400" height="250"  
		        			src="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
		        			srcset="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 800, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 1200, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
		        		>
		        	</p>
	<?php endif ?>

			        <?php echo $service->servicetext()->kt() ?>

	<?php if($data->modalcontactbtntxt()->isNotEmpty()): ?>
					<p class="uk-text-center"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->modalcontactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
	<?php endif ?>
				</div>
		    </div>
		</div>
<?php endforeach ?>

		<!-- end of service modals -->
	</section>
	<!-- end of SERVICES SECTION -->
