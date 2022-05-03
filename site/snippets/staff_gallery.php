
				<!-- Staff Gallery -->
				<div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-margin-large-top" data-uk-grid="{gutter: 20}">
<?php 
	$x = 0;
	foreach($data->stafflist()->toStructure() as $staff): 
		$x += 1;
?>
				    <div class="staff-item">
				    	<a href="#staff-modal-<?php echo $x ?>" class="uk-panel staff-item-link" data-uk-modal>
    	<?php if($image = $data->image($staff->staffimage())): ?>
    				    	<img 
    				    		width="250" height="250"  
    		        			src="<?php echo thumb($image, array('width' => 250, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?>" 
    		        			srcset="<?php echo thumb($image, array('width' => 250, 'height' => 250, 'crop'=> true, 'upscale' => true))->url() ?> 1x, <?php echo thumb($image, array('width' => 500, 'height' => 500, 'crop'=> true, 'upscale' => true))->url() ?> 2x, <?php echo thumb($image, array('width' => 750, 'height' => 750, 'crop'=> true, 'upscale' => true))->url() ?> 3x" 
    		        		>
    	<?php endif ?>

	        				<p class="item-description">
					    		<span class="item-name"><?php echo h($staff->staffname(),false) ?></span> <br>
					    		<span class="item-role"><?php echo h($staff->staffrole(),false) ?></span>
				    		</p>
				    	</a>
				    </div>
<?php endforeach ?>

				</div>
<?php if($data->contactbtntxt()->isNotEmpty()): ?>
				<p class="uk-margin-large-bottom"><a href="#contact" class="action-btn" data-uk-smooth-scroll><?php echo h($data->contactbtntxt(),false) ?> <span class="uk-icon-caret-right uk-icon-small"></span></a></p>
<?php endif ?>
				<!-- end of Staff Gallery -->
