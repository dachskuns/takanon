<?php
	require '../class/information/Information.php';
	require '../class/super/Preparation.php';
	$info = new Information();
	$info->setSql('select');
	$info->setColumn('*');
	$info->setTable('member');
	$info->setConditions('1=1');
	$sql_molding = new SqlMolding();
	$sql_molding->sql_molding();
?>