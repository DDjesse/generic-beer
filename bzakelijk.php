<?php
include("navbar.php");
include("bzakelijk.html");
include("DBconfig.php");

if(isset($_POST["submit"])){
$melding="";
include("logger.php");
$email = $float;
$servername="localhost";
$username="root";
$password="";
$db="authentic beer";

$conn = new mysqli($servername,$username,$password,$db);
$query = "SELECT * FROM `klant1` Where email = $email";

$result = mysqli_query($conn, $query);


$hoeveelheid = filter_var($_POST['integer']);

while($loop ==1)
{
    $row = $result->fetch_assoc();

$voornaam = $row;
$achternaam = $row;
$straat = $row;
$postcode = $row;
$woonplaats = $row;
$email = $row;

    
}



$sql = "SELECT * FROM 'klant1' WHERE ID = ?";
$stmt = $verbinding ->prepare($sql);
$resultaat = $stmt -> fetch(PDO::FETCH_ASSOC);



if($hoeveelheid>1000){
    $melding="Onjuiste aantal biertjes";
    echo"<div id='melding'>".$melding."</div>";   
}
else{
if($resultaat){
    $melding = "Unknown error"; 
    
}else{
    $sql ="INSERT INTO bzak (ID, voornaam, achternaam, straatnaam, postcode, woonplaats, email,  hoeveelheid) values (null,?,?,?,?,?,?,?)";
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