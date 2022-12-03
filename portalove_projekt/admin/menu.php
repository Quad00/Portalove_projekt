<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];

$menuItems = $db->getMenu();



if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {
	foreach ($menuItems as $menuItems) {
	echo $menuItems["nazov"];
	echo '<a  href="menu_uprav.php?id= '.$menuItems["id"].' ">Upraviť</a>';
	echo '<a  href="menu_vymaz.php?id= '.$menuItems["id"].' ">Vymazať</a><br>';
}
}
?>
<br>
<a href="../admin/index.php">Vratit sa</a>

<H3>Pridat polozku</H3>
<form action="" method="post">
<input type="text" id="fname" name="nazov" placeholder="nazov"><br>
<input type="text" id="fname" name="subor" placeholder="subor"><br>
<input type="submit" value="Pridat" name="submit">
</form>

<?php 
if(isset($_POST['submit'])) {
$update = $db->addMenu($_POST['nazov'], $_POST['subor']);
if($update) {
	echo "Polozka pridana";
	}else{
		echo "chyba";
	}

	}

?>