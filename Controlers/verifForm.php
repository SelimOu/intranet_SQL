<?php
include "../Classes/voyage.php";




$categorie = $_POST['selectCaté'];

$formule = $_POST['selectFormule'];
$lieu = $_POST['lieu'];
$herbergement = $_POST['hebergement'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$image = $_POST['image'];
$prix = $_POST['prix'];
$description = $_POST['description'];


$dossierTempo = $_FILES['file']['tmp_name'];
$target = "exo_SQL/intranet_SQL/Assets/images/";
$dossierSite = $_FILES['file']['name'];


$erreur="";

if (empty($image)){
    $url = "http://".$_SERVER["HTTP_HOST"]."/".$target.$dossierSite;
    
    if(empty($categorie) ||empty($formule) || empty($lieu) || empty($herbergement) || empty($date_debut) ||empty($date_fin) ||empty($dossierSite) || empty($prix) || empty($description)){
        $erreur = "Remplissez tout les champs";
    }
    else{
        $url = "http://".$_SERVER["HTTP_HOST"]."/".$target.$dossierSite;
        $voyage->addVoyage($categorie,$formule,$lieu,$herbergement,$date_debut,$date_fin,$url,$prix,$description);
    
    
    header('Location:dashboard.php');
    }
}
else{
    
    if(empty($categorie) ||empty($formule) || empty($lieu) || empty($herbergement) || empty($date_debut) ||empty($date_fin) ||empty($image) || empty($prix) || empty($description)){
        $erreur = "Remplissez tout les champs1";
    }
    else{
    
    $voyage->addVoyage($categorie,$formule,$lieu,$herbergement,$date_debut,$date_fin,$image,$prix,$description);
    
    header('Location:dashboard.php');
    }
}







?>