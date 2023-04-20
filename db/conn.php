<?php 
    $host ='127..0.1';
    $db ='attendence_db';
    $user='root';
    $pass='';
    $charset='utf8mb4';

    $dsn="mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo= new PDO($dsn,$user,$pass);
        // echo '<h1 class="text-center text-success">Database Found</h1>';

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
        // echo '<h1 class="text-center text-danger">NO Database Found</h1>';

    }



?>