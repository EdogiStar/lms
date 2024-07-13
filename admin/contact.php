<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_sidebar.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <!-- <a href="add_subject.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Payments</a> -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Contacts List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_subject.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<!-- <a data-toggle="modal" href="#subject_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a> -->

										<thead>
										  <tr>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Subject</th>
												<th>Message</th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysqli_query($conn,"select * from contact order by contact_id desc")or die(mysqli_error());
											while($row = mysqli_fetch_array($subject_query)){
											$id = $row['contact_id'];
											?>
										
											<tr>
													
													<td><?php echo $row['contact_name']; ?></td>
													<td><?php echo $row['contact_email']; ?></td>
													<td><?php echo $row['contact_phone']; ?></td>
													<td><?php echo $row['contact_subject']; ?></td>
													<td><?php echo $row['contact_message']; ?></td>
													
													
												
													<!-- <td width="30"><a href="edit_subject.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td> -->
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
									</form>
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