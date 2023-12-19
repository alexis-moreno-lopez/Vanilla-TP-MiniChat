<?php





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

     $lastId = $database->lastInsertId();
     $date = date('d-m-y h:i:s');
     $ip=$_SERVER['REMOTE_ADDR'];

     $request=$database->prepare("INSERT INTO `message` (content ,created_at, ip_adress, user_id )
     VALUES(:content, :created_at, :ip_adress, :user_id)");
   
      $request->execute([
          'content'=>$_POST["message"],
          'created_at'=>$date,
          'ip_adress'=>$ip,
          'user_id'=>$lastId
          

      ]);
     
     
     header("Location: ../visuel/index.php");
?>