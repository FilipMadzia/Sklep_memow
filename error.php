<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title.' - error';?></title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- TODO dodać lepszy wygląd strony -->
    <div class="error">
        <h1>Error - nie można połączyć z bazą danych</h1>
        <img src="img/no_database.jpg">
    </div>
</body>
</html>