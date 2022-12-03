<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];

$kat = $db->getKategorie();



if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {
	foreach ($kat as $kat) {
	echo $kat["nazov"];
	echo '<a  href="kategorie_uprav.php?id= '.$kat["id"].' ">Upraviť</a>';
	echo '<a  href="kategorie_vymaz.php?id= '.$kat["id"].' ">Vymazať</a><br>';
}
}
?>
<br>
<a href="../admin/index.php">Vratit sa</a>

<H3>Pridat polozku</H3>
<form action="" method="post">
<input type="text" id="fname" name="nazov" placeholder="nazov"><br>
<input type="text" id="fname" name="kat_obrazok" placeholder="kat_obrazok"><br>
<input type="submit" value="Pridat" name="submit">
</form>

<?php 
if(isset($_POST['submit'])) {
$update = $db->addKategorie($_POST['nazov'], $_POST['kat_obrazok']);
if($update) {
	echo "Polozka pridana";
	}else{
		echo "chyba";
	}

	}

?>