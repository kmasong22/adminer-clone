<?php 

if($_SERVER['SERVER_PORT']=="5000"){
   require "./adminer.php";
}else{
    header("HTTP/1.1 403 Forbidden" );
    exit;
}