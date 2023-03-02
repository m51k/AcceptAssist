<?php
      session_start();
      session_destroy();
      header("Location: /LRP/Login.php");
?>