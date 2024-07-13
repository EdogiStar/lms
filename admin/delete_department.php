<?php
include('dbcon.php');
if (isset($_POST['delete_department'])){
$id=$_POST['selector'];
if ($id == '') {
	header("location: department.php");
}else{
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROM department where department_id='$id[$i]'");
	}
	header("location: department.php");
	}
}
?>