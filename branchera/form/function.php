<?php

#1) [ $base_url ]を、ディレクトリ構成に合わせて修正してください
$base_url = ("/branchera/form");

#2) 開発環境に合わせて、エラーハンドリングしてください
ini_set('display_errors', 0);

#3）開発環境に合わせて、サーバーのフルパスを取得してください
$inc_path = (dirname(__FILE__));

#-------- html関連 -------#

include ($inc_path."/functions/htmlMetas.php");
include ($inc_path."/functions/htmlLinks.php");
include ($inc_path."/functions/htmlBodyClass.php");

#--------- sso/flpAPI関連 -------#


?>