<?php 
  session_start();
  if(!isset($_SESSION['visitURL'])){
    $ReURL = "../http404";
  }else{
    $ReURL = $_SESSION['visitURL'];
  }
  $_SESSION = array(); 
  session_destroy();
  header("Location: {$ReURL}");
?>