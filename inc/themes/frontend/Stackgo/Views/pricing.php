
<section id="pricing-1" class="gr--whitesmoke pb-40 inner-page-hero pricing-section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title mb-70">
                    <img class="w-450 mb-5" src="<?php _ec( get_frontend_url() )?>Assets/images/plan-icon.png" alt="logo">
                    <h2 class="s-52 w-700">Choose your plan</h2>
                    <p>We offer competitive rates and pricing plans to help you find one that fits the needs and budget of your business.</p>
                    <!-- TOGGLE BUTTON -->
                    <div class="toggle-btn ext-toggle-btn toggle-btn-md mt-30">
                        <span class="toggler-txt">Monthly</span>
                        <label class="switch-wrap">
                            <input type="checkbox" id="checbox" onclick="check()">
                            <span class="switcher bg--grey switcher--theme">
											<span class="show-annual"></span>
								   			<span class="show-monthly"></span>
							          </span>
                        </label>
                        <span class="toggler-txt">Yearly</span>
                    </div>
                </div>
            </div>
        </div>	<!-- END SECTION TITLE -->
        <!-- PRICING TABLES -->
        <div class="pricing-1-wrapper">
            <div class="row row-cols-1 row-cols-md-3">
                <?php if (!empty($plans)): ?>
                    <?php foreach ($plans as $plan): ?>
                        <?php
                            $permissions = json_decode($plan->permissions, 1);
                        ?>
                    <div class="col">
                    <div id="pt-1-1" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">
                        <!-- TABLE HEADER -->
                        <div class="pricing-table-header">
                            <?php if ($plan->featured): ?>
                                <div ><?php _e("Most popular")?> <span class="text-warning ms-1"><i class="fas fa-star"></i></span></div>
                            <?php else: ?>
                                <div > <span class="text-warning ms-1"></span></div>
                            <?php endif ?>
                            <h5 class="s-24 w-700"> <?php _e($plan->name)?></h5>
                            <div class="price">
                                <div class="price2" style="display: block;">
                                    <sup class="color--black"><?php _e( get_option("payment_symbol", "$") )?></sup>
                                    <span class="color--black"><?php _e($plan->price_monthly)?></span>
                                    <sup class="validity color--grey">&nbsp;/mo</sup>
                                </div>
                                <div class="price1" style="display: none;">
                                    <sup class="color--black"><?php _e( get_option("payment_symbol", "$") )?></sup>
                                    <span class="color--black"><?php _e($plan->price_annually)?></span>
                                    <sup class="validity color--grey">&nbsp;/yr</sup>
                                </div>
                            </div>
                            <p class="color--grey"><?php _e($plan->description)?></p>

                            <div class="pricing-type">
                                <?php if ($plan->plan_type == 1): ?>
                                    <div  class="color--theme"><?php _e( sprintf(__("Add up to %d social accounts"), $plan->number_accounts*$total_social) )?></div>
                                    <div class="desc"><?php _e( sprintf(__("%d accounts on each platform"), $plan->number_accounts) )?></div>
                                <?php else: ?>
                                    <div class="color--theme"><?php _e( sprintf(__("%d Social Accounts"), $plan->number_accounts) )?></div>
                                <?php endif ?>

                            </div>
                            <!-- Button -->

                        </div>	<!-- END TABLE HEADER -->


                        <style>
                            .pricing-features .list-icon{
                                display: inline-block;
                                margin-right: 10px;
                                margin-bottom: 10px;
                            }
                            .pricing-features .list-icon i{
                                /*padding: 4px;*/
                                /*width: 40px;*/
                                /*height: 40px;*/
                                font-size: 32px;
                                /*text-align: center;*/
                                /*border: 1px solid #eee;*/
                            }
                        </style>

                        <?php
                            $plan_items = request_service("plans");
                        ?>
                        <?php if ( !empty($plan_items) ): ?>
                        <?php foreach ($plan_items as $plan_item): ?>
                            <ul style="min-height: 143px" class="pricing-features color--black ico-10 ico--green mt-25">
                                <h4><?php _e( $plan_item["label"] )?></h4>
                                <?php if (!empty($plan_item['items'])): ?>
                                    <?php if ( $plan_item['permission'] ): ?>
                                        <li class="ml-lg-5 d-block">
                                            <?php foreach ($plan_item['items'] as $key => $value): ?>
                                                <?php if ( isset( $permissions[ $value['id'] ] ) ): ?>
                                                    <p class="list-icon">
                                                                <i class="<?php _ec( $value['icon'] )?>" style="color: <?php _ec( $value['color'] )?>;"></i>
                                                        </p>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </li>
                                    <?php else: ?>
                                        <?php foreach ($plan_item['items'] as $key => $value): ?>
                                            <li class="<?php _ec( isset( $permissions[ $value['id'] ] )? "":"disabled-option" )?>"><p><span class="flaticon-check"></span> <?php _e($value["name"])?></p></li>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                <?php endif ?>
                            </ul>
                        <?php endforeach ?>

                        <?php endif ?>
                        <a href="<?php _e( base_url("payment/index/{$plan->ids}/1" ) )?>" class="pt-btn btn r-04 btn--theme hover--theme by_monthly">Buy Now</a>
                        <a href="<?php _e( base_url("payment/index/{$plan->ids}/2" ) )?>" class="pt-btn btn r-04 btn--theme hover--theme by_annually" style="display: none">Buy Now</a>
                    </div>
                </div>
                <?php endforeach; endif;?>
            </div>
        </div>	<!-- PRICING TABLES -->
    </div>	   <!-- End container -->
