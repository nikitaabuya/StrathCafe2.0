<?php
session_start();
session_unset();
session_destroy();
// Redirect to the login page:
//header('Location:./../home/index.html');
header( "refresh:2; url=./../home/home.php" );

echo 'Logout successful'
?>