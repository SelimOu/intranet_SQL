<?php
include "../Classes/voyage.php";

$id_voyage =  ($_GET['id_voyage']);
$voyage->removeVoyage($id_voyage);

// var_dump($id_voyage) ;

header('Location:../templates/dashboard.php');



?>
