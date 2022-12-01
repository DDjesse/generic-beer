<?php
DEFINE("USER","deb85590_p21k1t5");
DEFINE("PASSWORD","deb85590_p21k1t5");
try{
    $verbinding = new
    PDO("mysql:host=localhost;dbname=deb85590_p21k1t5",USER,PASSWORD);
    $verbinding->setAttribute
    (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
    echo "Kon geen verbinding maken";
}

?>