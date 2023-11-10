<?php
$request = \Config\Services::request();
$top_sidebar = $request->top_sidebar;

?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="<?php _ec(base_url("dashboard")) ?>" class="app-brand-link">
            <!--            <img alt="Logo" src="-->
            <?php //_ec( get_option("website_logo_color", base_url("assets/img/logo-color.svg")) )?><!--" class="logo-big h-39">-->
            <img alt="Logo" src="<?php _ec(get_option("website_logo_mark", base_url("assets/img/logo.svg"))) ?>"
                 class="logo-small h-39">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>


    <ul class="menu-inner py-1">
        <?php foreach ($top_sidebar as $key => $menus): ?>
            <?php foreach ($menus as $key => $row): ?>
                <li class="menu-item">
                    <a href="<?php _e( base_url( $row['id'] ) )?>" class="menu-link">
                        <i style="<?php _e( ( $row['color'] )?"color: ".$row['color']:"" )?>" class="<?php _e( $row['icon'] )?> fs-20 menu-icon"></i>
                        <div class="text-truncate" data-i18n="<?php _e( $row['name'] )?>"><?php _e( $row['name'] )?></div>
                    </a>
                </li>
            <?php if( ! isset( $row['sub_menu'] ) ):?>
            <?php else:?>
                    <?php
                    $ids = [];
                    foreach ($row['sub_menu'] as $sub){
                        $ids[] = get_data($sub, 'id');
                    }
                    ?>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i style="<?php _e( ( $row['color'] )?"color: ".$row['color']:"" )?>" class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div class="text-truncate" data-i18n="<?php _e( $row['name'] )?>"><?php _e( $row['name'] )?></div>
                    </a>
                    <ul class="menu-sub">
                        <?php foreach ($row['sub_menu'] as $sub): ?>
                        <li class="menu-item ">
                            <a href="<?php _e( base_url( get_data($sub, 'id') ) )?>" class="menu-link">
                                <div class="text-truncate" data-i18n="<?php _e( get_data($sub, 'name') )?>"><?php _e( get_data($sub, 'name') )?></div>
                            </a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            <?php endif;?>
            <?php endforeach ?>
        <?php endforeach ?>


    </ul>


</aside>
