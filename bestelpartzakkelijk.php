<?php
include("navbar.php");
include("bestelpartzakkelijk.html");
include("DBconfig.php");
if(isset($_POST["submit"])){
$melding="";
$BedrijfNaam= htmlspecialchars($_POST['Naam']);
$klant = $Naam . ;
$locatie = htmlspecialchars($_POST['locatie']);
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
    $sql ="INSERT INTO particulier (ID, Naam, locatie, email,  hoeveelheid) values (null,?,?,?,?,?,?,?)";
    $stmt = $verbinding ->prepare($sql);
try{
    $stmt->execute(array(
        $BedrijfNaam,
        $klant,
        $locatie,
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