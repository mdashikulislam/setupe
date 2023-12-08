<style>
    .border-width-2{

    }
    .border-dashed{
        border: dashed!important;
        border-color: green!important;
        border-width: 10px!important;
    }
    .left-0 {
        left: 0!important;
    }
    .bottom-0 {
        bottom: 0!important;
    }
    .right-0 {
        right: 0!important;
    }
    .top-0 {
        top: 0!important;
    }
    .z-0 {
        z-index: 0!important;
    }
    .position-absolute {
        position: absolute!important;
    }
    .opacity-20 {
        opacity: .2!important;
    }
    .rounded {
        border-radius: 0.25rem!important;
    }
    .border {
        border: 1px solid #ededed!important;
    }
    .position-relative {
        position: relative!important;
    }
    .pt-3, .py-3 {
        padding-top: 1rem!important;
    }
    .h-100 {
        height: 100%!important;
    }
    .position-relative {
        position: relative!important;
    }


</style>

<div class="d-flex">
    <h1 class="h2 mb-0 text-break">Article</h1>
</div>
<div class="row mx-n2">
    <div class="col-12 col-lg-5 px-2">
        <div class="card border-0 shadow-sm mt-3 " id="ai-form">
            <div class=" align-items-center">
                <div class="row">
                    <div class="col">
                        <h5 class="card-header"><?= $template->name ?></h5>
                    </div>
                </div>
            </div>
            <div class="card-body position-relative">
                <form action="<?= get_module_url('view/'.$view) ?>" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="template_id" value="<?= $template->id ?>">
                <div class="mb-3">
                    <label class="form-label" for="i-name">Name</label>
                    <input type="text" name="name" id="i-name" class="form-control" value="<?= $name ?>">
                    <small class="form-text text-muted">The name of the document.'</small>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="i-title">Title</label>
                    <input type="text" name="title" id="i-title" class="form-control" value="<?= $title ?>" placeholder="The best summer destinations">
                    <small class="form-text text-muted">'The title of the article.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="i-keywords">Keywords</label>
                    <input type="text" name="keywords" id="i-keywords" class="form-control" value="<?= $keywords ?>" placeholder="Ocean, beach, hotel">
                    <small class="form-text text-muted">The keywords to include.</small>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="i-subheadings">Subheadings</label>
                    <input type="text" name="subheadings" id="i-subheadings" class="form-control" value="<?= $subheadings ?>" placeholder="Florida, Los Angeles, San Francisco">
                    <small class="form-text text-muted">The subheadings of the article</small>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="i-length">Length</label>
                    <select name="length" id="i-length" class="form-select">
                        <?php
                            echo lengthDropdown($length);
                        ?>
                    </select>
                </div>
                <?php if(in_array($view,['subheadline', 'about-us', 'call-to-action', 'headline', 'mission-statement', 'newsletter', 'press-release', 'value-proposition', 'vision-statement', 'video-script', 'social-post', 'social-post-caption', 'welcome-email', 'feature-section', 'social-media-bio'])):?>
                <div class="mb-3">
                    <label class="form-label" for="i-tone">Tone</label>
                    <select name="tone" id="i-tone" class="form-select">
                        <?php echo toneDropdown($tone)?>
                    </select>
                    <small class="form-text text-muted">The tone of result.</small>
                </div>
                <?php endif;?>

                <div class="collapse <?= !empty($language) || !empty($creativity) || !empty($variations) ? 'show':'' ?>" id="collapse-form-advanced">
                    <?php if (isset($view) && !in_array($view,['freestyle', 'new'])):?>
                        <div class="mb-3">
                            <label class="form-label" for="i-language">Language</label>
                            <select name="language" id="i-language" class="form-select">
                                <?php echo languageDropdown($language)?>
                            </select>
                        </div>
                    <?php endif;?>
                    <div class="mb-3">
                        <label class="form-label" for="i-creativity">Creativity</label>
                        <select name="creativity" id="i-creativity" class="form-select">
                            <?php echo creativitiesDropdown($creativity)?>
                        </select>
                        <small class="form-text text-muted">The creative level of result.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="i-variations">Variations</label>
                        <select name="variations" id="i-variations" class="form-select">
                            <?php echo variationsDropdown($variations)?>
                        </select>
                        <small class="form-text text-muted">The number of variations of results.</small>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col ">
                        <button type="submit" name="submit" class="btn btn-primary position-relative" data-button-loader>
                            <div class="position-absolute top-0 right-0 bottom-0 left-0 d-flex align-items-center justify-content-center">
                                <span class="d-none spinner-border spinner-border-sm width-4 height-4" role="status"></span>
                            </div>
                            <span class="spinner-text">Generate</span>&#8203;
                        </button>
                    </div>
                    <div class="col-auto mt-2">
                        <a href="" class="btn btn-outline-secondary d-none ">Reset</a>
                        <button class="btn btn-outline-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-form-advanced" aria-expanded="false" aria-controls="collapse-form-advanced">
                            Advanced
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7 px-2">
        <?php if (isset($documents)):?>
            <div class="mt-3" id="ai-results">
                <?php foreach ($documents as $document) :?>
                    <?php include 'result.php'?>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
        <?php
            $class = 'd-flex';
            if (isset($documents)){
                $class = 'd-none';
            }
        ?>
        <div class="position-relative pt-3 h-100  <?= $class ?>" id="ai-placeholder-results">
            <div class="position-relative h-100 align-items-center justify-content-center d-flex w-100">
                <div class="text-muted font-weight-medium z-1" id="ai-placeholder-text-start">
                    <div class="width-6 height-6 mt-5"></div>
                    <div class="my-3">Start by filling the form.</div>
                    <div class="width-6 height-6 mb-5"></div>
                </div>
                <div class="text-muted flex-column font-weight-medium z-1 align-items-center d-none " id="ai-placeholder-text-progress">
                    <div class="width-6 height-6 mt-5"></div>
                    <div class="my-3">Generating the content, please wait.</div>
                    <div class="spinner-border spinner-border-sm width-6 height-6 mb-5" role="status"></div>
                </div>
                <div class="position-absolute top-0 right-0 bottom-0 left-0 border rounded border-width-2 border-dashed opacity-20 z-0"></div>
            </div>
        </div>
    </div>
</div>
<script>
    // AI form
    if (document.querySelector('#ai-form')) {
        // If the show AI form button is present
        document.querySelector('#ai-form-show-button') && document.querySelector('#ai-form-show-button').addEventListener('click', function () {
            // Hide the show AI form button
            document.querySelector('#ai-form-show-button').classList.add('d-none');

            // Show the AI form
            document.querySelector('#ai-form') && document.querySelector('#ai-form').classList.remove('d-none');

            /*autoResizeTextarea();*/
        });

        document.querySelectorAll('[data-button-loader]').forEach(function (element) {
            element.addEventListener('click', function () {
                // If any results are present, hide them
                document.querySelector('#ai-results') && document.querySelector('#ai-results').classList.add('d-none');

                // Show the placeholder container
                document.querySelector('#ai-placeholder-results').classList.remove('d-none');
                document.querySelector('#ai-placeholder-results').classList.add('d-flex');

                // Hide the default placeholder text
                document.querySelector('#ai-placeholder-text-start').classList.add('d-none');

                // Show the in-progress placeholder text
                document.querySelector('#ai-placeholder-text-progress').classList.remove('d-none');
                document.querySelector('#ai-placeholder-text-progress').classList.add('d-flex');
            });
        });
    }
</script>