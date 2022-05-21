<?php

 session_start();
 session_unset();
 session_destroy();

 echo "<script> alert('logged out successfully');window.location.href='home.php'</script>";