<?php
include "./Classes/DB.php";
session_start();

$password = $_POST['password'];
$username = $_POST['username'];
$_SESSION['username'] = $username;


// echo $username;

$db = new DB();
$db->connec();
$erreur="";
// recuperation de l'user via le post
$response = $db->connection->query("SELECT * FROM `user` WHERE username = '$username'");
$resultat = $response ->fetchall();




// var_dump($resultat);

// recuperation de l'id Admin
$typeRole = $db->connection->query("SELECT id_role FROM `role` WHERE `name` LIKE 'admin' ");
$resultTypeRole = $typeRole->fetchAll();
// var_dump($resultTypeRole);
if(empty($username) && empty($password)){
    $erreur ="Veiilez remplir les champs vides";
}
    else if(!isset($resultat["username"])){
        $erreur ="Username non recconu";

}
foreach($resultat as $trier){
    if(!isset($trier["username"])){
        $erreur ="Username non recconu";
    }
    
    else if( $password == $trier["password"] && $trier["id_role"] == 1 ){
    header('Location:templates/dashboard.php');
    } 
    else if($password != $trier["password"] ){
        $erreur = "Mauvais mot de passe";
    }
    else if($trier["id_role"] == 2 && $password == $trier["password"]){
        $erreur = "Vous n'etes pas Admin";
    }
}











