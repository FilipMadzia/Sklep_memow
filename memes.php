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
    <title><?php echo $title." - memy";?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    if(isset($_SESSION['login']))
    {
        include("navbar_loged.php");
    }
    else
    {
        header("Location: index.php");
    }
    ?>

    <!-- testy wyświetlania obrazków -->
    <div class="meme" id="test">
        <?php
        $id_user = $_SESSION["id_user"];
        $meme_path = "SELECT path FROM memes WHERE id_user = '$id_user'";

        $result = mysqli_fetch_array(mysqli_query($conn, $meme_path));
        $meme = $result["path"];

        echo "<img src='$meme'>"
        ?>
    </div>
</body>
</html>