<?php echo' <div class = "voyageConatainer">'
.'<div>'
.'<img class = "images" src="'.$voyages['image'].'" alt=Image du voyage>'
.'</div>'
.'<div class ="contenuTemplate">'
.'<div>'
."Lieu : ". $voyages['lieu']
.'</div>'
.'<div>'
." Prix : ".$voyages['prix']."€"
.'</div>'
.'</div>'
.'<div class ="contenuTemplate">'
.'<div>'
." Description : "
.'</div>'
.'<div>'
.$voyages['description']
.'</div>'
.'</div>'
.'<div class ="contenuTemplate">'
.'<a href="../Controlers/suprrVoyage.php?id_voyage='.$voyages['id_voyage'].'"><button class ="buttonSupprimer" name = "suppBtn"id ="suppBtn" >Supprimer</button></a>
. <a href="editForm.php?id_voyage='.$voyages['id_voyage'].'">  <button class="buttonModidier" name ="editBtn" id ="editBtn">Modifier</button>  </a>'

.'</div>'."<br>"." 
</div>"?>