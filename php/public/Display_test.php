<?php
session_start ();
require_once '../class/information/Information.php';
require '../class/super/Preparation.php';
require '../class/sub/Sub_SQL.php';

$info = new Information ();
$info->setSql ( 'select' );
$info->setColumn ( '*' );
$info->setTable ( 'member' );
$info->setConditions ( 'mname = ?' );
$info->setConditions_kind ( 'mname' );

$_SESSION ["class"] = $info;
$select = new Select ();
$info = $select->select ();
$stmt = $info->getStmt ();
while ( $row = $stmt->fetch () ) {
	echo $row ["mname"];
}

?>