<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - PDO Login and Registration</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>
			<form action="login_query.php" method="POST">	
				<h4 class="text-success">Login here...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
                <br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="registration.php">Registration</a>
			</form>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>