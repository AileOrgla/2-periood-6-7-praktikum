<?php require("validation.php"); ?>

<!DOCTYPE HTML>
<html>
   <head>
     <title>Praktikum5</title>
    <meta charset="UTF-8">
    <style>
        .form-error {color: red;}
        .form-notice {color: green;}
    </style>
    </head>
   <body>
      <pre><?php print_r($_POST); ?></pre>
         <form action="index.php" method="post">
            <div class="formfield"> 
               <?php 
                  if ($isSubmitted){
                     echo $usernameMessage;
                  }
               ?>
               <span>Kasutajanimi: </span><input type="text" name="username">
            </div>

            <div class="formfield"> 
               <?php 
                  if ($isSubmitted){
                     echo $ageMessage;
                  }
               ?>
               <span>Vanus: </span><input type="number" name="age">
            </div>

            <div class="formfield"> 
               <?php 
                  if ($isSubmitted){
                     echo $sportsMessage;
                  }
               ?>
               <label for="sports">Sport: </label><input id="sports" type="text" name="sports">
            </div>

            <div class="formfield"> 
               <?php 
                  if ($isSubmitted){
                     echo $emailMessage;
                  }
               ?>
               <label for="email">e-mail: </label><input id="email" type="text" name="email">
            </div>

            <div class="formfield">
               <input type="submit" name="submit" value="Saada">
            </div>
         </form>
   </body>

</html>