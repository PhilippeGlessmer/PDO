<?php
ob_start();
?>
    <form method="post" action="<?php URL;?>/livres/av" enctype="multipart/form-data">
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="form-group">
            <label for="nbPages">Nombre de page:</label>
            <input type="text" class="form-control" name="nbPages">
        </div>
        <div class="form-group">
            <label for="images">Image:</label>
            <input type="file" class="form-control" name="images">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
<?php
$content = ob_get_clean();
$titre = "Ajout d'un Livre";
require "template.php";
?>