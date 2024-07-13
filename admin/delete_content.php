<?php
include('dbcon.php');
if (isset($_POST['delete_content'])){
$id=$_POST['selector'];
if ($id == '') {
	header("location: content.php");
}else{
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROM content where content_id='$id[$i]'");
	}
	header("location: content.php");
	}
}
?>