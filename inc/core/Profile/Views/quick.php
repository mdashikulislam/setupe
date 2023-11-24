<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Welcome  <?php _ec( get_user("fullname") )?>! 🎉</h5>
                    <p class="mb-2">
                        <span class="fw-medium">
                            Current Plan:
                            <?php if ($plan): ?>
                                <?php _ec($plan->name)?>
                            <?php else: ?>
                                <?php _e("No plan")?>
                            <?php endif ?>
                        </span>
                    </p>
                    <p class="mb-4">
                        <span class="fw-medium">
                            <?php
                            $expiration_date = get_user("expiration_date");
                            ?>
                            <?php if ($expiration_date > time()): ?>
                                <?php _ec( sprintf( __("Expire date: %s"), date_show( get_user("expiration_date") ) ) )?>
                            <?php else: ?>
                                <?php if ($expiration_date == 0): ?>
                                    <?php _e( sprintf( __("Expire date: %s"), __("Unlimited") ) )?>
                                <?php else: ?>
                                    <span class="text-warning"><?php _ec("Subscription has expired")?></span>
                                <?php endif ?>
                            <?php endif ?>

                        </span>
                    </p>
                    <a href="<?php _ec( base_url("profile/index/plan") )?>" class="btn btn-sm btn-label-primary">View Plan</a>
                </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="assets/img/illustrations/man-with-laptop-dark.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                </div>
            </div>
        </div>
    </div>
</div>

