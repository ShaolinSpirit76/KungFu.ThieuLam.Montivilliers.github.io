<?php
include 'view/templates/head.php';
include 'controller/regex.php';
include 'controller/login.php';
include 'view/pages/home.php';

// Variables dynamiques pour le footer à partir de index.php
$AssoInfos = 'view/mentions/AssoInfos.php';
$legalInfos = 'view/mentions/legalInfos.php';
$CGU = 'view/mentions/CGU.php';
$RGPD = 'view/mentions/RGPD.php';

include 'view/templates/footer.php';
?>


