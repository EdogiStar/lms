<?php
include('dbcon.php');
if (isset($_POST['delete_subject'])){
$id=$_POST['selector'];
	if ($id == '') {
		header("location: subjects.php");
	}else{
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{
			$result = mysqli_query($conn,"DELETE FROM subject where subject_id='$id[$i]'");
		}
		header("location: subjects.php");
		}
	}
?>