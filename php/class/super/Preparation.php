<?php
require 'Information.php';
class DBOpen {
	public function Db_Open($db_name) {
		$info = new Information ();
		$info->setLink ( mysql_connect ( '127.0.0.1', 'root', 'root' ) );
		if (! $info->getLink ()) {
			die ( '接続失敗です。' . mysql_error () );
		}

		$info->setDb_selected ( $db_name, $info->getLink () );
		if ($info->getDb_selected ()) {
			die ( 'データベース選択失敗です。' . mysql_error () );
		}
		return $info;
	}
}
class SqlMolding extends DBOpen {
	public function sql_molding() {
		$info = parent::Db_Open ( 'takanon' );
		$sql = $info->getSql ();
		if ($sql === 'select') {
			$column = ' ' . $info->getColumn ();
			$table = ' ' . $info->getTable ();
			$conditions = ' ' . $info->getConditions ();
			$info->setSql ( $sql . $column . ' from' . $table . " where" . $conditions );
		}
	}
}
?>