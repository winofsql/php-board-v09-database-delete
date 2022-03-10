<?php 
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );
session_cache_limiter('nocache');
session_start();

header( "Content-Type: application/json; charset=utf-8" );

require_once("model.php");

// *************************************
// DB �ڑ�
// *************************************
$dbh = connectDb();

$id = (int)$_POST['id'];

$dbh->query("update board set dflg = 'D' where row_no = {$id}");

echo <<<JSON
{ 
    "id": {$id}
}
JSON;

?>
