
		<!-- about staff modals -->
<?php 
	$x = 0;
	foreach($data->stafflist()->toStructure() as $staff): 
		$x += 1;
?>
		<div id="staff-modal-<?php echo $x ?>" class="uk-modal">
		    <div class="uk-modal-dialog">
			        <button class="uk-modal-close modal-close-btn">
			        	<span class="modal-close-triangle">
			        		<span class="uk-icon-close uk-icon-medium modal-close-icon"></span>
			        	</span>
			        </button>
			        <h1 class="modal-title"><span class="titlebox"><?php echo h($staff->staffname(),false) ?></span></h1>

		<?php if($image = $data->image($staff->staffimage())): ?>
			        <p class="feature-img uk-margin-large-bottom uk-text-center">
		        		<img 
		        			width="400" height="250"  
		        			src="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
		        			srcset="<?php echo thumb($image, array('width' => 400, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 800, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 1200, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
		        		>
		        	</p>
		<?php endif ?>
		
			        <div class="modal-text">
				        
				        <?php echo $staff->stafftext()->kt() ?>

	<?php if($data->modalcontactbtntxt()->isNotEmpty()): ?>
						<p class="uk-text-center"><a href="#contact" class="action-btn uk-modal-close" data-uk-smooth-scroll><?php echo h($data->modalcontactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
	<?php endif ?>
					</div>
		    </div>
		</div>
<?php endforeach ?>
		
		<!-- end of about staff modals -->
