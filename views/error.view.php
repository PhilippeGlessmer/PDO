<?php
ob_start();
echo $msg;
$content = ob_get_clean();
$titre = "Gestion Erreur";
require "template.php";
?>