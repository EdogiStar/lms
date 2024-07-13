<?php  
 include('../session.php');
 include('../dbcon.php');

 $getEmail = mysqli_query($conn, "select email from student where student_id ='$session_id' LIMIT 1");
 $row = mysqli_fetch_array($getEmail);
 $email = $row['email'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Payment - CFIE</title>
    <style type="text/css" href="css/index.css"></style>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
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
          <input type="text" id="first-name" />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
          <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
      </form>
      
      <script src="https://js.paystack.co/v1/inline.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="payment.js"></script>
      <?php include '../footer.php' ?>
</body>
</html>