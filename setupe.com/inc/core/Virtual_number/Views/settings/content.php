<div class="card card-flush m-b-25">
    <div class="card-header">
        <div class="card-title flex-column">
            <h3 class="fw-bolder"><i class="<?php _ec( $config['icon'] )?>" style="color: <?php _ec( $config['color'] )?>;"></i> <?php _e('Add Keys For Virtual Number')?></h3>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="merc_tokenkeys" class="form-label"><?php _e('Access Token')?></label>
            <input type="text" class="form-control form-control-solid" id="" name="merc_tokenkeys" value="<?php _e( get_option("merc_tokenkeys", "") )?>" placeholder="Access Token">
        </div>
        <div class="mb-3">
            <label for="merc_intensekey" class="form-label"><?php _e('Intense Id')?></label>
            <input type="text" class="form-control form-control-solid" id="" name="merc_intensekey" value="<?php _e( get_option("merc_intensekey", "") )?>" placeholder="Intense Id ">
        </div>
        
    </div>
</div>
