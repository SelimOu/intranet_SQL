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
<img src="https://www.jcpvacances.com/wp-content/uploads/2020/10/la-plagne-slide-ete.jpg" alt="imageHeader" id ="imageHeader">
</div> 
</header>
<body class ="bodyForm">
    <?php if(isset($_POST['btnadd'])){ include '../Controlers/verifForm.php' ;}?>
    <section>
    <div id ="container">
        </div>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <div class ="containerForm">
                <div class ="contenuForm">
                    <div>
                        <div class ="elements">
                            <div>
                                <label for="Catégorie">Catégorie :</label>
                            </div>
                            <div>
                                <select name="selectCaté" id="selectCaté">
                                    <option value="1">Mer</option>
                                    <option value="2">Montagne</option>
                                    <option value="3">Campagne</option>
                                </select>
                            </div>
                        </div>
                        <div class ="elements">
                            <div>
                                <label for="lieu">Lieu :</label>
                            </div>
                            <div>
                                <input type="text" name="lieu" id="lieu">
                            </div>
                        </div>
                        <div class ="elements">
                            <div>
                                <label for="date_debut">Date debut:</label>
                            </div>
                            <div>
                                <input type="date" name="date_debut" id="date_debut">
                            </div>
                        </div>
                        <div class ="elements">
                            <div>
                                <label for="prix">Prix</label>
                            </div>
                            <div>
                                <input type="number" name="prix" id="prix">
                            </div>
                        </div>
                        <div class ="elements">
                            <div>
                                <label for="description">Description :</label>
                            </div>
                            <div>
                                <input type="text" name="description" id="description">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class ="contenuForm">
                    <div>
                        <div class="elements">
                            <div>
                                <label for="Formule">Formule :</label>
                            </div>
                            <div>
                                <select name="selectFormule" id="selectFormule">
                                    <option value="1">classique</option>
                                    <option value="2">2pour1</option>
                                </select>
                            </div>
                        </div>
                        <div class="elements">
                            <div>
                                <label for="Herbergement">Herbergement :</label>
                            </div>
                            <div>
                                <input type="text" name="hebergement" id="hebergement">
                            </div>
                        </div>
                        <div class ="elements">
                            <div>
                                <label for="date_fin">Date fin :</label>
                            </div>
                            <div>
                                <input type="date" name="date_fin" id="date_fin">
                            </div>
                        </div>
                        <div class="elements">
                            <div>
                                <label for="image">Image :</label>
                            </div>
                            <div>
                            <div>
                            <label for="fie"></label>
                            </div>
                            <div>
                            <input type="file" name="file">
                            </div>
                            </div>
                            <div>
                                ou
                                <label for="urlImage">Url de l'image :</label>
                            </div>
                            <div>
                                <input type="text" name="image" id="image">
                            </div>
                            
                        </div>
                                <Btn class ="BtnSuppContainer">
                                <input type="submit" value="Valider" id ="btnSupp" name ="btnadd">
                            </div>
                    </div>
                </div>
                <div id="erreurContainer" >
            <?php
            if(isset($_POST['btnadd'])){
            if(isset($erreur)){
            echo $erreur;}}?>
        </div>
            </div>

        </form>
        <div class ="BtnAnnContainer">
        <a href="dashboard.php"><input value="Annuler" id="btnAnnuler"></a>
        </div>

    </section>
</body>
<footer id ="footerDash">
</footer>
</html>