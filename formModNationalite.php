<?php include "header.php";
?>

<div class="container mt-5 pt-5">
    <h2 class="mt-3 text-center">Ajouter une nationalité</h2>
<form action="valideAjtNationalite.php" method="post" class="col-md-6 offset-md-3 border border-primary p-3 round">
<div class="form-group">
    <label for='libelle'>Libellé</label>
    <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle'>
</div>
<div class="class row">
    <div class="class col"><a href=listeNationalite.php class="btn btn-warning btn-block">Revenir à la liste</a></div>
    <div class="class col"><button type='submit' class='btn btn-success btn-block'>Ajouter</div>
</div>
</form>
</div>


<?php include "footer.php" ?>
