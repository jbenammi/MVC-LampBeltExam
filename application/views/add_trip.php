<?php 
$logged_info = $this->session->userdata('logged_info');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title></title>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="">

</head>
<body>
	<div class="container">
		<div class="links">
			 <ul>
				<li><a href="/view_dashboard">Home</a></li>	 
				<li><a href="/logout">Logout</a></li>
			 </ul>
		</div>
		<h2>Add a Trip</h2>

		<form action="/Trips/add_trips" method="post">
            <?php echo form_error('destination'); ?>
		<label for="destination">Destination: <input type="text" placeholder="Paris" name="destination" /></label>
            <?php echo form_error('description'); ?>
		<label for="description">description: <input type="text" placeholder="Visit the eifel tower" name="description" /></label>
            <?php echo form_error('startDate'); ?>
		<label for="date_from">Travel Date From: <input type="date"  name="startDate" /></label>
            <?php echo form_error('endDate'); ?>
		<label for="date_to">Travel Date To: <input type="date" placeholder="Paris" name="endDate" /></label>
		<input type="hidden" value="<?= $logged_info['id'];?>" name="creator_id" />	
		<input type="submit" value="Add" />
		</form>

	</div>
</body>
</html>
