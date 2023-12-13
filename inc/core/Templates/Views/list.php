<style>
    .ml-2 {
        margin-left: 0.5rem !important
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <div style="display: flex;justify-content: space-between;align-items: center">
                    <h1 class="card-title text-white"><i class="bx bx-rocket fs-40" style="color: #fff;margin-right: 10px;"></i>Templates</h1>
                    <a class="btn btn-warning btn-sm" href="<?php _ec( get_module_url("/create/new") )?>">Add New</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-5" id="template-filters">
    <div class="col-12">
        <div class="shadow-sm rounded bg-white">
            <div class="border-bottom px-3 py-3">
                <form enctype="multipart/form-data" autocomplete="off" id="form-templates-search"
                      onsubmit="event.preventDefault();" class="mr-1">
                    <input type="hidden" name="_token" value="GL568042zk6YQh214lZ3QVrtRSzM6b9DJB7hfV9t">
                    <div class="input-group input-group-lg">
                        <input type="text" name="search" class="form-control font-size-lg" autocapitalize="none"
                               spellcheck="false" id="i-search" placeholder="Search" autofocus="">
                    </div>

                    <div class="input-group-append border-left-0 d-none" id="clear-button-container">
                        <button type="button"
                                class="btn text-secondary bg-transparent input-group-text d-flex align-items-center"
                                id="b-clear">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4"
                                 viewBox="0 0 16 16">
                                <rect width="16" height="16" style="fill:none"></rect>
                                <path d="M9.41,8l5.3-5.29a1,1,0,1,0-1.42-1.42L8,6.59,2.71,1.29A1,1,0,0,0,1.29,2.71L6.59,8l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L8,9.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-around w-100">
                <a href="#"
                   class="text-truncate text-decoration-none text-primary d-flex align-items-center justify-content-lg-center font-weight-medium py-3 px-3 cursor-pointer w-100"
                   data-filter-category="" data-text-color-active="text-primary"
                   data-text-color-inactive="text-secondary" data-filter-category-active>
                    <span class="text-truncate">All</span>
                    <span class="flex-shrink-0 badge badge-primary ml-2"><?= array_sum(array_column($categories, 'total')) ?></span>
                </a>
                <div class="border-left-0 border-left-lg border-bottom border-bottom-lg-0"></div>
                <?php
                foreach ($categories as $category):
                    ?>
                    <a href="#"
                       class="text-truncate text-decoration-none text-secondary d-flex align-items-center justify-content-lg-center font-weight-medium py-3 px-3 cursor-pointer w-100"
                       data-filter-category="<?= $category->id ?>"
                       data-text-color-active="text-<?= categoryColor($category->id) ?>"
                       data-text-color-inactive="text-secondary">
                        <span class="text-truncate"><?= $category->name ?></span>

                        <span class="flex-shrink-0 badge badge-<?= categoryColor($category->id) ?> ml-2"><?= $category->total ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php
$db = \Config\Database::connect();
?>
<div class="row m-n2" id="templates">
    <?php if (!empty($categories)) : ?>
        <?php foreach ($categories as $category): ?>
            <div class="col-12 p-2 mt-3" data-category-label="<?= $category->id ?>">
                <div class="badge badge-<?= categoryColor($category->id) ?>"><?= $category->name ?></div>
            </div>
            <?php
            $templates = $db->table('templates')->where('category_id', $category->id)->get()->getResult();
            ?>
            <?php
            if (!empty($templates)):
                foreach ($templates as $template):
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 p-2" data-templatex="<?= $template->name ?>"
                         data-template-title="<?= $template->name ?>"
                         data-template-parent="<?= $category->name ?>" data-template-category="<?= $category->id ?>">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="row">
                                    <div class="col">
                                        <div class="avatar me-lg-4">
                                            <?php if (categoryColor($category->id) == 'info'): ?>
                                                <span class="avatar-initial rounded bg-label-primary">
                                            <i class="bx bx-laptop bx-sm"></i>
                                          </span>
                                            <?php else: ?>
                                                <span class="avatar-initial rounded bg-label-<?= categoryColor($category->id) ?>">
                                            <i class="bx bx-laptop bx-sm"></i>
                                          </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $slug = $template->id;
                                    if (!empty($template->slug)){
                                        $slug = $template->slug;
                                    }
                                ?>

                                <a href="<?= get_module_url('view/'.$slug) ?>"
                                   class="text-dark font-weight-bold stretched-link text-decoration-none text-truncate mt-3 mb-1"><?= $template->name ?></a>
                                <div class="text-muted"><?= $template->description ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
<script src="<?= base_url('inc/themes/backend/Stackmin/Assets/new/assets/js/function.js?t='.time()) ?>"></script>