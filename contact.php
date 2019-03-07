<?php
if(isset($_POST['submit'])) {
  $name = sanitize_input($_POST['name']);
  $country = sanitize_input($_POST['country']);
  $mailFrom = sanitize_input($_POST['email']);
  $message = sanitize_input($_POST['query']);
  // TODO: Must add error handlers
  $mailTo = "info@yafii-enterprise.com";
  $headers = "From: ".$mailFrom;
  $text = "Name: ".$name."\nLocation: ".$country."\n\n".$message;
  mail($mailTo, "Yafii Enterprise Query", $text, $headers);
  header("Location: index.php");
}
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>