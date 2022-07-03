<?php
    include("config.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title.' - login'?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>    
    <?php
        if(isset($_SESSION['login']))
        {
            header("Location: index.php");
        }
        include("navbar.html")
    ?>

    <div class="login_panel">
        <p class="header"><b>Logowanie</b></p>

        <?php
        if(isset($_SESSION["error_message"]))
        {
            echo '<p id="error">'.$_SESSION["error_message"].'</p>';
            unset($_SESSION["error_message"]);
        }  
        ?>
        <form action="login_handler.php" method="post">
            <fieldset>
                <div class="form-floating">
                    <input class="form-control" type="text" name="login" maxlength="32" id="login" placeholder="Login" required>
                    <label for="login">Login: </label>
                </div>
                <div class="form-floating">
                    <input class="form-control" type="password" name="password" maxlength="32" id="password" placeholder="Hasło" required>
                    <label for="password">Hasło: </label>
                </div>

                <button class="btn btn-primary" type="submit">Zaloguj się</button>
            </fieldset>            
        </form>

        <p id="info">Nie masz jeszcze konta?<a href="register.php"> Zarejestruj się</a></p>
    </div>
</body>
</html>