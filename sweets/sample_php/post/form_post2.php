<?php
//前のページからname="name（ここが目印）"
//ヒント　name="mail"も送られている
//データが飛んできているので受け取ります
$name=$_POST["name"];
$mail=$_POST["mail"];
$tel=$_POST["tel"];

echo $name."<br>";
echo $mail."<br>";
echo $tel."<br>";
?>