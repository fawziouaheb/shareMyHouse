<?php
 
$bdd= mysqli_connect("localhost","root","","upjv");
if ($bdd->connect_error) {
    echo 'Erreur de connexion (' . $bdd->connect_errno . ') ' . $bdd->connect_error;
}
?>