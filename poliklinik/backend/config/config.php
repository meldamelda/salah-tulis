<?php
require_once('Database.php');

$db = new Database();

define('BASEURL',$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']));
?>