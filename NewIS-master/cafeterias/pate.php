<!DOCTYPE html>
<html lang="en">

<head>

    <link href='https://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
  <link rel="icon" href="./../images/logo/favicon.ico" type="image/icon" />
  <link rel="stylesheet" href="./../css/cafeteria.css" type="text/css" />


<style>
  h1 {
  font-family: 'Londrina Shadow', cursive;
  text-align: center;
  font-size: 75px;
  color: #000000;
  margin: 60px 0 0 0;
}
</style>



  <title>Pate Cafeteria</title>
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
              <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  
  <h1><strong>PATE CAFETERIA</strong></h1>
  
  <!-- <nav>
      <ul>
        <li><a href="#breakfast">Breakfast</a></li>
        <li><a href="#lunch">Lunch</a></li>
        <li><a href="#pastries">Pasteries</a></li>
        <li><a href="#beverages">Beverages</a></li>
      </ul>
    </nav> -->
  <!-- <div class="confuse"></div> -->
  <div id="lunch">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="https://thecookbook.pk/wp-content/uploads/2019/06/0_4wumHkmkVKG38b5l-1300x866.jpg"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Chicken-biryani</span>
              <div class="item-details">
                <p class="item-price">Kshs. 200.00</p>
                <div class="btn-primary btn" data-toggle="modal" data-target="#exampleModalCenter">
                  Order
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img
                src="https://i2.wp.com/howkenya.com/wp-content/uploads/2019/03/beef_pilau_rice.jpg?fit=750%2C501&ssl=1"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Pilau</span>
              <div class="item-details">
                <p class="item-price">Kshs. 150.00</p>
                <div data-toggle="modal" data-target="#exampleModalCenterf2" class="btn-primary btn">
                  Order
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="https://africageographic.com/wp-content/uploads/2017/04/IMG-20170328-WA0006.jpg" height="250px"
                alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Beef-biryani</span>
              <div class="item-details">
                <p class="item-price">Kshs. 200.00</p>
                <div data-toggle="modal" data-target="#exampleModalCenterf3" class="btn-primary btn">
                  Order
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="https://fauziaskitchenfun.com/wp-content/uploads/2013/08/beef-biryani.jpg" height="250px"
                  alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Ugali-fish</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 125.00</p>
                  <div data-toggle="modal" data-target="#exampleModalCenterf4" class="btn-primary btn">
                    Order
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="https://i0.wp.com/farm2.static.flickr.com/1462/25523414365_df283c7257.jpg?w=730&ssl=1"
                  height="250px" alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Mahamri and mbaazi</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 100.00</p>
                  <div data-toggle="modal" data-target="#exampleModalCenterf5" class="btn-primary btn">
                    Order
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="https://www.ratansev.com/wp-content/uploads/2017/11/moong-dal-samosa-new.jpg" height="250px"
                  alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Samosa</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 50.00 each</p>
                  <div data-toggle="modal" data-target="#exampleModalCenterf6" class="btn-primary btn">
                    Order
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- food 1 -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            Chicken-biryani.
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://thecookbook.pk/wp-content/uploads/2019/06/0_4wumHkmkVKG38b5l-1300x866.jpg" height="150px"
              alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- food2 -->

  <div class="modal fade" id="exampleModalCenterf2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf2">
            Chicken-biryani.
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://i2.wp.com/howkenya.com/wp-content/uploads/2019/03/beef_pilau_rice.jpg?fit=750%2C501&ssl=1"
              height="150px" alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- food3 -->
  <div class="modal fade" id="exampleModalCenterf3" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf3">
            Beef-biryani
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://africageographic.com/wp-content/uploads/2017/04/IMG-20170328-WA0006.jpg" height="150px"
              alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- food4 -->
  <div class="modal fade" id="exampleModalCenterf4" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf4">
            Beef
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://fauziaskitchenfun.com/wp-content/uploads/2013/08/beef-biryani.jpg" height="150px"
              alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- food5 -->
  <div class="modal fade" id="exampleModalCenterf5" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf5">
            Beef
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://i0.wp.com/farm2.static.flickr.com/1462/25523414365_df283c7257.jpg?w=730&ssl=1"
              height="150px" alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- food6 -->
  <div class="modal fade" id="exampleModalCenterf6" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf6">
            Samosa
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://www.ratansev.com/wp-content/uploads/2017/11/moong-dal-samosa-new.jpg" height="150px"
              alt="" />
          </center>
        </div>
        <div class="modal-footer">
          <button class="btn change-cart"><i class="fa fa-minus"></i></button>
          <p>1</p>
          <button class="btn change-cart mr-4">
            <i class="fa fa-plus"></i>
          </button>
          <button type="button" class="btn btn-primary align-right" id="orderbtn">
            Add to cart
          </button>
        </div>
      </div>
    </div>
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
        <div class="col-md-3">
          <ul>
            <li>Get Help</li>
            <li>Read FAQS</li>
            <li></li>
            <li></li>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>

</html>