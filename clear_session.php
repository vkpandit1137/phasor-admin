<?php
session_start();
require_once("function.php");
$response=logout();
if($response==0){
    header("Location: /dashboard-admin/logout.php");
}    


?>