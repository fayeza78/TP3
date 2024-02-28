<?php include "header.php";
include "connexioPdo.php";
$libelle=$_POST["libelle"]//je recupere le libelle

$req=$monPdo->prepare("insert into  nationalite(libelle) values(:libelle)");
$req->bindPanam(":libelle", $libelle);
$req->execute();

echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="class col mt-3"'>
    </div>
</div>
if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
  La nationalité a bien été ajoutée
</div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
  La nationalité n\'a pas bien été ajoutée
</div>';
}
?>
</div>
</div>
<a href="listeNationalite.php" class="btn btn-primary">Revenir à la liste des nationalités</a>
</div>
<main role="main">
<div class="container mt-5 pt-5">

<?php include "footer.php" ?>
