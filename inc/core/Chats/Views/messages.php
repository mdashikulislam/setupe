<style>
    .height-8{
        height: 2rem!important;
    }
    .width-8{
        height: 2rem!important;
    }
    .bg-base-2 {
        background-color: #fafafa!important;
    }
    .bg-base-1 {
        background-color: #f5f5f5!important;
    }
</style>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb" style="margin-bottom: 30px;">
            <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
                <li class="breadcrumb-item d-flex align-items-center">
                    <a href="<?php base_url('dashboard')?>" class="text-muted">Home</a>
                </li>
                <li class="breadcrumb-item active text-dark">
                    <a href="<?php get_module_url('/')?>" class="text-muted">Chats</a>
                </li>
                <li class="breadcrumb-item active text-dark">Chat</li>
            </ol>
        </nav>
        <div class="d-flex">
            <div class="flex-grow-1">
            <h1 class="h2 mb-3 d-inline-block"><?= $chat->name ?></h1>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card border-0 rounded-top shadow-sm overflow-hidden d-flex flex-fill h-100 max-height-152">
            <div class="card-header">
                Chat
            </div>
            <form action="" method="POST" class="d-flex flex-fill flex-column position-relative flex-grow-1 overflow-auto" id="form-chat">
                <input name="chat_id" type="hidden" value="<?= $chat->id ?>">
                <div class="card-body flex-grow-1 overflow-auto" id="chat-container">
                    <div id="chat-messages">
                        <?php if (!empty($messages)): foreach ($messages as $message):?>
                            <div class="d-flex align-items-center justify-content-center text-muted small my-4">
                                <div class="width-1 height-1 bg-secondary rounded-circle opacity-25" data-bs-toggle="tooltip" title="<?= $message->created_at ?>"></div>
                            </div>
                            <div class="d-flex my-4">
                                <div class="flex-shrink-0">
                                    <img src="<?= gravatar($message->role == 'user' ? $user->email :'',64)?>" class="rounded-circle width-8 height-8 my-1 " data-bs-toggle="tooltip"  title="<?= $message->role == 'user' ? ucfirst($user->fullname):'Assistant' ?>">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="bg-base-2 px-3 rounded-lg d-flex">
                                        <div class="flex-grow-1 py-2 mb-n3">
                                            <?php
                                                echo markdown($message->result);
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; endif;?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>