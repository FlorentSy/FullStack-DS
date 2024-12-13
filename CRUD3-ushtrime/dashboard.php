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

		/* Navbar Styling */
		.navbar {
			background-color: #333;
			overflow: hidden;
			position: fixed;
			top: 0;
			width: 100%;
		}

		.navbar a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
		}

		.navbar a:hover {
			background-color: #575757;
			color: white;
		}

		/* Page Content */
		.content {
			margin-top: 50px;
			padding: 20px;
		}

		/* Table Styling */
		table {
			border: 1px solid black;
			margin-bottom: 10px;
			background-color: #F4F9F4;
			color: black;
			width: 100%;
		}

		tr, td, th {
			border: 1px solid black;
		}
		.actions{
			width: 150px;
		}
		table, tr, td {
			border-collapse: collapse;
		}

		td {
			padding: 10px;
		}

		td a {
			text-decoration: none;
			color: white;
			padding: 5px;
			background-color: green;
			border-radius: 5px;
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
			text-decoration: none;
			color: white;
			padding: 10px;
			background-color: darkgreen;
			border-radius: 5px;
			display: inline-block;
			margin-top: 10px;
		}
		.id-th{
			width: 50px;
		}
	</style>
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
	<div class="navbar">
		<a href="#" onclick="showSection('dashboard')">Dashboard</a>
		<a href="edit.php?id=1">Edit Profile</a>
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
						<th>Surname</th>
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
						<td><?= $user['surname'] ?></td>
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
