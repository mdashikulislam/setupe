<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb" style="margin-bottom: 30px;">
            <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
                <li class="breadcrumb-item d-flex align-items-center">
                    <a href="<?php base_url('dashboard')?>" class="text-muted">Home</a>
                </li>
                <li class="breadcrumb-item active text-dark">Chats</li>
            </ol>
        </nav>
        <div class="d-flex">
            <div class="flex-grow-1">
                <h1 class="h2 mb-3 d-inline-block">Chats</h1>
            </div>
            <div>
                <a href="http://127.0.0.1:8000/documents/new" class="btn btn-primary mb-3">New</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-body table-responsive">
                <div class="table-responsives">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Words</th>
                                <th>Created at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($chats)):?>
                        <?php foreach ($chats as $chat):?>
                            <tr>
                                <td>
                                    <div class="desc">
                                        <a href="<?php echo get_module_url('/view/'.$chat->id)?>" class="text-truncate" style=""><?= $chat->name ?></a>
                                        <p class="m-0"></p>
                                    </div>
                                </td>
                                <td><?= $chat->messages ?></td>
                                <td><?= number_format($chat->words, 0, __('.'), __(',')) ?></td>
                                <td><?= diffForHuman($chat->created_at) ?></td>
                                <td>
                                    <div class="dropdown" style="display: flex;justify-content: flex-end">
                                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i style="color: #a34df4;font-size: 24px" class='bx bx-dots-horizontal-rounded'></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID" style="">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-edit-alt mr-3'></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-bullseye mr-3'></i>View</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-trash mr-3'></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    .desc a{
        color: #a34df4!important;
    }
    .desc a:hover{
        text-decoration: underline!important;
    }
    .mr-3{
        margin-right: 1rem!important;
    }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('table',{
        "columnDefs": [
            { "width": "35%", "targets": 0 },
            { "width": "20%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "20%", "targets": 3 },
            { "width": "5%", "targets": 4 }
        ]
    });
</script>