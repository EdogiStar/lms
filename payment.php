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
					<ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>My Payments</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				<?php 
					 $getEmail = mysqli_query($conn, "select email from student where student_id ='$session_id' LIMIT 1");
					 $row = mysqli_fetch_array($getEmail);
					 $email = $row['email'];
					 
					
				?>
					 
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div id="" class="muted pull-right">			
							<span class="badge badge-info">Count</span>
						</div>
                    </div>
                   <div class="block-content collapse in">
                        <div class="span12">
                        	<!-- paystack  -->
									<form id="paymentForm">
								        <div class="form-group">
								          <label for="email">Email Address</label>
								          <input type="email" id="email-address" value="<?php echo $email; ?>" readonly required />
								        </div>
								        <div class="form-group">
								          <label for="amount">Amount</label>
								          <input type="tel" id="amount" value="15000" readonly required />
								        </div>
								        <div class="form-group">
								          <label for="first-name">First Name</label>
								          <input type="text" id="first-name" required />
								        </div>
								        <div class="form-group">
								          <label for="last-name">Last Name</label>
								          <input type="text" id="last-name" required />
								        </div>
								        <div class="form-submit">
								          <button type="submit" onclick="payWithPaystack()"> Pay </button>
								        </div>
								      </form>
								      
								      <script src="https://js.paystack.co/v1/inline.js"></script> 
								      <script type="text/javascript" src="payment.js"></script>
									<!-- paystack -->
                        </div>
                    </div>
                </div>	
                        <!-- /block -->
            </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>