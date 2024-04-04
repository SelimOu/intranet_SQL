<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<header>
<img src="Assets/images/JCP-Vacances_RVB_600x151.jpg" alt="log" id="logoindex">
</header>

<body id ="bodyLogin">
    <?php if(isset($_POST['submit'])){
     include 'Controlers/verif.php';}?>
     
        <div class ="logInContainer">
        <form action="" method="POST">
        <h1>Login</h1>
            <div class ="contenuLogin">
                
        <input type="text" class="input" name ='username' id ='username' placeholder="Username">
        </div>
        <div class ="contenuLogin">
        <input type="password" class="input" name ="password" id ="password" placeholder="Password">
        </div>
        <div class ="contenuLogin">
        <input type="submit" name ="submit" value="Login" id ="submit">
        </div>
        
        <div id="erreurContainer" >
            <?php
            if(isset($_POST['submit'])){
            if(isset($erreur)){
            echo $erreur;}}?>
        </div>
        
    </form>
    </div>
    
    
</body>
<footer id ="footerLogin">
</footer>
</html>