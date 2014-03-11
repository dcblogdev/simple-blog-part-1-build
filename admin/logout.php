<?php
//include config
require_once('../includes/config.php');

//log user out
$user->logout();
header('Location: index.php'); 

?>