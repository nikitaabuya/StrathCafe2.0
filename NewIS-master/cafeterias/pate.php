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

  h4 {
  font-family: 'Londrina Shadow', cursive;
  text-align: center;
  font-size: 35px;
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
  
  <h1><strong>PATE CAFETERIA</strong></h1>
  <h4><strong>meals available</strong></h4>
  <br>
  <br>

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
              <img src="https://cdn.pixabay.com/photo/2019/08/15/09/00/pilaf-4407502_640.jpg"
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
                src="https://www.whats4eats.com/files/grains-ugali-with-cabbage-flickr-bitterjug-2248918702-4x3.jpg"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Ugali and cabbage</span>
              <div class="item-details">
                <p class="item-price">Kshs. 100.00</p>
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
              <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/nutraingredients-asia.com/article/2019/04/22/chapati-for-weight-loss-optibiotix-outlines-indian-plans-for-slimbiome-after-fssai-approval/9389610-2-eng-GB/Chapati-for-weight-loss-OptiBiotix-outlines-Indian-plans-for-SlimBiome-after-FSSAI-approval_wrbm_large.jpg" height="250px"
                alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Chapati and meat stew</span>
              <div class="item-details">
                <p class="item-price">Kshs. 190.00</p>
                <div data-toggle="modal" data-target="#exampleModalCenterf3" class="btn-primary btn">
                  Order
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="https://cdn.pixabay.com/photo/2019/05/30/19/15/rice-dish-4240511_1280.jpg" height="250px"
                  alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Vegetable rice</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 115.00</p>
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
                <img src="https://maisminas.org/wp-content/uploads/2017/07/food-1081707_1920.jpg"
                  height="250px" alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Burger and Fries</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 310.00</p>
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
                <img src="https://scontent-dfw5-1.cdninstagram.com/vp/261c78f529b0ec47c9e4f7b97eaea3c8/5DE51BAA/t51.2885-15/e35/66673350_157298228762052_6413550502706531258_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" height="250px"
                  alt="" class="container-fluid" />
              </div>
              <div class="card-footer text-center">
                <span class="item-name">Fried chicken legs</span>
                <div class="item-details">
                  <p class="item-price">Kshs. 80.00</p>
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
                  <img src="https://cdn.pixabay.com/photo/2019/08/15/09/00/pilaf-4407502_640.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">200</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
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
            Ugali and cabbage
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://www.whats4eats.com/files/grains-ugali-with-cabbage-flickr-bitterjug-2248918702-4x3.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">100</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
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
            Chapati and meat stew
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/nutraingredients-asia.com/article/2019/04/22/chapati-for-weight-loss-optibiotix-outlines-indian-plans-for-slimbiome-after-fssai-approval/9389610-2-eng-GB/Chapati-for-weight-loss-OptiBiotix-outlines-Indian-plans-for-SlimBiome-after-FSSAI-approval_wrbm_large.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">190</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
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
            Vegetable Rice
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://cdn.pixabay.com/photo/2019/05/30/19/15/rice-dish-4240511_1280.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">105</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
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
            Burger and fries
          </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://cdn.pixabay.com/photo/2019/05/30/19/15/rice-dish-4240511_1280.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">115</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
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
            Fried chicken rice
          </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://scontent-dfw5-1.cdninstagram.com/vp/261c78f529b0ec47c9e4f7b97eaea3c8/5DE51BAA/t51.2885-15/e35/66673350_157298228762052_6413550502706531258_n.jpg?_nc_ht=scontent-dfw5-1.cdninstagram.com" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">80</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>


 

        <h4><strong>drinks available</strong></h4>
        <br>
        <br>


         <div id="lunch">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <img src="https://steemitimages.com/0x0/https://cdn.pixabay.com/photo/2015/08/10/12/33/beverage-882652_1280.jpg"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Fruit juice</span>
              <div class="item-details">
                <p class="item-price">Kshs. 60.00</p>
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
                src="https://images.squarespace-cdn.com/content/v1/56e827f5c2ea5108b73ee575/1514687097388-JHUP6QMI3CXJ450YMKP5/ke17ZwdGBToddI8pDm48kH23KVWagbNOYpajbj_MQLNZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIJtg7yny0RBSV5PxpX1XPrwAROGqRUCBAuccPtaePpQsKMshLAGzx4R3EDFOm1kBS/image-asset.jpeg"
                height="250px" alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Soda</span>
              <div class="item-details">
                <p class="item-price">Kshs. 40.00</p>
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
              <img src="https://www.gastrovbrne.cz/image/images/cms/articles/gastrovbrne_ostruziny_recept_zajimavosti-4-.jpg/?w=1980" height="250px"
                alt="" class="container-fluid" />
            </div>
            <div class="card-footer text-center">
              <span class="item-name">Yoghurt</span>
              <div class="item-details">
                <p class="item-price">Kshs. 70.00</p>
                <div data-toggle="modal" data-target="#exampleModalCenterf3" class="btn-primary btn">
                  Order
                </div>
              </div>
            </div>
          </div>
        </div>

  <!-- drink 1 -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterTitle">
            Fruit juice
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://steemitimages.com/0x0/https://cdn.pixabay.com/photo/2015/08/10/12/33/beverage-882652_1280.jpg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">60</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>

  <!-- drink 2 -->

  <div class="modal fade" id="exampleModalCenterf2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf2">
            Soda
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://images.squarespace-cdn.com/content/v1/56e827f5c2ea5108b73ee575/1514687097388-JHUP6QMI3CXJ450YMKP5/ke17ZwdGBToddI8pDm48kH23KVWagbNOYpajbj_MQLNZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIJtg7yny0RBSV5PxpX1XPrwAROGqRUCBAuccPtaePpQsKMshLAGzx4R3EDFOm1kBS/image-asset.jpeg" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">40</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>

  <!-- drink 3 -->
  <div class="modal fade" id="exampleModalCenterf3" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header food-header">
          <h5 class="modal-title " id="exampleModalCenterf3">
            Yoghurt
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <center>
                  <img src="https://www.gastrovbrne.cz/image/images/cms/articles/gastrovbrne_ostruziny_recept_zajimavosti-4-.jpg/?w=1980" height="150px" alt="" />
                </center>
              </div>
              <div class="modal-footer">
                <button class="btn change-cart" id="subtract">
                  <i class="fa fa-minus"></i>
                </button>
                <p id="quantity">1</p>
                <button class="btn change-cart mr-4" id="add">
                  <i class="fa fa-plus"></i>
                </button>
                <p id="price">70</p>
                <button type="button" class="btn align-right" id="orderbtn" data-dismiss="modal">
                  Add to cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div></div>




        <h4><strong>snacks available</strong></h4>
        <br>
        <br>


      


        <!-- cart modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
      
              <!-- Modal Header -->
              <div class="modal-header">
                <h2 class="modal-title " style="margin-left: 250px;">View cart</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
      
              <!-- Modal body -->
              <div class="modal-body">
                <section>
      
                  <center>
                    <div class="myShoppingCart">
                      <img src="./images/cart.svg" alt="" />
                      <h3>You have no food in your shopping cart</h3>
                    </div>
                  </center>
                  <div class="viewOrders">
                    <table>
                      <tr id="tablehead">
                        <th>Food</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total price</th>
                      </tr>
      
                    </table>
                    <!-- <table>
                        <div>
                          <tr id="myFood" style="padding: 15px; margin-left: 100px;"></tr>
                        </div>
                      </table> -->
                  </div>
      
                </section>
              </div>
      
              <!-- Modal footer -->
              <div class="modal-footer">
                <button id="location" type="button" class="btn btn-secondary" data-dismiss="modal">Checkout</button>
              </div>
      
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