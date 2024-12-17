<?php include("header.php"); ?>
<?php 
    include_once('config.php'); 

    if (empty($_SESSION['username'])) {
        header('Location: login.php');
    }

    $sql = "SELECT is_admin FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $is_admin = $user ? $user['is_admin'] : 0;

    $sql = "SELECT * FROM users";
    $selectUsers = $conn->prepare($sql);
    $selectUsers->execute();

    $users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 2rem;
            margin-top: 80px;
        }
        .card-text {
            font-size: 0.9rem;
        }
        .navbar-brand i {
            font-weight: bold;
        }
        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }
        .mt-4{
            margin-top: 60px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome, <i><?php echo $_SESSION['username']; ?></i></a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Sign Out</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Layout -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies_dashboard.php">Movies Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ($is_admin == 1) ? 'movies.php' : 'movies2.php'; ?>">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card-container">
                <!-- Movie 1 -->
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="https://cdn.sortiraparis.com/images/80/98390/979068-prison-break-la-serie-culte-des-annees-2000-bientot-de-retour-que-sait-on-de-ce-nouveau-projet.jpg" class="card-img-top" alt="Prison Break" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Prison Break</h5>
                        <p class="card-text">Architect Michael Scofield gets himself imprisoned to break out his wrongly convicted brother, Lincoln Burrows...</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <!-- Movie 2 -->
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="https://boredanddangerousblog.wordpress.com/wp-content/uploads/2015/09/beautiful-mind.jpg" class="card-img-top" alt="A Beautiful Mind" height="200">
                    <div class="card-body">
                        <h5 class="card-title">A Beautiful Mind</h5>
                        <p class="card-text">"A Beautiful Mind" portrays the life of John Nash, a brilliant but troubled mathematician...</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include("footer.php"); ?>
