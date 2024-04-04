<?php 
include "DB.php";

class Voyage {
    protected $id_categorie;
    protected $id_formule;
    protected $lieux;
    protected $herbergements;
    protected $date_de_debut;
    protected $date_de_fin;
    protected $images;
    protected $tarif;
    protected $descriptions;
    protected $id_voyage;
    

    public function allVoyage(){

        $db = new DB();
        $db->connec();

        $allvoyage = $db->connection->query("SELECT * FROM voyage");
        $afficherAllvoyage =$allvoyage->fetchAll();

        return $afficherAllvoyage;

    }
    
    public function addVoyage($id_categorie,$id_formule,$lieux,$herbergements,$date_de_debut,$date_de_fin,$images,$tarif,$descriptions){
        $db = new DB();
        $db->connec();


$addVoyage = $db->connection->query("INSERT INTO voyage (id_categorie,id_formule,lieu,herbergement,date_de_debut,date_de_fin,image,prix,description) VALUES ('$id_categorie','$id_formule','$lieux','$herbergements','$date_de_debut','$date_de_fin','$images','$tarif','$descriptions') ");
// $addVoyage->execute();
    }

    public function removeVoyage($id_voyage){
        $db = new DB();
        $db->connec();

        $removeVoyage = $db->connection->prepare("DELETE FROM voyage where id_voyage = $id_voyage");
        $removeVoyage->execute();
    }

    public function editVoyage($id_categorie,$id_formule,$lieux,$herbergements,$date_de_debut,$date_de_fin,$images,$tarif,$descriptions,$id_voyage){
        $db = new DB();
        $db->connec();

        $editVoyage = $db->connection->query("UPDATE voyage SET id_categorie ='$id_categorie',id_formule='$id_formule',lieu='$lieux',herbergement='$herbergements',date_de_debut='$date_de_debut',date_de_fin='$date_de_fin',image='$images',prix='$tarif',description='$descriptions' WHERE id_voyage = $id_voyage");
        // $editVoyage->execute(array("'$id_categorie','$id_formule','$lieux','$herbergements','$date_de_debut','$date_de_fin','$images','$tarif','$descriptions'"));
    }

    public function GetVoyagesFromID($id_voyage){
        
        $db = new DB();
        $db->connec();

        $IDvoyage = $db->connection->query("SELECT * FROM voyage WHERE id_voyage = $id_voyage");
        $afficherIDvoyage =$IDvoyage->fetchAll();

        return $afficherIDvoyage;

    }

}
$voyage = new Voyage();
// $voyage->addVoyage();
// $voyage->removeVoyage();
// $voyage->editVoyage();




?>