<?php
session_start();

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
echo '<link rel = "stylesheet" href = "style.css">';

if (isset($_SESSION['username']))
{
    $str = file_get_contents('http://kappa.cs.petrsu.ru/~kulakov/courses/php/fortune.php');
    echo '<div class = "container">';
    echo '<div>';
    echo '<p>';
    echo $str;
    echo '</p>';
    echo '</div>';
} else {
    #header('Location: login.php');
    #exit();
    echo "<a href = 'login.php' class = 'btn btn-lg btn-primary'> Авторизация </a>";
}

?>
