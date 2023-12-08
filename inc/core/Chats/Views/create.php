<style>
    .card .card-header{
        align-items: center!important;
    }
    label{
        margin-bottom: .5rem;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">New Template</h5>
            <div class="card-body">
                <form action="<?php _ec( get_module_url("/create/store") )?>" method="post"
                      enctype="multipart/form-data">
                    <input required type="hidden" name="_token" value="8PXWp9boVGzFvddJryu6uAWXfd0iA9EoJncniIln">
                    <div class="form-group">
                        <label class="form-label" for="i-name">Name</label>
                        <input type="text" name="name" class="form-control" id="i-name" value="">
                        <small class="form-text text-muted">The name of the template.</small>
                    </div>

                    <div class="form-group">
                        <label for="i-icon" class="d-inline-flex align-items-center"><span style="margin-right: 10px" class="mr-2">Icon</span><span
                                    class="badge bg-secondary">Emoji</span></label>
                        <input type="text" name="icon" class="form-control" id="i-icon" value="😊">
                        <small class="form-text text-muted">The icon of the template.</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="i-description">Description</label>
                        <textarea required rows="3" data-auto-resize-textarea="true" name="description" id="i-description"
                                  class="form-control" placeholder="The description of my custom translator template"
                                  style="box-sizing: border-box; height: 86px;"></textarea>
                        <small class="form-text text-muted">The description of the template.</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="i-prompt">Prompt</label>
                        <textarea required rows="3" data-auto-resize-textarea="true" name="prompt" id="i-prompt"
                                  class="form-control" placeholder="Translate from [language] to [language] the following text:
[text]" style="box-sizing: border-box; height: 86px;"></textarea>
                        <small class="form-text text-muted">The prompt of the template.</small>
                    </div>

                    <button type="submit" name="submit" class="btn  mt-3 btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>