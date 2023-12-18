<?php

var_dump($_GET);



if (
    isset($_POST["user"]) && !empty($_POST["user"]) &&
    isset($_POST["message"]) && !empty($_POST["message"])
  
    ) {
       
    }else echo 'veullez remplir le formulaire';
  
  
    require_once('../database.connect.php');
  
    $request=$database->prepare("INSERT INTO utilisateur (pseudo)
    VALUES(:pseudo)");
  
     $request->execute([
         'pseudo' =>$_POST["user"],
     ]);

     $request=$database->prepare("INSERT INTO `message` (content)
     VALUES(:content)");
   
      $request->execute([
          'content'=>$_POST["text"]
      ]);
     
     
     header("Location: ../visuel/index.php");
?>