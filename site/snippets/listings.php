
	<!-- LISTINGS SECTION -->
	<section id="listings" class="uk-block uk-block-secondary">
		<div class="top-part">
			<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center uk-contrast">
				<h2 class="section-title"><span class="titlebox"><?php echo h($data->title(),false) ?></span></h2>

				<!-- Listings Slideshow -->
				<div class="uk-margin-large-top" data-uk-slideshow="{autoplay:true}">
					<ul class="uk-slideshow">
<?php 
	$x = 0;
	foreach($data->selectedlistings()->toStructure() as $listing): 
		$x += 1;
?>
						<!-- slideshow listing item -->
					    <li class="listing-item">
					    	<a href="#listing-modal-<?php echo $x ?>" class="uk-panel listing-item-link" data-uk-modal>
	    		        		<p class="item-description">
						    		<span class="item-name"><?php echo h($listing->listingtitle(),false) ?></span> <br>
						    		<span class="item-role"><?php echo h($listing->shortdescription(),false) ?></span>
					    		</p>
	<?php if($image = $data->image($listing->listingimage())): ?>
					    		<img 
	    				    		width="300" height="200"  
	    		        			src="<?php echo thumb($image, array('width' => 300, 'height' => 200, 'crop'=> true, 'upscale' => true))->url() ?>" 
	    		        			srcset="<?php echo thumb($image, array('width' => 300, 'height' => 200, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 600, 'height' => 400, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 900, 'height' => 600, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
	    		        		>
	<?php endif ?>
					    	</a>
			            </li>
			            <!-- end of slideshow listing item -->

<?php endforeach ?>
					</ul>
					<ul class="uk-dotnav uk-dotnav-contrast uk-flex-center uk-margin-top-remove">
<?php 
	$x = 0;
	foreach($data->selectedlistings()->toStructure() as $listing): 
?>
				        <li data-uk-slideshow-item="<?php echo $x ?>"><a href=""></a></li>
<?php 
		$x += 1;
	endforeach;
?>
				    </ul>
			    </div>
				<!-- end of Listings Slideshow -->

<?php if($data->contactbtntxt()->isNotEmpty()): ?>
				<p class="uk-text-center uk-margin-large-bottom"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->contactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
<?php endif ?>
			</div>
		</div>
		<div class="bottom-part uk-text-center">
			<a href="#contact" class="triangle-down" data-uk-smooth-scroll>
				<span class="triangle-inner-link"></span>
			</a>
		</div>

		<!-- listing modals -->
<?php 
	$x = 0;
	foreach($data->selectedlistings()->toStructure() as $listing): 
		$x += 1;
?>
		<div id="listing-modal-<?php echo $x ?>" class="uk-modal">
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close modal-close-btn">
		        	<span class="modal-close-triangle">
		        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
		        	</span>
		        </button>
		        <h1 class="modal-title">
		        	<span class="titlebox"><?php echo h($listing->listingtitle(),false) ?></span>
		        </h1>

		        <div class="modal-text">

		        	<p class="feature-img uk-margin-large-bottom uk-text-center">
	<?php if($image = $data->image($listing->listingimage())): ?>
		        		<img 
		        			width="400" height="250"  
		        			src="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
		        			srcset="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 800, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 1200, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
		        		>
	<?php endif ?>
		        	</p>

			       	<?php echo $listing->listingtext()->kt() ?>

<?php if($data->modalcontactbtntxt()->isNotEmpty()): ?>
					<p class="uk-text-center"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->modalcontactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
<?php endif ?>
				</div>
		    </div>
		</div>

<?php endforeach ?>
		<!-- end of listing modals -->
	</section>
	<!-- end of LISTINGS SECTION -->
