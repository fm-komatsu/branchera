<?php 

$base_url = ("/branchera"); 
$inc_path = '../';

#--------- sso/flpAPI関連 -------#

require_once $inc_path . '/flp/flp_config.php';
if (!defined("IGNORE_SESSION_CHECK") || IGNORE_SESSION_CHECK === false) {
  require_once $inc_path . '/flp/flp_session_check_redirect.php';
}

#--------- リダイレクト -------#
  if(!isset($_SESSION['visitURL'])){
    $ReURL = "../http404";
  }else{
    $ReURL = $_SESSION['visitURL'];
  }
  header("Location: {$ReURL}");

?>
