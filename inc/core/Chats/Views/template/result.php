<?php
    $db = \Config\Database::connect();
    $template = $db->table('templates')->where('id',$document->template_id)->get()->getRow();
?>
<div class="card border-0 rounded-top shadow-sm overflow-hidden">
    <div class="card-header align-items-center">
        <div class="row">
            <div class="col d-flex align-items-center">
                <div class="d-flex align-items-center font-weight-medium py-1">
                    <div class="d-flex align-items-center " data-tooltip="true" title="<?=$template->name?>">
                        
                        <?php if (empty($template->slug)):?>
                        <span class="width-4 height-4">
                                <span class="position-absolute width-4 height-4 d-flex align-items-center justify-content-center user-select-none">{{ $document->template->icon }}</span>
                            </span>
                        <?php else:?>

                        <?php endif;?>
                    </div>

                    <div class="d-flex align-items-center text-truncate">
                        <a href="" class="text-body text-truncate"><?= $document->name ?></a>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-row">
                    <div class="col">
                        <a href="" class="btn btn-sm d-flex align-items-center" data-tooltip="true" title="View">
                            <i class='bx bxs-bullseye'></i>
                        </a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-sm d-flex align-items-center" data-tooltip="true" title="Edit">
                            <i class='bx bx-edit-alt' ></i>
                        </a>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm d-flex align-items-center" data-tooltip-copy="true" title="Copy" data-text-copy="{{ __('Copy') }}" data-text-copied="{{ __('Copied') }}" data-clipboard="true" data-clipboard-target="#result-{{ $document->id }}">
                            <i class='bx bx-copy' ></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-3">
        <div class="form-group mb-0">
            <div id="toolbar-{{ $document->id }}" class="border-0 p-0"></div>
            
        </div>
    </div>
    <div class="card-footer text-muted small">
        <div class="row">
            <div class="col-auto">
                <span data-tooltip="true" ><?=number_format($document->words, 0, __('.'), __(','))?> words</span>
            </div>
        </div>
    </div>
</div>
