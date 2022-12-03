<?php 
session_start();

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
?>
    <form action="login.php" method="post">
        Username: <br>
        <input type="text" name="username" placeholder="Username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
<?php
} else {?>
	<H1><a href="menu.php">Upraviť menu</a></H1>
	<H1><a href="kategorie.php">Kategorie obrazkov</A></H1>
	<H1><a href="obrazky.php">Obrazky</A></H1>
<?php 
}
?>
