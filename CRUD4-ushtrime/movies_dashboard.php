<?php include("header.php"); 
include_once('config.php'); 
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>  

      <div>
        <?php 

        include_once('config.php');

        // Fetch all movies
        $getMovies = $conn->prepare("SELECT * FROM movies");
        $getMovies->execute();
        $movies = $getMovies->fetchAll();

        // Fetch the is_admin value from the users table based on the current session username
        $username = $_SESSION['username'] ?? null;
        $is_admin = 0;

        if ($username) {
          $adminCheck = $conn->prepare("SELECT is_admin FROM users WHERE username = ?");
          $adminCheck->execute([$username]);
          $adminData = $adminCheck->fetch(PDO::FETCH_ASSOC);
          $is_admin = $adminData['is_admin'] ?? 0;
        }

        ?>
        <style>
        table {
          border: 1px solid black;
          width: 80%;
          height: 80%;
          font-size: 12px;
        }
        tr, td, th {
          border: 1px solid black;
        }
        table, tr, td {
          border-collapse: collapse;
        }
        td {
          padding: 10px;
        }
        .desc-th {
            font-size: 10px;
        }
        .navbar-brand i {
            font-weight: bold;
        }
        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }
        .mt-4{
            margin-top: 80px;
        }
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
        #dashboard{
          margin-top: 50px;
        }
        </style>
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
      <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" id="dashboard" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies_dashboard.php">Movies Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php ">Movies</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Movie Name</th>
              <th>Movie Description</th>
              <th>Movie Quality</th>
              <th>Movie Rating</th>
              <th>Movie Image</th>
              <?php if ($is_admin == 1) { ?>
              <th>Is Approved</th>
              <?php } ?>
              <th>Actions</th>
            </tr>
          </thead>
          <?php
            foreach ($movies as $movie) {
          ?>
          <tbody>
            <tr> 
              <td><?= $movie['id'] ?></td>
              <td><?= $movie['movie_name'] ?></td>
              <td class="desc-th"> <?= $movie['movie_desc'] ?> </td> 
              <td><?= $movie['movie_quality'] ?></td> 
              <td><?= $movie['movie_rating'] ?></td>
              <td><?= $movie['movie_image'] ?></td>
              <?php if ($is_admin == 1) { ?>
              <td>
                <form method="POST" action="update_approval.php">
                  <input type="hidden" name="id" value="<?= $movie['id'] ?>">
                  <!-- <select name="is_approved" onchange="this.form.submit()">
                    <option value="1" <?= $movie['is_approved'] == 1 ? 'selected' : '' ?>>True</option>
                    <option value="0" <?= $movie['is_approved'] == 0 ? 'selected' : '' ?>>False</option>
                  </select> -->
                </form>
              </td>
              <?php } ?>
              <td>
                <?php if ($is_admin == 1) { ?>
                  <a href='delete.php?id=<?= $movie['id'] ?>'>Delete</a> |
                  <a href='profile.php?id=<?= $movie['id'] ?>'>Update</a>
                <?php } else { ?>
                  <span>No Actions Available</span>
                <?php } ?>
              </td>
            </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>
</div>
       

<?php include("footer.php"); ?>
