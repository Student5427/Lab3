<?php
session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel = "stylesheet" href = "style.css">
<title>Авторизация</title>
<?php
if (isset($_POST['username']) and isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "username" and $password == "qwerty")
    {
        $_SESSION['username'] = $username;
        #header('Location: remote_text.php');
    } else {
        $fmsg = "Данные введены неверно";
    }
}
?>
    <div class="container">
        <form class="form-signin" method = "POST"> 
            <h2>Авторизация</h2>
            <?php if(isset($fmsg)) { ?> <div class = "alert alert-danger" role = "alert"> <?php echo $fmsg; ?> </div> <?php } ?>
            <input type = "text" name = "username" placeholder = "Username" required class = "form-control">
            <input type = "text" name = "password" placeholder = "Password" required class = "form-control">
            <button class="btn btn-lg btn-primary btn-block" type = "submit">Войти</button>
            <?php
            if (isset($_SESSION['username']))
            {
                echo "<a href = 'logout.php' class = 'btn btn-lg btn-primary'> Выйти </a>";
                echo "<a href = 'remote_text.php' class = 'btn btn-lg btn-primary'> remote_text.php </a>";
            }
            ?>
        </form>
    </div>
</html>