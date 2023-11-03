<style>
    #plan_extended_modules > div > div:first-of-type {
        display: none;
    }
</style>
<div class="mb-5">
    <label class="form-label text-primary text-uppercase"><?php _e("Whatsapp Extensions") ?></label>
    <div class="mb-3">
        <?php if (find_modules("whatsapp_link_generator")) : ?>
            <label for="whatsapp_link_generator" class="form-label">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="permissions[whatsapp_link_generator]" id="whatsapp_link_generator" value="1" <?php _e(plan_permission('checkbox', "whatsapp_link_generator") == 1 ? "checked" : "") ?>>
                    <label class="form-check-label" for="whatsapp_link_generator"><?php _e("Link Generator") ?></label>
                </div>
            </label>
        <?php endif ?>
    </div>
</div>