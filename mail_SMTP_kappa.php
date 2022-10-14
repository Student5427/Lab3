<?php

#Подключение к почтовому серверу
$smtp_conn = fsockopen('mail.cs.karelia.ru', 25, $errno, $errstr, 10);

echo (fgets($smtp_conn, 515));

$com = '';

while(true)
{
    $com = fgets(STDIN, 515);

    fputs($smtp_conn, $com);

    $data="";
    if ($com == "DATA\r\n") 
    {
        echo(fgets($smtp_conn, 515));
        while (true)
        {
            $com = fgets(STDIN, 515);

            fputs($smtp_conn, $com);

            if ($com == ".\r\n")
            {
                break;
            }
        }
    } 
    while($str = fgets($smtp_conn,515))
    {
        $data .= $str;
        if(substr($str,3,1) == " ") { break; }
    }

    echo $data; 
}

?>
