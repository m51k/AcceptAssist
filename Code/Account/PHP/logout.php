<?php
      session_start();
      session_destroy();
      header("Location: /Code/Login_and_Register_Pages/Login.php");
?>