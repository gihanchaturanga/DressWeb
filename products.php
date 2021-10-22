<?php

  include 'dbconn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- my CSS file link-->
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-color navbar-padding">
        <a href="index.html" class="navbar-brand">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link mr-5" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mr-5" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- end - navbar -->

    <!-- Products -->
    <section>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-10 col-lg-4 offset-md-1">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">I am Looking for :</label>
                    </div>
                    <select class="custom-select" name="category" id="inputGroupSelect01">
                      <option value="1">Product One</option>
                      <option value="2">Product Two</option>
                    </select>
                  </div>
            </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
            <div class="row">
                <from action="php-products.php" method="GET">
                  <?php 
                    if(!isset($_GET['category'])){
                      $query = "SELECT * FROM item WHERE stat = '1'";
                      $result = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result)){
                        
                        echo '<div class="col-lg-3 col-sm-6 col-md-4 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">'.$row['name'].'</h5>
                              <p class="card-text">'.$row['description'].'</p>
                            </div>
                            <div class="card-footer">
                              <button name="id" value="'.$row['id'].'" class="btn btn-success">More Details</button>
                            </div>
                          </div>
                    </div>';

                      }
                    } 
                  ?>
                </form>
                
                <div class="col-lg-3 col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Product title goes here</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success">More Details</button>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Product title goes here</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success">More Details</button>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Product title goes here</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success">More Details</button>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Product title goes here</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-success">More Details</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Products -->
    <br>
    <footer>
        <div class="row footer-row">
            <div class="col-md-5 offset-md-1 mt-4 col-sm-11 offset-sm-1">
                <h6><b>Designed by:</b> <a href="#"> Revotech Solutions</a></h6>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
    <div class="card">
      <img class="card-img-top" src="img/product1.jpeg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Product title goes here</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <button class="btn btn-success">More Details</button>
      </div>
    </div>
-->