<?php include "header.php";
include "connexioPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>

<main role="main">
<div class="container mt-5 pt-5">

    <div class="row">
        <div class="col-9"><h2>Liste des Nationalités</h2></div>
        <div class="col-3 mb-2"><a href="formAjtNationalite.php" class='btn btn-success'><i class="fa-duotone fa-plus"></i> Créer une nationalité</a></div>
        
    </div>
    <table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-8">Libellé</th>
        <th scope="col" class="col-md-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($lesNationalites as $nationalite){
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-2'>$nationalite->num</td>";
            echo "<td class='col-md-8'>$nationalite->libelle</td>";
            echo "<td class='col-md-2'>
            <a href='' class='btn btn-primary'><i class='fas fa-pen'></i></a>
            <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
            </td>";
            echo "</tr>";
        }
        ?>
        
    </tbody>
    </table>



</div>

</main>

<?php include "footer.php" ?>
