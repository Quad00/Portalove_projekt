<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];

$obrItem = $db->getObrazokSpecific($id);


if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {


	foreach ($obrItem as $obrItem) {
		?>
<form action="" method="post">
	<input type="text" id="fname" name="popis" placeholder="popis" value="<?php echo $obrItem["popis"]?>"><br>
	<input type="text" id="fname" name="url" placeholder="url" value="<?php echo $obrItem["url"]?>"><br>
	
	<input type="submit" value="Ulozit" name="submit">
</form>
	<?php 
}

if(isset($_POST['submit'])) {
$update = $db->updateObrazok($id, $_POST['popis'], $_POST['url']);
if($update) {
	echo "Ulozene!!";
	}else{
		echo "chyba";
	}

	}

}


?>
<a href="../admin/menu.php">Vratit sa<a>