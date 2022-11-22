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

$result = mysqli_query($conn, $query);
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
                 "Voornaam:" .$row["voornaam"].
                 " | Achternaam: " . $row["achternaam"].
                 " | E-mail: " . $row["email"].
                 " | Hoeveelheid: " . $row["hoeveelheid"].
                 " | Straatnaam: ". $row["straatnaam"].
                 " | Woonplaats: " . $row["woonplaats"].
                 " | Postcode: " . $row["postcode"].

                 "<br>".
                 "<br>";
            
        }
        echo'</div>'.
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>".
        "<br>";
    } 
    else {
        echo "0 results";
    }
    ?>