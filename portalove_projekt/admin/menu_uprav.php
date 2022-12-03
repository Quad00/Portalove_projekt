<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];

$menuItem = $db->getMenuSpecific($id);


if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {




	foreach ($menuItem as $menuItem) {
		?>
<form action="" method="post">
	<input type="text" id="fname" name="nazov" placeholder="nazov" value="<?php echo $menuItem["nazov"]?>"><br>
	<input type="text" id="fname" name="subor" placeholder="subor" value="<?php echo $menuItem["subor"]?>"><br>
	<input type="submit" value="Ulozit" name="submit">
</form>
	<?php 
}

if(isset($_POST['submit'])) {
$update = $db->updateMenu($menuItem["id"], $_POST['nazov'], $_POST['subor']);
if($update) {
	echo "Ulozene!!";
	}else{
		echo "chyba";
	}

	}

}


?>
<a href="../admin/menu.php">Vratit sa<a>