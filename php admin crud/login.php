<?php
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>please login to use admin mode</h3>
         <input type="text" placeholder="enter login" name="login" class="box">
         <input type="password" placeholder="enter password" name="password" class="box">
         <?php
            if(isset($_POST['login']) && isset($_POST['password'])){
                $login = $_POST['login'];
                $password = $_POST['password'];
                if($login == "admin" && $password == "admin"){
                    header('Location: admin_page.php');
                    exit;
                }
                else{
                    $message = 'Incorrect details';
                    echo '<span style="color: red;" class="message">' . $message . '</span>';
                }
            }


         ?>
         <input type="submit" class="btn btn-info" value="Login">
         
      </form>

   </div>

</div>


</body>
</html>