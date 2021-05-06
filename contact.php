<!DOCTYPE html>
<html>
<head>
	<title>Sunshine | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
<body>
<?php include 'header.php';?>

<section id="form-sec">
       <div class="container">
			<div class="section-title">
				<h2> <span>Connect With Us</span></h2>
			</div>
		</div>
		<div class="container member-form">
			<div class="wrapper text-center">
				<form  method="post">
				  	<div class="form-group">
				    	<input type="Name" name="firstName" class="form-control" id="firstName" placeholder="First Name" required="">
				  	</div>
				  	<div class="form-group">
				    	<input type="Name" name="lastName" class="form-control" id="lastName" placeholder="Last Name" required="">
					  </div>
					  <div class="form-group">
				    	<input type="number" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone Number" required="">
					  </div>
					  <div class="form-group">
				    	<input type="Name" name="email" class="form-control" id="email" placeholder="Email" required="">
				  	</div>
			
					  <div class="form-group">
				    	<textarea rows="8" type="addess" name="address" class="form-control" id="address" placeholder="Address" required=""></textarea>
				  	</div>
				  	<button id="submit" type="submit" value="submit"  class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</section>
 </section>

<?php include 'footer.php';?>
</body>
</html>