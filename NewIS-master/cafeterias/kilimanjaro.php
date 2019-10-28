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
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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




  <title>Kilimanjaro Cafeteria</title>
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

  <h1><strong>KILIMANJARO CAFETERIA</strong></h1>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="https://d1ralsognjng37.cloudfront.net/bdecf2d2-606f-47fe-8f91-98e942437683.jpeg" height="250px"
                alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name"> Chocolate Milkshake</span>
              <div class="item-details">
                <p class="item-price">Kshs. 105.00</p>
                <div data-toggle="modal" data-target="#milkshake" class="btn-primary btn">Order</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="https://thebritishtearoom.files.wordpress.com/2019/01/img_3611.jpg?w=750" height="250px" alt=""
                class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">crunchy bhajia with salad</span>
              <div class="item-details">
                <p class="item-price">Kshs. 75.00</p>
                <div data-toggle="modal" data-target="#bhajia" class="btn-primary btn">Order</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="https://images7.alphacoders.com/816/816665.jpg" height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">hot-dog- with ketchup and sauce</span>
              <div class="item-details">
                <p class="item-price">Kshs. 115.00</p>
                <div data-toggle="modal" data-target="#hot-dog" class="btn-primary btn">Order</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img
                src="https://st2.depositphotos.com/1158226/11043/i/950/depositphotos_110439494-stock-photo-closeup-of-tasty-kebab-with.jpg"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">tasty kebab with fries and cold soda</span>
              <div class="item-details">
                <p class="item-price">Kshs. 265.00</p>
                <div data-toggle="modal" data-target="#kebab" class="btn-primary btn">Order</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="http://mb.cafejavas.co.ug/wp-content/uploads/2017/04/masala-chips.jpg" height="250px" alt=""
                  class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">fried-chips-masala</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 145.00</p>
                  <div data-toggle="modal" data-target="#masala" class="btn-primary btn">Order</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="https://static.cuisineaz.com/400x320/i99425-hamburger.jpg" height="250px" alt=""
                  class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">recette hamburger and fries</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 300.00</p>
                  <div data-toggle="modal" data-target="#recette" class="btn-primary btn">Order</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="https://d1ralsognjng37.cloudfront.net/03511325-3b19-4f84-9191-082d59c3fa64.jpeg"
                  height="250px" alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">french fries-ketchup and chicken </span>
                <div class="item-details">
                  <p class="item-price">Kshs. 305.00</p>
                  <div data-toggle="modal" data-target="#chicken" class="btn-primary btn">Order</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="https://www.adamsdiscount.co.za/wp-content/uploads/2018/08/fried-chips-1.jpg" height="250px"
                  alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">plain-fries</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 105.00</p>
                  <div data-toggle="modal" data-target="#plain-fries" class="btn-primary btn">Order</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- food 1 -->
  <div class="modal fade" id="milkshake" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            Chocolate Milkshake
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://d1ralsognjng37.cloudfront.net/bdecf2d2-606f-47fe-8f91-98e942437683.jpeg" height="150px"
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

  <!-- food 2 -->

  <div class="modal fade" id="bhajia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            crunchy bhajia with salad
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://thebritishtearoom.files.wordpress.com/2019/01/img_3611.jpg?w=750" height="150px" alt="" />
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

  <!-- food 3  -->

  <div class="modal fade" id="hot-dog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            hot-dog-with ketchup and sauce
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://images7.alphacoders.com/816/816665.jpg" height="150px" alt="" />
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

  <!-- food 4 -->

  <div class="modal fade" id="kebab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            tasty kebab with fries and cold cod drink
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img
              src="https://st2.depositphotos.com/1158226/11043/i/950/depositphotos_110439494-stock-photo-closeup-of-tasty-kebab-with.jpg""
            height=" 150px" alt="" />
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

  <!-- food 5 -->

  <div class="modal fade" id="masala" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            fried-chips-masala
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="http://mb.cafejavas.co.ug/wp-content/uploads/2017/04/masala-chips.jpg" height="150px" alt="" />
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

  <!-- food 6 -->

  <div class="modal fade" id="recette" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            recette hamburger and fries
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://static.cuisineaz.com/400x320/i99425-hamburger.jpg" height="150px" alt="" />
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
  <!-- food 7 -->

  <div class="modal fade" id="chicken" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            french fries-ketchup and chicken
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://www.adamsdiscount.co.za/wp-content/uploads/2018/08/fried-chips-1.jpg" height="150px"
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

  <!-- food 8 -->

  <div class="modal fade" id="plain-fries" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            plain-fries
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="https://www.adamsdiscount.co.za/wp-content/uploads/2018/08/fried-chips-1.jpg" height="150px"
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