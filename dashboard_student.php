<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
					<?php
                      $query = mysqli_query($conn,"select * from payments where user_id='$session_id'")or die(mysqli_error());
						$row = mysqli_fetch_array($query);
						// $id = $row['student_id'];
						$count = mysqli_num_rows($query);
						if ($count > 0){
						 	// show classes
						 	include('myclass.php');
						 	?>
						 	
						 	<?php

						}else{
						 	echo '<br><h3>Make Payment to access your classes';
						 	echo ' <a href="payment.php" ><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Go To Payment</a></h3>';
						}
						?>
									

                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>