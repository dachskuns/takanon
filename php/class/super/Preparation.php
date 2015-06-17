<?php
include (dirname ( __FILE__ )) . '/../information/Information.php';
class DBOpen {
	public function Db_Open($db_name) {
		$info = new Information ();
		$info->setLink ( new mysqli ( 'localhost:3306', 'root', 'root', $db_name ) );
		if (! $info->getLink ()) {
			die ( '接続に失敗しました。' );
		}
		$info->getLink ()->set_charset ( 'utf8' );
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
			$info->setResult ( $info->getLink ()->query ( $info->getSql () ) );
			if (! $info->getResult ()) {
				die ( 'クエリーが失敗しました。' );
			}
			while ( $row = mysqli_fetch_assoc ( $info->getResult () ) ) {
				echo $row ['mname'];
			}
		}
	}
}
?>