
	<!-- CASE STUDIES SECTION -->
	<section id="cases">
		<div class="top-part">
			<div class="uk-width-9-10 uk-width-small-8-10 uk-width-medium-6-10 uk-width-large-5-10 uk-width-xlarge-4-10 uk-container-center uk-text-center">
				<h2 class="section-title"><span class="titlebox"><?php echo h($data->title(),false) ?></span></h2>

				<!-- Case Studies Slideshow -->
				<div class="uk-margin-large-top" data-uk-slideshow="{autoplay:true}">
					<ul class="uk-slideshow">
<?php 
	$x = 0;
	foreach($data->caselist()->toStructure() as $case): 
		$x += 1;
?>
						<!-- slideshow case item -->
					    <li class="case-item">
	<?php if($image = $data->image($case->caseimage())): ?>
					    	<figure class="uk-overlay uk-overlay-hover">
							    <img 
							    	width="300" height="200"  
				        			src="<?php echo thumb($image, array('width' => 300, 'height' => 200, 'crop'=> true, 'upscale' => true))->url() ?>" 
				        			srcset="<?php echo thumb($image, array('width' => 300, 'height' => 200, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 600, 'height' => 400, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 900, 'height' => 600, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
				        		>
							    <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
							        <p class="case-name"><?php echo h($case->casetitle(),false) ?></p>
							    </figcaption>
							    <a class="uk-position-cover" href="#case-modal-<?php echo $x ?>" data-uk-modal></a>
							</figure>
	<?php endif ?>
			            	<p class="case-quote"><?php echo h($case->casequote(),false) ?></p>
			            	<p class="case-quote-author"><?php echo h($case->quoteauthor(),false) ?></p>

<?php if($data->readbtntxt()->isNotEmpty()): ?>
			            	<p class="uk-margin-bottom"><a href="#case-modal-<?php echo $x ?>" class="action-btn" data-uk-modal><?php echo h($data->readbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
<?php endif ?>
			            </li>
			            <!-- end of slideshow case item -->

<?php endforeach ?>
					</ul>

					<ul class="uk-dotnav uk-flex-center uk-margin-large-bottom uk-margin-top-remove">
<?php 
	$x = 0;
	foreach($data->caselist()->toStructure() as $case): 
?>
				        <li data-uk-slideshow-item="<?php echo $x ?>"><a href=""></a></li>
<?php 
		$x += 1;
	endforeach;
?>
				    </ul>
			    </div>
				<!-- end of Case Studies Slideshow -->

			</div>
		</div>

<?php if(page('home/listings')->isVisible()): ?>
		<div class="bottom-part uk-text-center">
			<a href="#listings" class="triangle-down" data-uk-smooth-scroll>
				<span class="triangle-inner-link"></span>
			</a>
		</div>
<?php endif ?>

<?php if($data->readbtntxt()->isNotEmpty()): ?>
		<!-- case modals -->

	<?php 
	$x = 0;
	foreach($data->caselist()->toStructure() as $case): 
		$x += 1;
	?>
		<div id="case-modal-<?php echo $x ?>" class="uk-modal">
		    <div class="uk-modal-dialog">
		        <button class="uk-modal-close modal-close-btn">
		        	<span class="modal-close-triangle">
		        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
		        	</span>
		        </button>
		        <h1 class="modal-title">
		        	<span class="titlebox"><?php echo h($case->casetitle(),false) ?></span>
		        </h1>

		        <div class="modal-text">

		<?php if($image = $data->image($case->caseimage())): ?>
		        	<p class="feature-img uk-margin-large-bottom uk-text-center">
		        		<img 
		        			width="400" height="250"  
		        			src="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
		        			srcset="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 800, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 1200, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
		        		>
		        	</p>
		<?php endif ?>

			        <?php echo $case->casetext()->kt() ?>

			<?php if($data->modalcontactbtntxt()->isNotEmpty()): ?>
					<p class="uk-text-center"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->modalcontactbtntxt(), false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
			<?php endif ?>
				</div>
		    </div>
		</div>

	<?php endforeach ?>
		<!-- end of case modals -->

<?php endif ?>
	</section>
	<!-- end of CASE STUDIES SECTION -->
