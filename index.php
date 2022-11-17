<?php
session_start();


if(isset($_GET["page"])){
    $page = $_GET["page"];
} else {
    $page = 'inloggen';
}
if($page) {
    include("inloggen.php");
}
?>