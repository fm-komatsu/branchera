<?php
// CSRF対策：トークン発行
session_start();
$token = bin2hex(openssl_random_pseudo_bytes(48));
$_SESSION["token"] = $token;
?>