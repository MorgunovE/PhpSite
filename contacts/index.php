<?php
//4
require_once '../core/cfg.php';

//pr ( $dbpass );
//6
$page = new CController;
$arParams = [
];

include('../view/header.php');
$result = $page -> SetPage ( 'contacts', $arParams );
//pr ( $result );
include('../view/footer.php');
