<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'TIBEDEO';
$password = '20041201';
$bdd = 'TIBEDEO_blibliotheque';

try {
    //lignes pour se connecter a la bdd 
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //message d'erreur
    echo $e->getMessage();
    $monPdo = null;
}
?>