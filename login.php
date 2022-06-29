<?php
    include("config.php")
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title.' - login'?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include("navbar.html")?>

    <div id="login_form">
        <form action="login_handler.php" method="post">
            <input type="text" name="login" id="login_input">
        </form>
    </div>
</body>
</html>