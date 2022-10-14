<?php

#Подключение к почтовому серверу
$smtp_conn = fsockopen('mail.cs.karelia.ru', 25, $errno, $errstr, 10);

echo (fgets($smtp_conn, 515));
$data = "";
fputs($smtp_conn, "EHLO mail.cs.karelia.\n");

echo (fgets($smtp_conn, 515)), "<br>";

while($str = fgets($smtp_conn,515))
    {
        $data = $str;
        echo "$data", "<br>";
        if(substr($str,3,1) == " ") { break; }
    }


fputs($smtp_conn, "mail from: koposov@cs.petrsu.ru\n");

echo (fgets($smtp_conn, 515)), "<br>";

fputs($smtp_conn, "rcpt to: koposov@cs.petrsu.ru\n");

echo (fgets($smtp_conn, 515)), "<br>";

fputs($smtp_conn, "DATA\n");

echo (fgets($smtp_conn, 515)), "<br>";

fputs($smtp_conn, ".\n");

echo (fgets($smtp_conn, 515)), "<br>";

fputs($smtp_conn, "QUIT\n");

echo (fgets($smtp_conn, 515)), "<br>";


?>
