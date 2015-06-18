<?php
include_once (dirname ( __FILE__ )) . '/../information/Information.php';
class Select extends SqlMolding {
	public function select() {
		$info = parent::sql_molding ();
		$info->setResult ( $stmt->execute ( fetch () ) );
	}
}
?>