<div class="container">
   
    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <div class="card mb-4 mb-xl-10">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0"><i class="<?php _e( $config['icon'] )?>" style="color: <?php _e($config['color'])?>"></i> <?php _e("Scan Upi Qr Any App")?></h3>
                        
                    </div>
                    
                </div>
                
                <div class="card-body">
                  <div class="py-2 check-wrap-all">
                        <div class="border b-r-10 p-20 mb-4">
                            <div class="fs-16 fw-6"><i class="fad fa-key"></i> <?php _e("Transction ID:")?> <span class="text-success"><?php _ec($orderId)?></span></div>
                            <div class="text-gray-600"><?php _e("Scan the QR Code on Any Upi App")?></div>
                        </div>

                      <div class="text-center wa-qr-code" data-instance-id="<?php _ec($orderId)?>">
                            <div class="wa-code"><img src="<?php _e("data:image/png;base64,$qr_code")?>"></div>
                        </div>
                    </div>
                    <div class="text-center">
 
                    <a href="<?php _e($upi_link)?>" class="btn btn-light btn-active-light-danger border-start">
    <i class="<?php _e( $config['icon'] )?>" style="color: <?php _e( $config['color'] )?>;" ></i> 
    <?php _ec("Pay By Any Upi Apps")?>
</a>
</div>
                  
                </div>
                <div class="card-body">
                <form  action="<?php _ec($success_url)?>" method="POST">
                    <div class="input-group sp-input-group">
                        <input type="text" class="form-control form-control-solid" name="upi_ref_id" value="" placeholder="<?php _e("Enter Upi Ref Id")?>" autocomplete="off">
                        <button type="submit" class="btn btn-dark"><?php _e("Submit")?></button>
                    </div>
                </form>
            </div>
            <a href="<?php _ec($cancel_url)?>" class="btn btn-light btn-active-light-danger border-start" title="<?php _e("Cancel")?>" data-toggle="tooltip" data-placement="top"><i class="fad fa-times text-danger"></i>Cancel Transction</a>
            </div>
        </div>
    </div>
</div>