</section>	<!-- END PRICING-1 -->

<section id="reviews-1" class="pt-100 shape--06 shape--gr-whitesmoke reviews-section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">
                    <!-- Title -->
                    <p class="s-21 color--grey"><?php _e("Our Happy Clients")?></p>
                    <h2 class="s-50 w-700"><?php _e("Our customers love us!")?></h2>
                    <!-- Text -->
                    <p class="s-21 color--grey"><?php _e("Our clients praise us for our great results, personable service and expert knowledge. </br>Here are what just a few of them had to say.")?></p>

                </div>
            </div>
        </div>


        <!-- TESTIMONIALS CONTENT -->
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme reviews-1-wrapper">
                    <!-- TESTIMONIAL #1 -->
                    <div class="review-1 bg--white-100 block-shadow r-08">
                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>
                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>
                                <?php _e("Easy scheduling, simple time saving and lots of features rich")?>
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="<?php _ec( get_frontend_url() )?>Assets/images/01.jpg" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700"><?php _e("- Ara A.")?>/h6>
                                        <p class="p-sm"><?php _e("CEO & Founder, General Motors")?></p>
                                </div>

                            </div>	<!-- End Author -->

                        </div>	<!-- End Text -->

                    </div>


                    <!-- TESTIMONIAL #2 -->
                    <div class="review-1 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>
                                <?php _e("Very well organized tool with stunning high quality design. Thank you so much!")?>
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="<?php _ec( get_frontend_url() )?>Assets/images/02.jpg" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700"><?php _e("- Nev W.D95.")?></h6>
                                    <p class="p-sm"><?php _e("Product Designer")?></p>
                                </div>

                            </div>	<!-- End Author -->

                        </div>	<!-- End Text -->

                    </div>	<!-- END TESTIMONIAL #2 -->


                    <!-- TESTIMONIAL #3 -->
                    <div class="review-1 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p>
                                <?php _e("This tool has made sharing our story and building our brand on social media so much easier.")?>
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="<?php _ec( get_frontend_url() )?>Assets/images/03.jpg" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700"><?php _e("- Scarlett D.")?></h6>
                                    <p class="p-sm"><?php _e("SEO leader")?></p>
                                </div>

                            </div>	<!-- End Author -->

                        </div>	<!-- End Text -->

                    </div>	<!-- END TESTIMONIAL #3 -->


                    <!-- TESTIMONIAL #4 -->
                    <div class="review-1 bg--white-100 block-shadow r-08">

                        <!-- Quote Icon -->
                        <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                        <!-- Text -->
                        <div class="review-txt">

                            <!-- Text -->
                            <p><?php _e("This platform is a wonderful tool. The service team is serious, professional and quickly.")?>
                            </p>

                            <!-- Author -->
                            <div class="author-data clearfix">

                                <!-- Avatar -->
                                <div class="review-avatar">
                                    <img src="<?php _ec( get_frontend_url() )?>Assets/images/04.jpg" alt="review-avatar">
                                </div>

                                <!-- Data -->
                                <div class="review-author">
                                    <h6 class="s-18 w-700"><?php _e("- Emily M.")?></h6>
                                    <p class="p-sm"><?php _e("Marketing Manager")?></p>
                                </div>

                            </div>	<!-- End Author -->

                        </div>	<!-- End Text -->

                    </div>	<!-- END TESTIMONIAL #4 -->

                </div>
            </div>
        </div>	<!-- END TESTIMONIALS CONTENT -->


    </div>	   <!-- End container -->
</section>	<!-- END TESTIMONIALS-1 -->


