<?php
    session_start();
      if (isset($_POST['email'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $_SESSION['username'] = $email;
        //$_SESSION["password"] = $password;
   }

   echo "you are successfully signIn ". $_SESSION['username'];

   

    echo  "<br>". $_SESSION['username'];
?>


