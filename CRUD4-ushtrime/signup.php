<?php include("header.php"); ?>

<div class="signup">
		
	<form class="form-signin" action="register.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

		<label for="inputEmail" class="sr-only">Name</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required autofocus>

		<label for="inputEmail" class="sr-only">Surname</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="surname" required autofocus>

		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
		

		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>

		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>

		<small>Already have account? <a href="login.php">Log In</a></small>

		<p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
	</form>
</div>

<?php include("footer.php"); ?>