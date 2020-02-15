<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
	if(isset($_GET['but']) && !empty($_GET['but'])){
		$but=$_GET['but'];
		$link=mysqli_connect('localhost', 'test', '', 'compare');
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
		}
		$query="SELECT * FROM cpu WHERE name=?";
		$stmt=mysqli_prepare($link, $query);
		mysqli_stmt_bind_param($stmt, 's', $but);
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		$row=mysqli_fetch_assoc($result);
		$json='{';
		foreach($row as $k => $v){
			if($k!='id')
				$json.='"'.$k.'"'.':'.'"'.$v.'"'.', ';
		}
		$json = chop($json, ', ');
		$json.='}';
		echo $json;
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);
		mysqli_close($link);
	}
?>
