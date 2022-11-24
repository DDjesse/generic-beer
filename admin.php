<!DOCTYPE html>
<html class="background">
    <?php include("adnavbar.php");
     ?>
<link rel="stylesheet" href="webshop.css">
</br>
<h1>Particulier Bestellingen</h1>
<?php
$servername="localhost";
$username="root";
$password="";
$db="authentic beer";

$conn = new mysqli($servername,$username,$password,$db);
$query = "SELECT * FROM `particulier`";
$query2 = "SELECT * FROM `bzak`";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
echo '<div class="OutputClass" >'.
"<br>".
"<br>";

echo '<center>';

    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            
        
            echo
                 "Voornaam: " .$row["voornaam"].
                 " | Achternaam: " . $row["achternaam"].
                 " | E-mail: " . $row["email"].
                 " | Hoeveelheid: " . $row["hoeveelheid"].
                 " | Straatnaam: ". $row["straatnaam"].
                 " | Woonplaats: " . $row["woonplaats"].
                 " | Postcode: " . $row["postcode"].

                 "<br>".
                 "<br>";
            
        }
        echo'</div>';

    } 
    else {
        echo "0 results";
    }
    ?>
    <h1>Zakelijke Bestellingen</h1>
    <?php
    echo '<div class="OutputClass" >'.
"<br>".
"<br>";

echo '<center>';

    if ($result2->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result2->fetch_assoc())
        {
            
        
            echo
                 "Voornaam: " .$row["voornaam"].
                 " | Achternaam: " . $row["achternaam"].
                 " | E-mail: " . $row["email"].
                 " | Hoeveelheid: " . $row["hoeveelheid"].
                 " | Straatnaam: ". $row["straatnaam"].
                 " | Woonplaats: " . $row["woonplaats"].
                 " | Postcode: " . $row["postcode"].

                 "<br>".
                 "<br>";
            
        }
        echo'</div>';

    } 
    else {
        echo "0 results";
    }
    ?>
