<!-- Open DB Connection -->
<?php
  include 'database.php';
  $query = "SELECT * FROM strols ORDER BY id DESC LIMIT 10";
  $strol = mysqli_query($dbconn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <title>Ströl - Dashboard</title>
  </head>
  <body>
    <!-- Navbar -->

      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="font-family: 'Indie Flower', cursive;">Ströl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>
    </div>
    <div class="collapse navbar-collapse bg-dark" id="navbarText" align="right" padding="5">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addstrol.php">Log a Walk </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard </a>
        </li>
      </ul>
    </div>
  <!--  End Navbar -->
    <br>Last 10 Entries:<br><br>
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Miles</th>
        <th>Weight</th>
        <th>Calories</th>
      </tr>
<?php while ($row = mysqli_fetch_assoc($strol)) :  ?>
      <tr>
        <td><?php echo $row['user']; ?></td>
        <td><?php echo $row['distance']; ?></td>
        <td><?php echo $row['weight']; ?></td>
        <td><?php echo $row['calories']; ?></td>
      </tr>
<?php endwhile; ?>
    </table>




  </body>
</html>
