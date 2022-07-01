<?php
include("config.php");
session_start();

if(isset($_POST['login']) && isset($_POST['password']))
{
    $u_login = $_POST['login'];
    $u_password = $_POST['password'];
}
else
{
    header("Location: index.php");
}

$conn = mysqli_connect($hostname, $user, $password, $database);

if(!$conn)
{
    header("Location: ".$sql_error_page."?error=".mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM users WHERE login = '$u_login'");
$row = mysqli_fetch_array($result);

if($row["login"] == $u_login && $u_password == $row["password"])
{
    $_SESSION["login"] = $row["login"];
    $_SESSION["nickname"] = $row["nickname"];
    header("Location: index.php");
}
else
{
    $_SESSION["error_message"] = "Nieprawidłowe hasło lub login";
    header("Location: login.php");
}
mysqli_close($conn);