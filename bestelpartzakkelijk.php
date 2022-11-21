<?php
  $bedrijfnaam=$_POST['bedrijfnaamornaam'];
  $telef=$_POST['telef'];
  $email=$_POST['email'];
  $bedrag=$_POST['bedrag'];
  
  $subject= "U heeft een bestelling geplaatst";
  $body = "Geachte $bedrijfnaam, \r\nU bestelling is compleet:\r\n\r\n Het totale bedrag is $bedrag.
  \r\nDe bestelling wordt binnen 5 dagen bezorgd. \r\n\r\;
  
  if(mail($email, $subject, $body)){
      echo "<script>alert('Het is gelukt om een bestelling te plaatsen!')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=bestelpagina.php">
      <?php
  }else{
      echo "<script>alert('Sorry, bestellling is niet gelukt')</script>";
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=bestelpagina.php">
      <?php
  }
?>