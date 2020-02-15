<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<?php
	$link=mysqli_connect('localhost', 'test', '', 'compare');
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
	}
	$query="SELECT name FROM cpu ORDER BY id";
	$json='[';
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $name);
	while(mysqli_stmt_fetch($stmt)){
		$json.='"'.$name.'"'.', ';
	}
	$json = chop($json, ', ');
	$json.=']';
	echo $json;
	mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($link);
?>
