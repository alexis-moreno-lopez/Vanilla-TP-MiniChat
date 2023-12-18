<?php


try{
    $dsn = 'mysql:host=localhost;dbname=tpmini_chat';
    
    $username = 'root';
    
    $password = '';
    
    $database = new PDO($dsn, $username, $password);
    }
    catch (Exception $message){
        echo "ya un problème <br>" . $message;
    }