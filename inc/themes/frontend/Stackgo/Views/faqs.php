<section id="faqs-2" class="gr--whitesmoke pb-30 inner-page-hero faqs-section division">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">

                <!-- INNER PAGE TITLE -->
                <div class="inner-page-title">
                    <h2 class="s-52 w-700"><?php _e("Frequently Asked Questions")?></h2>
                    <p class="p-lg"><?php _e("Getting more information about our platform that will help you get all benefits from us. These all questions are asked for the first time")?></p>
                </div>
                <!-- QUESTIONS ACCORDION -->
                <div class="accordion-wrapper">
                    <ul class="accordion">
                        <?php if (!empty($faqs)): ?>
                            <?php foreach ($faqs as $key => $value): ?>
                            <li class="accordion-item">
                                <!-- CATEGORY HEADER -->
                                <div class="accordion-thumb">
                                    <h4 class="s-28 w-700"><?php _ec($value->title)?></h4>
                                </div>
                                <!-- CATEGORY ANSWERS -->
                                <div class="accordion-panel" style="display: none;">
                                    <!-- QUESTION #1 -->
                                    <div class="accordion-panel-item mb-35">
                                        <!-- Answer -->
                                        <div class="faqs-2-answer color--grey">
                                            <!-- Text -->
                                            <p>
                                                <?php _ec($value->content)?>
                                            </p>
                                        </div>

                                    </div>	<!-- END QUESTION #1 -->

                                </div>	<!-- END CATEGORY ANSWERS -->
                            </li>
                            <?php endforeach;?>
                        <?php endif ?>
                    </ul>
                </div>	<!-- END QUESTIONS ACCORDION -->

            </div>
        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</section>

