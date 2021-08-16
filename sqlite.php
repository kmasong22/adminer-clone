<?php 

// ./adminer-4-sqlite3.php
if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){
   $_GET['sqlite'] = '';

   function adminer_object() {

      require "./fc-sqlite-connection-without-credentials.php";
      require "./plugin.php";
     
      $plugins = array(new FCSqliteConnectionWithoutCredentials());
       
      return new AdminerPlugin($plugins);

   }

   require "./adminer.php";
}else{
   require "./adminer.php";
}