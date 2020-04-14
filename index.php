<?php ob_start() ?>

    Contenu de la pag daccueil
<?php
$content = ob_get_clean();
$titre = "Bibliothèque MGA";
require "template.php";
?>