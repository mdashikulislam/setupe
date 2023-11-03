<div class="card mb-4">
    <div class="card-header">
        <div class="card-title"><?php _e( $config['name'] )?></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <label for="upindian_one_time_status" class="form-label"><?php _e('Enable Upi Indian Payment')?></label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="upindian_one_time_status" <?php _e( get_option("upindian_one_time_status", 0)==1?"checked='true'":"" )?> id="upindian_one_time_status_enable" value="1">
                            <label class="form-check-label" for="upindian_one_time_status_enable"><?php _e('Enable')?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="upindian_one_time_status" <?php _e( get_option("upindian_one_time_status", 0)==0?"checked='true'":"" )?> id="upindian_one_time_status_disable" value="0">
                            <label class="form-check-label" for="upindian_one_time_status_disable"><?php _e('Disable')?></label>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="mb-4">
            <label for="upindian_publishable_key" class="form-label"><?php _e('Instance ID')?></label>
            <input type="text" class="form-control form-control-solid" id="upindian_publishable_key" name="upindian_publishable_key" value="<?php _ec( get_option("upindian_publishable_key", "") )?>">
        </div>
        <div class="mb-4">
            <label for="upindian_secret_key" class="form-label"><?php _e('Access Token')?></label>
            <input type="text" class="form-control form-control-solid" id="upindian_secret_key" name="upindian_secret_key" value="<?php _ec( get_option("upindian_secret_key", "") )?>">
        </div>
          <div class="mb-4">
            <label for="upindian_reciver_upi" class="form-label"><?php _e('Your bank Upi Id ')?></label>
            <input type="text" class="form-control form-control-solid" id="upindian_reciver_upi" name="upindian_reciver_upi" value="<?php _ec( get_option("upindian_reciver_upi", "") )?>">
        </div>

        <div class="alert alert-primary">
            <span class="fw-6"><?php _e("Get Upi Api Key:")?></span> 
            <a href="<?php _ec( "https://ocmws.com" )?>" target="_blank"><?php _ec( "https://ocmws.com" ) ?></a> 
            <br/>
             
        </div>
    </div>
</div>