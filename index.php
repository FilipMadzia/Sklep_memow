<?php
    include("config.php");
    session_start();

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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- pasek nawigacji -->
    <?php
        if(isset($_SESSION['login']))
        {
            include("navbar_loged.html");
        }
        else
        {
            include("navbar.html");
        }
    ?>
</body>
</html>