<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

      <link href='https://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
  <link rel="icon" href="./../images/logo/favicon.ico" type="image/icon" />
  <link rel="stylesheet" href="./../css/cafeteria.css" />

    <style>
  h1 {
  font-family: 'Londrina Shadow', cursive;
  text-align: center;
  font-size: 75px;
  color: #000000;
  margin: 60px 0 0 0;
}
</style>


  <title>Cafeterias</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="./../home/index.php">
      <img src="./../images/logo/logo.png" class="img-fluid" width="40px"><strong>StrathCafe</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./../home/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./../cafeterias/cafeterias.php">Cafeterias</a>
        </li>
        <a href="#"><button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal">
            ORDERS = <span id="finalOrder">0</span>
          </button></a>
      </ul>

      <?php
      if (isset($_SESSION['loggedin'])) {
        echo '        
          <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-user"><strong> ' . $_SESSION['FirstName'] . " " . $_SESSION['LastName'] . ' - ' . $_SESSION['AdmissionNumber'] . '</strong></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="./../authentication/profile.php">View Profile</a>
                <a class="dropdown-item" href="./../authentication/logout.php">Logout</a>
              </div>
            </li>
          </ul>
          ';
      } else {
        echo '
          <ul class="navbar-nav">
          <li class="nav-item">
              <a href="./../authentication/login.html">
                <button class="btn btn-outline-light  my-2 my-sm-0" type="submit" id="log">Login</button>
              </a>
            </li>
            <li class="nav-item">
              <a href="./../registration/registration.html">
                <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit" id="log">Register</button>
              </a>
            </li>
          </ul>
          ';
      }
      ?>
    </div>
  </nav>

  <div class="container">
    <h1><strong>AVAILABLE CAFETERIAS !</strong></h1>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./strathmore.php">
          <div class="card">
            <div class="card-body">
              <img src="http://cateringnorthdublin.com/wp-content/uploads/2015/10/hot_buffet-1080x675.jpg" alt="hotel1" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Strathmore Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Student's Center Ground Floor Cafeteria</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./pate.php">
          <div class="card">
            <div class="card-body">
              <img src="https://stat.ameba.jp/user_images/20190501/13/pote-take/2e/76/j/o1920128114401125861.jpg" alt="hotel4" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Pate Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Cafeteria in the auditorium basement</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="offset-2 col-md-8">
        <a href="./kilimanjaro.php">
          <div class="card">
            <div class="card-body">
              <img src="https://www.factinate.com/wp-content/uploads/2018/01/14-3.jpg" alt="hotel1" />
            </div>
            <div class="card-footer">
              <div class="name">
                <p class="text-center">Kilimanjaro Cafeteria</p>
              </div>
              <div class="descrptn">
                <p class="text-center">Student's Center Rooftop cafeteria</p>
              </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>

  <br>

  </div>

  <!--footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>StrathCafe</h2>
          <img src="./../images/apple-store.svg" alt="" />
          <img src="./../images/playstore.png" height="40px" alt="" class="ml-4" />
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="./../about/about.html">About StrathCafe </a></li>
            <li><a href="./../cafeterias/cafeterias.php">Order Now</a></li>
            <li><a href="./../registration/registration.html">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container" id="horizontal"></div>
    <div class="container" id="copyright">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright &copy; 2019 StrathCafe All rights reserved</p>
        </div>
        <div class="col-md-6">
          <a href="https://twitter.com/strathu/"><i class="fa fa-twitter" style="font-size: 30px;padding: 12px"></i></a>
          <a href="https://www.instagram.com/strathmore.university/"><i class="fa fa-instagram" style="font-size: 30px;padding: 12px"></i>
          <a href="https://www.facebook.com/StrathmoreUniversity/"><i class="fa fa-facebook" style="font-size: 30px;padding: 12px"></i></a>
        </div>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>