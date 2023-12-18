<?php
include_once('../partials/header.php')
?>





<main class="container-md">
     <div class="carre d-flex align-item-center"></div>
  <div class="d-flex justify-content-center">
   
  <form action="../procces/traitement.php" method="post">
  <div class="mb-3 d-flex">
    
    <label for="">user</label>
    <input type="text" name="user" id="user">


    <label for="exampleInputEmail1" class="form-label">Message</label>
    <input type="text" class="bulle-messsage" name="text" id="message" aria-describedby="emailHelp">

  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</form>
</div>

</main>

<?php
include_once('../partials/footer.php')
?>