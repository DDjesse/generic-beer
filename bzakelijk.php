<?php
include("navbar.php");
include("bzakelijk.html");
include("DBconfig.php");

if(isset($_POST["submit"])){
$melding="";


$servername="localhost";
$username="root";
$password="";
$db="authentic beer";

$conn = new mysqli($servername,$username,$password,$db);

$query2 = "SELECT * FROM `log`";

$result2 =mysqli_query($conn, $query2);

if ($result2->num_rows > 0) 
{
    // OUTPUT DATA OF EACH ROW
    while($row = $result2->fetch_assoc())
    {
        
    $email = $row["email"];
  
        
    }
}else{
    echo"<h1>big problem </h1>";
   
}

    $query = "SELECT * FROM `klant` Where email = '$email'";
    $result = mysqli_query($conn, $query);
$hoeveelheid = filter_var($_POST['integer']);

  

while($row = $result->fetch_assoc())
{
     

$voornaam = $row["voornaam"];
$achternaam = $row["achternaam"];
$straat = $row["straat"];
$postcode = $row["postcode"];
$woonplaats = $row["woonplaats"];
$email = $row["email"];


    
}



$sql = "SELECT * FROM 'klant' WHERE ID = ?";
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