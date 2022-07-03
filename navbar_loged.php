<div class="nav" id="navbar">
    <ul>
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="memes.php">Twoje memy</a></li>
        <li><a href="settings.php">Ustawienia</a></li>
        <li id="logout">
            <?php
            echo "<a href='logout.php'>Wyloguj się z konta: ".$_SESSION["nickname"]."</a>";
            ?>
        </li>
    </ul>
</div>