<?php 
  if (!$ssoFlag == 1) {
    header("Location: {$login_url}");
    exit;
  };
?>