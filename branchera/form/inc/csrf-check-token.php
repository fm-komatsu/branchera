<?php
// CSRF対策：SESSION経由とPOST経由のトークンが一致しなかったらindexへリダイレクト
session_start();
if (!isset($_POST["token"]) || $_POST["token"] !== $_SESSION["token"]) {
  $_SESSION = array();
  header('Location: ./index.php');
  exit();
}
?>
