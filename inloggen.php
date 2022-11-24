<!DOCTYPE html>
<html class="background">
    <?php include("navbar.php");
    include("DBconfig.php"); ?>
    
<link rel="stylesheet" href="webshop.css">
<h1>Log in als u bij ons geregistreerd bent. Ga naar de bestelling als je dat niet bent.</h1><h1> Wilt u zich registreren?</h1><h1> Neem contact met ons op.</h1>
<div class="content">
    <form name = "inloggen" method = "POST" enctype = "multipart/form-data" action=""> 
            <p id="page_titel">Inloggen</p>
            <input class="Aform" required type="email" name = "e-mail" placeholder="bij@voorbeeld.com"/>
            <input class="Aform" required type="password" name="wachtwoord" placeholder="wachtwoord"/>
    <div classc= "icon_container">
            <input type="submit" class="icon" id="submit" name ="submit" value="&rarr;"/>
</div>
    </form>
</div>
<?php
if(isset($_POST["submit"])){
    $melding = "";
    $email = htmlspecialchars($_POST["e-mail"]);
    
    $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);

    try{
        $sql = "SELECT * FROM klant WHERE email = ?";
        $stmt = $verbinding -> prepare($sql);
        $stmt -> execute(array($email));
        $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if($resultaat) {
            $wachtwoordInDatabase = $resultaat["wachtwoord"];
            $rol = $resultaat ["rol"];
        
            if(password_verify($wachtwoord,$wachtwoordInDatabase)){
$_SESSION["ID"] = session_id();
$_SESSION["USER_ID"] = $resultaat["ID"];
$_SESSION["USER_NAAM"] = $resultaat["voornaam"];
$_SESSION["E-MAIL"] = $resultaat["email"];
$_SESSION["STATUS"] = "ACTIEF";
$_SESSION["ROL"] = $rol;
 
 if($rol == 0 ){
    $sql = "INSERT INTO log (ID, email) values (null,?)";
    $stmt = $verbinding ->prepare($sql);
    try{
    $stmt->execute(array(
        $email));
    }
    catch(PDOException $e){
        echo"<p>";
        echo"unkown error";
        echo"<p>";

    }
    echo"<script>location.href='bzakelijk.php';
    </script>";}
 elseif($rol == 1){
    echo "<script>location.href='admin.php';
    </script>";
 } else{
    $melding .="Toegang geweigerd<br>";}
 }else{$melding .= "Probeer nogmaal in te loggen<br>";}

}else{$melding .="Probeer nogmaals in te loggen<br>";}

    }catch(PDOException $e){
        echo $e->getmessage();
    }
echo"<div id='melding'>$melding</div>";
}

        
    

?>
    </html>