<?php 
include_once "../conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];



if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == false) {
header('Location: index.php');

} else {

$vymaz = $db->deleteKategoria($id);

if($vymaz){
	echo "Polozka bola vymazana";
}else{
	echo "CHYBA!!!";
}

}


?>
<a href="../admin/menu.php">Vratit sa<a>