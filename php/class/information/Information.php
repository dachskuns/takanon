<?php
class Information {
	private $mcode;
	private $result;
	private $result_flag;
	private $column;
	private $table;
	private $conditions;
	private $value;
	private $sql;
	private $link;
	private $db_selected;

	// ここからGetter
	public function getMcode() {
		return $this->mcode;
	}
	public function getResult() {
		return $this->result;
	}
	public function getResult_flag() {
		return $this->result_flag;
	}
	public function getColumn() {
		return $this->column;
	}
	public function getTable() {
		return $this->table;
	}
	public function getConditions() {
		return $this->conditions;
	}
	public function getValue() {
		return $this->value;
	}
	public function getSql() {
		return $this->sql;
	}
	public function getLink() {
		return $this->link;
	}
	public function getDb_selected() {
		return $this->db_selected;
	}

	// ここからSetter
	public function setMcode($mcode) {
		$this->mcode = $mcode;
	}
	public function setResult($result) {
		$this->result = $result;
	}
	public function setResult_flag($result_flag) {
		$this->result_flag = $result_flag;
	}
	public function setColumn($column) {
		$this->column = $column;
	}
	public function setTable($table) {
		$this->table = $table;
	}
	public function setConditions($conditions) {
		$this->conditions = $conditions;
	}
	public function setValue($value) {
		$this->value = $value;
	}
	public function setSql($sql) {
		$this->sql = $sql;
	}
	public function setLink($link) {
		$this->link = $link;
	}
	public function setDb_selected($db_selected) {
		$this->db_selected = $db_selected;
	}
}
?>