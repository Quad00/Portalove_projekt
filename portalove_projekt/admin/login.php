<?php
include_once "../conn.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $login = $db->login($_POST['username'], $_POST['password']);

    if($login) {
        $_SESSION['is_admin'] = true;
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}