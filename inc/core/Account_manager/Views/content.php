<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.33.0/tabler-icons.min.css">

<div class="container">
    <div class="row no-gutters px-2 py-5 m-auto">
        <div class="sub-header">
            <?php if( isset($config) ){?>
                <h1 class="d-flex fw-bold my-0 fs-20 mb-5"><i class="<?php _ec( $config['icon'] )?> pe-3" style="color: <?php _ec( $config['color'] )?>;"></i> <?php _e( $config['name'] )?></h1>
            <?php }?>
        </div>

        <?php if( !empty($block_accounts) ){?>

            <?php foreach ($block_accounts as $key => $value): ?>
                <?php _ec( $value['data']['content'] )?>
            <?php endforeach ?>
        <?php }?>
    </div>
    <style>
        .sub-sidebar{
            max-height: 100vh;
        }
        .sub-sidebar .sp-menu a.btn.btn-outline-dashed{
            color: var(--sp-btn-color);
            border: 1px dashed var(--sp-input-border-color);
            display: block!important;
        }
        .sub-sidebar .sp-menu a.btn.btn-outline-dashed:hover{
            border: 1px dashed #696cff!important;
        }
        .sub-sidebar .sp-menu div.btn.btn-outline-dashed{
            color: var(--sp-btn-color);
            border: 1px dashed var(--sp-input-border-color);
        }
        .sub-sidebar .sp-menu div.btn.btn-outline-dashed:hover{
            border: 1px dashed #696cff!important;
        }
        .card .card-header .card-title{
            font-size: 1.275rem!important;
        }
        .card .card-header{
            padding-bottom: 0!important;
        }
        .form-check.p-l-0{
            padding-left: 20px!important;
        }
        @media (min-width: 0) {
            .main-wrapper .col-custom{
                width: 100%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 1200px) {
            .main-wrapper .col-custom{
                width: 50%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 1600px) {
            .main-wrapper .col-custom{
                width: 33.33333333%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 2000px) {
            .main-wrapper .col-custom{
                width: 25%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 2250px) {
            .main-wrapper .container .col-custom{
                width: 20%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 0) {
            .main-wrapper .container .col-custom{
                width: 100%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 1200px) {
            .main-wrapper .container .col-custom{
                width: 50%;
                flex: 0 0 auto;
            }
        }

        @media (min-width: 1600px) {
            .main-wrapper .container .col-custom{
                width: 33.33333333%;
                flex: 0 0 auto;
            }
        }
    </style>
</div>    