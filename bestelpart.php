<?php
include("navbar.php");
include("bestelpart.html");
include("DBconfig.php");
if(isset($_POST["submit"])){
$melding="";
$voornaam= htmlspecialchars($_POST['voornaam']);
$achternaam= htmlspecialchars($_POST['achternaam']);
$klant = $voornaam . " " .$achternaam;
$straat = htmlspecialchars($_POST['straat']);
$postcode = htmlspecialchars($_POST['postcode']);
$woonplaats = htmlspecialchars($_POST['woonplaats']);
$email = htmlspecialchars($_POST['email']);


$hoeveelheid = filter_var($_POST['integer']);

$sql = "SELECT * FROM 'klant' WHERE ID = ?";
$stmt = $verbinding ->prepare($sql);
$resultaat = $stmt -> fetch(PDO::FETCH_ASSOC);



if($hoeveelheid>24){
    $melding="Onjuiste aantal biertjes";
    echo"<div id='melding'>".$melding."</div>";   
}
else{
if($resultaat){
    $melding = "Unknown error"; 
    
}else{
    $sql ="INSERT INTO particulier (ID, voornaam, achternaam, straatnaam, postcode, woonplaats, email,  hoeveelheid) values (null,?,?,?,?,?,?,?)";
    $stmt = $verbinding ->prepare($sql);
try{
    $stmt->execute(array(
        $voornaam,
        $achternaam,
        $straat,
        $postcode,
        $woonplaats,
        $email,
        $hoeveelheid
    ));
    $melding ="Bestelling geplaats. Uw ontvang een mailtje binnen enkelen minuten";

}   catch(PDOException $e){
    $melding="Kon geen bestelling maken." . $e->getMessage();


} 
echo"<div id='melding'>".$melding."</div>";
}
}
}

?>