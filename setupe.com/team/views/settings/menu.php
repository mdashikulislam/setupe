<div class="item widget-item search-item <?php _e( segment(3)==$path?'active':'' )?>">
	<a href="<?php _e( get_module_url('index/'.$path) )?>" class="actionItem <?php _e( segment(3)==$path?'active':'' )?>" data-result="html" data-content="data-settings" data-history="<?php _e( get_module_url('index/'.$path) )?>">
		<span class="widget-section">
			<span class="widget-icon"><span class="fas fa-users"></span></span>
			<span class="widget-desc"><?php _e('Team manager')?></span>
		</span>
	</a>
</div>