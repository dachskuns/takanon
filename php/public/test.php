<!DOCTYPE html>
<html>
<head>
<title>テスト</title>
<script type="text/javascript">
	function member_search() {
		<?php
		session_start ();
		require_once '../class/information/Information.php';
		require '../class/super/Preparation.php';

		$info = new Information ();
		$info->setSql ( 'select' );
		$info->setColumn ( '*' );
		$info->setTable ( 'member' );
		$info->setConditions ( 'mname = ?' );
		$info->setConditions_kind ( 'mname' );

		$_SESSION ["class"] = $info;
		$select = new Select();
		$select->select ();
		?>
		location.href=".Display_test.php";
	}
</script>
</head>
<body>
	<form action="./Display_test.php" method="post">
		名前検索:<input type="text" size="20" name="mname"> <input type="button"
			value="検索" name="search" onClick="member_search()">
	</form>
</body>

</html>

