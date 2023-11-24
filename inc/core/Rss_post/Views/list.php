<style>
    .actionItem :hover{
        border: none;
    }
</style>
<div class="container">
    <div class="card bg-primary text-white mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="card-title text-white"><i class="<?php _ec($config['icon']) ?> fs-40" style="color: #fff"></i> <?php _e($config['name']) ?></h1>
                </div>
                <div>
                    <div class="input-group input-group-sm sp-input-group border b-r-4">
                <span class="input-group-text border-0 fs-20 bg-gray-100 text-gray-800" id="sub-menu-search"><i
                            class="fad fa-search"></i></span>
                        <input type="text" class="ajax-pages-search ajax-filter form-control form-control-solid ps-15 border-0"
                               name="keyword" value="" placeholder="<?php _e("Search") ?>" autocomplete="off">
                        <a href="<?php _ec(get_module_url("popup_add_rss")) ?>"
                           class="btn btn-light btn-active-light-primary actionItem" data-popup="addRssModal"
                           title="<?php _e("Add new") ?>" data-toggle="tooltip" data-placement="top"><i
                                    class="fad fa-plus text-primary pe-0"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div
            class="ajax-pages"
            data-url="<?php _ec(get_module_url("ajax_list")) ?>"
            data-response=".ajax-result"
            data-per-page="<?php _ec(get_data($datatable, "per_page")) ?>"
            data-current-page="<?php _ec(get_data($datatable, "current_page")) ?>"
            data-total-items="<?php _ec(get_data($datatable, "total_items")) ?>"
    >

        <div class="ajax-result row mt-4"></div>

        <?php if (get_data($datatable, "total_items") != 0): ?>
            <nav class="m-t-50 ajax-pagination m-auto text-center mb-4"></nav>
        <?php endif ?>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        Core.ajax_pages();
    });
</script>