<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
if ($id == '') {
	header("location: admin_user.php");
}else{
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROM users where user_id='$id[$i]'");
	}
	header("location: admin_user.php");
	}
}
?>