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
.topnav {
  overflow: hidden;
  background-color:rgba(109, 22, 22, 0.59);
  border: 1px solid white;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
  width: 450px;
  border-radius: 5px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
.sidebar {
            width: 250px;
            height: 100vh;
            background-color: #820000;
			border: 1px solid white;
            color: white;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.3);
        }

.sidebar a {
            text-decoration: none;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .content {
            flex: 1;
            padding: 20px;
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
  		<input type="text" placeholder="Search..">
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
