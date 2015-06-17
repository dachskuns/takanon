<?php
class Information {
	private $mcode;
	private $mname;
	private $adress;
	private $birth;
	private $pno;
	private $sex;
	private $telno;
	private $madress;
	private $pbalance;
	private $mimg;
	private $mflg;
	private $bcode;
	private $bdate;
	private $quantity;
	private $gcode;
	private $gname;
	private $gimg;
	private $price;
	private $stock;
	private $comment;
	private $sccode;
	private $scname;
	private $mccode;
	private $mcname;
	private $lccode;
	private $lcname;
	private $sdate;
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
	public function getMname() {
		return $this->mname;
	}
	public function getAdress() {
		return $this->adress;
	}
	public function getBirth() {
		return $this->birth;
	}
	public function getPno() {
		return $this->pno;
	}
	public function getSex() {
		return $this->sex;
	}
	public function getTelno() {
		return $this->telno;
	}
	public function getMadress() {
		return $this->madress;
	}
	public function getPbalance() {
		return $this->madress;
	}
	public function getMimg() {
		return $this->mimg;
	}
	public function getMflg() {
		return $this->mflg;
	}
	public function getBcode() {
		return $this->bcode;
	}
	public function getBdate() {
		return $this->bdate;
	}
	public function getQuantity() {
		return $this->quantity;
	}
	public function getGcode() {
		return $this->gcode;
	}
	public function getGname() {
		return $this->gname;
	}
	public function getGimg() {
		return $this->gimg;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getStock() {
		return $this->stock;
	}
	public function getComment() {
		return $this->comment;
	}
	public function getSccode() {
		return $this->sccode;
	}
	public function getScname() {
		return $this->scname;
	}
	public function getMccode() {
		return $this->mccode;
	}
	public function getMcname() {
		return $this->mcname;
	}
	public function getLccode() {
		return $this->lccode;
	}
	public function getLcname() {
		return $this->lcname;
	}
	public function getSdate() {
		return $this->sdate;
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
	public function setMname($mname) {
		$this->mname = $mname;
	}
	public function setAdress($adress) {
		$this->adress = $adress;
	}
	public function setBirth($birth) {
		$this->birth = $birth;
	}
	public function setPno($pno) {
		$this->pno = $pno;
	}
	public function setSex($sex) {
		$this->sex = $sex;
	}
	public function setTelno($telno) {
		$this->telno = $telno;
	}
	public function setMadress($madress) {
		$this->madress = $madress;
	}
	public function setPbalance($pbalance) {
		$this->pbalance = $pbalance;
	}
	public function setMimg($mimg) {
		$this->mimg = $mimg;
	}
	public function setMflg($mflg) {
		$this->mflg = $mflg;
	}
	public function setBcode($bcode) {
		$this->bcode = $bcode;
	}
	public function setBdate($bdate) {
		$this->bdate = $bdate;
	}
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}
	public function setGcode($gcode) {
		$this->gcode = $gcode;
	}
	public function setGname($gname) {
		$this->gname = $gname;
	}
	public function setGimg($gimg) {
		$this->gimg = $gimg;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
	public function setStock($stock) {
		$this->stock = $stock;
	}
	public function setComment($comment) {
		$this->comment = $comment;
	}
	public function setSccode($sccode) {
		$this->sccode = $sccode;
	}
	public function setScname($scname) {
		$this->scname = $scname;
	}
	public function setMccode($mccode) {
		$this->mccode = $mccode;
	}
	public function setMcname($mcname) {
		$this->mcname = $mcname;
	}
	public function setLccode($lccode) {
		$this->lccode = $lccode;
	}
	public function setLcname($lcname) {
		$this->lcname = $lcname;
	}
	public function setSdate($sdate) {
		$this->sdate = $sdate;
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