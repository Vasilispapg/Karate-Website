<?php
   session_name('user');
   session_start();
   session_unset();

   // destroy the session
   session_destroy();
   // echo 'You have cleaned session';
   header("location:..\index.php");
?>