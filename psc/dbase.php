<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="psc_project";
    

try{
    $bdd=new PDO("mysql:host=localhost;dbname=psc_project",'root','');
} catch(Exception $e) {
    exit("Unable to connect to database.myiii mysql_error()");
}


?>