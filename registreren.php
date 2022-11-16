<?php
include("registreren.html");
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
$wachtwoord = htmlspecialchars($_POST['password']);
$wachtwoordHash = password_hash($wachtwoord, PASSWORD_DEFAULT);

$sql = "SELECT * FROM klant WHERE email = ?";
$stmt = $verbinding ->prepare($sql);
$resultaat = $stmt -> fetch(PDO::FETCH_ASSOC);
if($resultaat){
    $melding = "Dit e-mailadres is a geregistreerd";    
}else{
    $sql ="INSERT INTO klant (ID, voornaam, achternaam, straat, postcode, woonplaats, email, wachtwoord, rol) values (null,?,?,?,?,?,?,?,?)";
    $stmt = $verbinding ->prepare($sql);
try{
    $stmt->execute(array(
        $voornaam,
        $achternaam,
        $straat,
        $postcode,
        $woonplaats,
        $email,
        $wachtwoordHash,
        0
    ));
    $melding ="Nieuw account aangemaakt.";

}   catch(PDOException $e){
    $melding="Kon geen account aanmaken." . $e->getMessage();


} 
echo"<div id='melding>".$melding."</div>";
}
}
?>