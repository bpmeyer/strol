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
    <title>Ströl - Log a Walk</title>
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
  <br>
  <center>
  <div id="strol">
    <form id="strolform" method="post">
        <label for="user">Name</label><br>
        <input type="text" name="user" id="user" required><br><br>
        <label for="distance">Miles</label><br>
        <input type="text" name="distance" id="distance" required><br><br>
        <label for="weight">Weight</label><br>
        <input type="text" name="weight" id="weight" required><br><br>
        <label for="calories">Calories</label><br>
        <input type="text" name="calories" id="calories" required><br><br>
        <input type="submit" id="submit" value="submit">
    </form>
  </div>
</center>



    <div id="response">
      <p class="announce">Your mileage has been logged!</p>
      <p class="middle"><a href="dashboard.php">Return to the dashboard</a></p>
    </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
  <script src="js/addstrol_enter.js"></script>
  </body>
</html>
