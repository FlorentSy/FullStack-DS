<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-custom {
            background-color: green;
            color: white;
        }
        .btn-custom:hover {
            background-color: darkgreen;
			color: white;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Update User Information</h2>
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">User ID</label>
            <input type="number" name="id" id="id" class="form-control" value="<?php echo $data['id'] ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username'] ?>">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name'] ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email'] ?>">
        </div>

        <div class="d-grid">
            <button type="submit" name="update" class="btn btn-custom">UPDATE</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

