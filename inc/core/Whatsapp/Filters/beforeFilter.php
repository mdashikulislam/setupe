<?php
$db = db_connect();
$db->query('REPAIR TABLE `sp_whatsapp_schedules`;');