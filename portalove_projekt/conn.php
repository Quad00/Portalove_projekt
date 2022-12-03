<?php
include_once "DB.php";

use portalove\DB;
$db = new DB('localhost', 'portalove_projekt', 'root', '');

global $db;

session_start();