<?php
include('dbcon.php');
if (isset($_POST['delete_class'])){
$id=$_POST['selector'];
if ($id == '') {
	header("location: class.php");
}else{
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROM class where class_id='$id[$i]'");
	}
	header("location: class.php");
	}
}
?>