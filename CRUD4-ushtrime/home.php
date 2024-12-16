<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<style>
		/* General Styling */
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		/* Top Navbar Styling */
		.topnav {
			background-color:rgb(90, 0, 0);
			overflow: hidden;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			z-index: 10; /* Ensures the navbar is above all elements */
		}

		.topnav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover {
			background-color: white;
			color: rgb(90, 0, 0);
		}

		.topnav input[type=text] {
			float: right;
			padding: 6px;
			border: none;
			margin-top: 8px;
			margin-right: 16px;
			font-size: 17px;
			width: 300px;
			border-radius: 5px;
		}

		/* Layout with Sidebar and Content */
		.layout {
			display: flex;
			margin-top: 50px; /* Space for the fixed navbar */
		}

		/* Sidebar Styling */
		.sidebar {
			width: 250px;
			height: 100vh;
			background-color: rgb(105, 0, 0);
			color: white;
			display: flex;
			flex-direction: column;
			padding-top: 20px;
			box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.3);
			position: fixed;
			left: 0;
			top: 50px; /* Align below the top navbar */
		}

		.sidebar a {
			text-decoration: none;
			color: white;
			padding: 15px 20px;
			font-size: 18px;
			transition: background 0.3s;
		}

		.sidebar a:hover {
			background-color:white;
			color: rgb(105, 0, 0);
		}

		/* Content Styling */
		.content {
			margin-left: 250px;
			margin-top: 50px; /* Space for the fixed navbar */
			padding: 20px;
			width: calc(100% - 250px);
		}

		/* Table Styling */
		table {
			border: 1px solid black;
			background-color: #F4F9F4;
			color: black;
			width: 90%;
			border-collapse: collapse;
		}

		th, td {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td a {
			text-decoration: none;
			color: white;
			padding: 5px 10px;
			background-color: green;
			border-radius: 5px;
		}

		td a:hover {
			background-color: darkgreen;
		}

		.add-user-btn {
			text-decoration: none;
			color: white;
			padding: 10px;
			background-color: green;
			border-radius: 5px;
			display: inline-block;
			margin-top: 10px;
		}

		.add-user-btn:hover {
			background-color: darkgreen;
		}
		.actions{
			width: 200px;
		}
	</style>
<!-- session if isadmin == true shfaqet slidebar me bookings movies etc, else nuk shfaqen bookings movies me mundsi per editim-->

<script>
		// Function to switch between Dashboard and Edit Profile
		function showSection(sectionId) {
			document.querySelectorAll('.section').forEach(section => {
				section.style.display = 'none';
			});
			document.getElementById(sectionId).style.display = 'block';
		}
	</script>
</head>
<body>

	<!-- Navbar -->
	<div class="topnav">
		<a href="#" onclick="showSection('dashboard')">Home</a>
  		<input type="text" placeholder="Search.." class="search">
	</div>
	
	<div class="sidebar">
        <h2 style="text-align: center;">Menu</h2>
        <a href="home.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="movies.php">Movies</a>
        <a href="bookings.php">Bookings</a>
    </div>

	<!-- Page Content -->
	<div class="content">

		<!-- Dashboard Section -->
		<div id="dashboard" class="section">
			<?php 
				include_once('config.php');
				$getUsers = $conn->prepare("SELECT * FROM users");
				$getUsers->execute();
				$users = $getUsers->fetchAll();
			?>
			<h2>Dashboard</h2>
			<table>
				<thead>
					<tr>
						<th class="id-th">ID</th>
						<th>Username</th>
						<th>Name</th>
						<th>Email</th>
						<th class="actions">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><?= $user['username'] ?></td>
						<td><?= $user['name'] ?></td>
						<td><?= $user['email'] ?></td>
						<td>
							<a href="delete.php?id=<?= $user['id'] ?>">Delete</a> | 
							<a href="edit.php?id=<?= $user['id'] ?>">Update</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a href="index.php" class="add-user-btn">Add User</a>
		</div>

		<!--  -->

	</div>

</body>
</html>
