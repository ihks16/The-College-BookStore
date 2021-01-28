<?php
 session_start();
 session_destroy();
echo '<script>alert("You have successfully Logged Out!")</script>';
 echo '<script>window.location="../signIn.html"</script>';
 
?>