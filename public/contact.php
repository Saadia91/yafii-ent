<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $location = $_POST['location'];
  $mailFrom = $_POST['email'];
  $message = $_POST['query'];

  // TODO: Must add error handlers

  $mailTo = "info@yafii-enterprise.com";
  $headers = "From: ".$mailFrom;
  $text = "Name: ".$name."\nLocation: ".$location."\n\n".$message;

  mail($mailTo, "Yafii Enterprise Query", $text, $headers);
  header("Location: index.html");
}

 ?>
