<?php 


 $sql ="mysql:host=localhost;dbname=project";
 
 $dbusername = "root";

 $dbpassword = ""; 


 try{

    $PDO = new PDO($sql,$dbusername,$dbpassword);
    $PDO  -> setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
     
 }   
 catch(PDOException $e){
    echo "connection faild".$e ->getMessage();
 }
?>