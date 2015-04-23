<?php
$oracle_host = 'localhost/XE';
$oracle_user = 'admin';
$oracle_pass = 'admin';


$conn = oci_connect($oracle_user, $oracle_pass, $oracle_host);
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


?>

