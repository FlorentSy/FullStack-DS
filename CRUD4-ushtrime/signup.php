<?php 
include("header.php"); 
include_once("config.php");
session_start();

if (isset($_POST['submit'])) {
    // Store the 'name' in the session
    $_SESSION['name'] = $_POST['name'];
}
?>

<div class="signup">
    <form class="form-signin" action="register.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required autofocus>

        <label for="inputSurname" class="sr-only">Username</label>
        <input type="text" id="inputSurname" class="form-control" placeholder="Username" name="username" required>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

		<label for="inputConfirmPassword" class="sr-only">Password</label>
        <input type="password" id="inputConfirmPassword" class="form-control" placeholder="ConfirmPassword" name="confirm_password" required>


        <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Sign up</button>

        <?php 
        // Display the name if it's set in the session
        if (isset($_SESSION['name'])) {
            echo "Welcome, " . htmlspecialchars($_SESSION['name']);
        }
        ?>

        <small>Already have an account? <a href="login.php">Log In</a></small>

        <p class="mt-5 mb-3 text-muted">Digital School &copy; 2024</p>
    </form>
</div>

<?php include("footer.php"); ?>
