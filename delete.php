<?php
	require 'connect.php';
	$id =$_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	$sql = "DELETE FROM exch602_history WHERE recordID =$id";
	$sql_exe = $conn -> query($sql);

	if($sql_exe) {
		echo "Delete cpmplete"; 
		echo "Delete ID".$id;
		echo "THB=".$thb;
		header("location:index.php",true,200);
	}else{
		echo "Delete failed";
	}
?>