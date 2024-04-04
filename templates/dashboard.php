<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<header id ="headerDash">
   <div class ="headerContainer">
<img src="../Assets/images/JCP-Vacances_RVB_600x151.jpg" alt="logo" id="logo"> 
<img src="../Assets/images/logoutulisateur.jpg" alt="logoUtulisateur" id ="logoUtulisateur">
</div> 
<div> 
<img src="https://www.jcpvacances.com/wp-content/uploads/2020/10/parentis-en-born-slide.jpg" alt="imageHeader" id ="imageHeader">
</div> 
</header>

<body id ="bodyDashboard">
    
    <div id ="container">
    <a href="../Controlers/logOut.php"><button id ="btnLogout">Se deconnecter</button></a>

    <h1>Mes Voyages</h1>
    <div>
        <a href="form.php"><button id ="btnAdd">AJOUTER</button></a>
        
    </div>
    </div>

<div> <?php
include "../Classes/voyage.php";
$voyage = new Voyage();
$voya = $voyage->allVoyage();
// var_dump($voya);
// $pages = ($_GET['page']);

// for ($i=0; $i < 2 ; $i++) {
    
    
    // if($pages = 1 && $i<2){
        // include "templateAllvoyage.php";
        
    // }

    // else if($pages = 2 && $i>1 && $i<4) {
    //    echo 5;
    //    include "templateAllvoyage.php";

        
        // header('Location:test.php');
        
    // }

    


foreach($voya as $voyages){
    include "templateAllvoyage.php";}
    
// }

// }
?>
</div>

</body>
<footer id ="footerDash">
<!-- <a href="dashboard.php?page=">page2</a> -->
</footer>
</html>