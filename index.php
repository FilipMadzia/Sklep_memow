<?php
    include("config.php");

    $conn = mysqli_connect($hostname, $user, $password, $database);
    if(!$conn)
    {
        header("Location: ".$error_page."?error=".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- pasek nawigacji -->
    <?php include("navbar.html");?>

    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
    <img src="img/no_database.jpg">
</body>
</html>