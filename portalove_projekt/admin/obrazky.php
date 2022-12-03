<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];

$obrazky = $db->getObrazky();
$kategorie = $db->getKategorie();


if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {
	foreach ($obrazky as $obrazky) {
	echo "<img src='../images/gallery/$obrazky[url]' style='height:150px;'alt='image 1'>";
	echo $obrazky["url"];
	echo '<a  href="obrazky_uprav.php?id= '.$obrazky["id"].' ">Upraviť</a>';
	echo '<a  href="obrazky_vymaz.php?id= '.$obrazky["id"].' ">Vymazať</a><br>';
}
}
?>
<br>
<a href="../admin/index.php">Vratit sa</a>

<H3>Pridat polozku</H3>
<form action="" method="post">
<input type="text" id="fname" name="popis" placeholder="popis"><br>
<input type="text" id="fname" name="url" placeholder="url"><br>

<select name="kategorie" id="kategorie">
	<?php
	foreach($kategorie as $kategorie)
 	echo "<option value='$kategorie[id]'>$kategorie[nazov]</option>";
		?>
</select>
<input type="submit" value="Pridat" name="submit">
</form>

<?php 
if(isset($_POST['submit'])) {
$update = $db->addObrazok($_POST['popis'], $_POST['url'], $_POST['kategorie']);
if($update) {
	echo "Polozka pridana";
	}else{
		echo "chyba";
	}

	}

?>