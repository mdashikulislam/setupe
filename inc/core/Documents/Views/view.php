<?php
    $db = \Config\Database::connect();
    $template = $db->table('templates')->where('id',$document->template_id)->get()->getRow();
?>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb" style="margin-bottom: 30px;">
            <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
                <li class="breadcrumb-item d-flex align-items-center">
                    <a href="<?php base_url('dashboard') ?>" class="text-muted">Home</a>
                </li>
                <li class="breadcrumb-item active text-dark">
                    <a href="<?php get_module_url('/') ?>" class="text-muted">Document</a>
                </li>
                <li class="breadcrumb-item active text-dark">Document</li>
            </ol>
        </nav>
        <div class="d-flex align-items-end mb-3">
            <h1 class="h2 mb-0 flex-grow-1 text-truncate"><?= $document->name ?></h1>

            <div class="d-flex align-items-center flex-grow-0">
                <div class="form-row flex-nowrap">
                    <div class="col">
                        <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="result" id="i-result-<?= $document->id ?>" class="d-none">
                        <?= cleanHTML(encodeQuill($document->result)) ?>
                    </textarea>
                            <button type="submit" class="btn d-flex align-items-center" data-bs-toggle="tooltip"
                                    title="Save">
                                <i class='bx bx-save'></i>
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <button class="btn d-flex align-items-center" data-bs-toggle="tooltip" title="Copy"
                                data-text-copy="Copy" data-text-copied="Copied" data-clipboard="true"
                                data-clipboard-target="#result-<?= $document->id ?>">
                            <i class='bx bx-copy'></i>
                        </button>
                    </div>
                    <div class="col">
                        <a href="#" class="btn text-secondary d-flex align-items-center" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card border-0 rounded-top shadow-sm overflow-hidden">
            <div class="card-header d-flex">
                <div class="py-1">
                    <div id="toolbar-<?= $document->id ?>" class="border-0 p-0">
                        <span class="ql-formats">
                            <button class="btn ql-bold"></button>
                            <button class="btn ql-italic"></button>
                            <button class="btn ql-underline"></button>
                            <button class="btn ql-strike"></button>
                        </span>
                        <span class="ql-formats">
                            <button class="btn ql-header" value="1"></button>
                            <button class="btn ql-header" value="2"></button>
                            <button class="btn ql-blockquote"></button>
                            <button class="btn ql-code-block"></button>
                        </span>
                        <span class="ql-formats d-none d-md-inline-block">
                            <button class="btn ql-list" value="ordered"></button>
                            <button class="btn ql-list" value="bullet"></button>
                            <button class="btn ql-indent" value="-1"></button>
                            <button class="btn ql-indent" value="+1"></button>
                        </span>
                        <span class="ql-formats d-none d-md-inline-block">
                            <button class="btn ql-direction" value="rtl"></button>
                            <button class="btn ql-align" value=""></button>
                            <button class="btn ql-align" value="center"></button>
                            <button class="btn ql-align" value="right"></button>
                            <button class="btn ql-align" value="justify"></button>
                        </span>
                        <span class="ql-formats d-none d-xl-inline-block">
                             <button class="btn ql-script" value="sub"></button>
                             <button class="btn ql-script" value="super"></button>
                        </span>
                        <span class="ql-formats d-none d-xl-inline-block">
                            <button class="btn ql-link"></button>
                            <button class="btn ql-clean"></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <div class="form-group m-0 p-1">
                    <div class="form-control height-auto text-body " style="border:0;">
                        <div id="result-<?= $document->id ?>" class="border-0 rounded-0"
                             data-text-editor="<?= $document->id ?>"
                             data-text-editor-readonly="true">
                            <?= encodeQuill($document->result) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-0" style="border-top: 1px solid #f0f0f0;">
                <div class="row">
                    <div class="col-12 col-lg text-truncate d-flex align-items-center justify-content-lg-center border-bottom border-bottom-lg-0 border-right-md">
                        <div class="card-body text-truncate my-n2 d-flex align-items-center justify-content-lg-center">
                    <span class="height-6 d-flex align-items-center " data-bs-toggle="tooltip"
                          title="Words">
                       <i class='bx bx-list-ul'></i>
                    </span>

                            <span class="text-truncate text-muted" data-bs-toggle="tooltip"
                                  title="The number of words generated by the AI. Some language systems will use the following symbol to word ratios.">
                        <?php echo number_format($document->words, 0, __('.'), __(','))?>
                    </span>
                        </div>
                    </div>
                    <div class="col-12 col-lg text-truncate d-flex align-items-center justify-content-lg-center border-bottom border-bottom-lg-0 border-right-md">
                        <div class="card-body text-truncate my-n2 d-flex align-items-center justify-content-lg-center">
                            <span class="height-6 d-flex align-items-center " data-bs-toggle="tooltip" title="Template">
                                <i class='bx bx-list-check'></i>
                            </span>
                            <span class="text-truncate text-muted" data-bs-toggle="tooltip" title="<?= $template->name ?>">
                                <a href="<?= getTemplateUrl($template); ?>" class="text-muted"><?= $template->name ?></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-lg text-truncate d-flex align-items-center justify-content-lg-center">
                        <div class="card-body text-truncate my-n2 d-flex align-items-center justify-content-lg-center">
                    <span class="height-6 d-flex align-items-center " data-bs-toggle="tooltip" title="Created at">
                        <i class='bx bx-calendar'></i>
                    </span>

                            <span class="text-truncate text-muted" data-bs-toggle="tooltip"
                                  title="<?php echo $document->created_at?>">
                        <?= diffForHuman($document->created_at) ?>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .light-style .ql-snow .ql-editor {
        padding: 0 !important;
    }
    .border-right-md {
        border-right: 1px solid #ededed!important;
    }
    .form-row{
        display: flex;
        flex-wrap: wrap;
        margin-left: -0.3125rem;
        margin-right: -0.3125rem;
    }
</style>
<!-- Quil Editor -->
<link rel="stylesheet"
      href="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/vendor/libs/quill/typography.css?t=' . time()) ?>">
<link rel="stylesheet"
      href="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/vendor/libs/quill/katex.css?t=' . time()) ?>">
<link rel="stylesheet"
      href="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/vendor/libs/quill/editor.css?t=' . time()) ?>">


<script src="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/vendor/libs/quill/katex.js?t=' . time()) ?>"></script>
<script src="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/vendor/libs/quill/quill.js?t=' . time()) ?>"></script>
<!-- Quil Editor -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
<script src="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/js/function.js?t=' . time()) ?>"></script>