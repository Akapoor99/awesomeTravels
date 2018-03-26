<?php
session_start();
require_once dirname(dirname(__FILE__)).'/awesomeTravels-php-backend/awesomeTravels/php/MemberRegistry.php';
$username = $_POST["username"];
$password = $_POST["password"];
$mRS = file_get_contents(dirname(dirname(__FILE__)).'/awesomeTravels-hp-backend/awesomeTravels/php/MemberRegistryStore');
$memberRegistry = unserialize($mRS);
if($memberRegistry->loginMembers($username, $password)){
  $_SESSION["user"] = $memberRegistry->searchMembers($username);
  header('Location: index.html');
  exit;
}
else{
  echo "error: incorrect username or password";
}

?>
