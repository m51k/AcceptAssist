<?php
      session_start();
      session_destroy();
      header("Location: /Code/Account/Login.php");
?>