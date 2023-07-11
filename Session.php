<?php
session_start();

$_SESSION["username"] = "Pagnavath";
$_SESSION["email"] = "pagnavathsok@gmail.com";

echo $_SESSION["username"];
echo "<br/><br/>";
echo $_SESSION["email"];
?>

