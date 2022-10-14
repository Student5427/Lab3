<?php
setcookie('visits_counter', plus());

function plus()
{
    if (isset($_COOKIE['visits_counter'])) {
        $_COOKIE['visits_counter']++;
    } else {
        $_COOKIE['visits_counter'] = 1;
    }
    return $_COOKIE['visits_counter'];
}

?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset = "UTF-8">
    <title>Coockies-counter</title>
</head>
<body>
    <?php
    $N = $_COOKIE['visits_counter'];
    echo ($_COOKIE['visits_counter']== 1) ? "Добро пожаловать!" : "Вы посетили данную страницу $N раз.";
    ?>
</body>
</html>