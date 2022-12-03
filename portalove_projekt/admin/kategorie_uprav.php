<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];

$katItem = $db->getKatSpecific($id);


if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {




	foreach ($katItem as $katItem) {
		?>
<form action="" method="post">
	<input type="text" id="fname" name="nazov" placeholder="nazov" value="<?php echo $katItem["nazov"]?>"><br>
	<input type="text" id="fname" name="kat_obrazok" placeholder="URL na obrazok" value="<?php echo $katItem["kat_obrazok"]?>"><br>
	<input type="submit" value="Ulozit" name="submit">
</form>
	<?php 
}

if(isset($_POST['submit'])) {
$update = $db->updateKategorie($id, $_POST['nazov'], $_POST['kat_obrazok']);
if($update) {
	echo "Ulozene!!";
	}else{
		echo "chyba";
	}

	}

}


?>
<a href="../admin/menu.php">Vratit sa<a>