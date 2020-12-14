<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Travel Site Homepage</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require_once "header.php";
  require_once "connect.php";
  ?>

  <!-- SLIDER SHOWCASE -->
  <header id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item img-slider-1 active">
          <!-- <img src="img/slider1.jpeg" alt="slide1" class="img-fluid"> -->
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Heading Three</h1>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nisi expedita cumque tenetur id,
                voluptate dolorum dolor totam doloremque, asperiores debitis consequuntur nam, porro eum amet! Culpa,
                tenetur veritatis iste.
              </p>
              <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item img-slider-2">
          <!-- <img src="img/slider2.jpeg" alt="slide2" class="img-fluid"> -->
        </div>
        <div class="carousel-item img-slider-3">
          <!-- <img src="img/slider3.jpg" alt="slide3" class="img-fluid"> -->
          <div class="container">
            <div class="col-4 pt-4 ml-auto d-none d-xl-block">
              <div class="packages-pricing">
                <div class="card text-center">
                  <div class="card-header">
                    <h3>Package Name</h3>
                  </div>

                  <div class="card-title p-2">
                    <h3 class="display-4"> $199 </h3>
                    <span>/ day</span>
                  </div>

                  <div class="card-body">
                    <p class="lead text-muted"><i class="fa fa-cog"></i> Lorem ipsum dolor sit amet !</p>
                    <p class="lead text-muted"><i class="fa fa-star"></i> Lorem ipsum dolor sit amet !</p>
                    <p class="lead text-muted"><i class="fa fa-plane"></i> Lorem ipsum dolor sit amet !</p>
                    <p class="lead text-muted"><i class="fa fa-automobile"></i> Lorem ipsum dolor sit amet !</p>
                  </div>

                  <div class="card-footer">
                    <h3><a href="#">Book Now</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item img-slider-4">
          <!-- <img src="img/slider4.jpg" alt="slide4" class="img-fluid"> -->
        </div>
      </div>

      <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- PACKAGE-SEARCH -->
  <section id="package-search" class="py-5">
    <div class="container">
      <h1 class="text-white pt-0 ">Search Your Destination</h1>
      <form action="#">
        <div class="row no-gutters">

          <!-- destination input -->
          <div class="col-md-4 ml-auto">
            <div class="search">
              <span class="fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Search Your Destination">
            </div>
          </div>

          <!-- duration / days input -->
          <div class="col-md-3 btn-days-wrapper">
            <div class="clock-icon">
              <span class="fa fa-clock-o"></span>
              <input type="button" id="btn-days" value="Select Duration" class="form-control">
            </div>
            <!-- dropdowns -->
            <div class="btn-days-dropdown">
              <ul class="p-0 col">
                <li><button type="button" value="1 to 3 days" class="btn btn-outline-info btn-block">
                    1 to 3 days</button></li>
                <li><button type="button" value="4 to 6 days" class="btn btn-outline-info btn-block">4 to 6 days</button></li>
                <li><button type="button" value="7 to 9 days" class="btn btn-outline-info btn-block">7 to 9 days</button></li>
                <li><button type="button" value="10 to 12 days" class="btn btn-outline-info btn-block">10 to 12 days</button></li>
                <li><button type="button" value="13 to 15 days" class="btn btn-outline-info btn-block">13 to 15 days</button></li>
                <li><button type="button" value="Not decided" class="btn btn-outline-info btn-block">Not decided</button></li>
              </ul>
            </div>
          </div>

          <!-- month input -->
          <div class="col-md-3 btn-month-wrapper">
            <div class="calendar-icon">
              <span class="fa fa-calendar-o"></span>
              <input type="button" id="btn-month" value="Select Month" class="form-control">
            </div>
            <!-- dropdowns -->
            <div class="btn-month-dropdown">
              <ul class="p-0 col">
                <li><button type="button" value="January, 2019" class="btn btn-light btn-outline-info btn-block">
                    January, 2019</button></li>
                <li><button type="button" value="February, 2019" class="btn btn-light btn-outline-info btn-block">February,
                    2019</button></li>
                <li><button type="button" value="March, 2019" class="btn btn-light btn-outline-info btn-block">March,
                    2019</button></li>
                <li><button type="button" value="April, 2019" class="btn btn-light btn-outline-info btn-block">April,
                    2019</button></li>
                <li><button type="button" value="May, 2019" class="btn btn-light btn-outline-info btn-block">May, 2019</button></li>
                <li><button type="button" value="June, 2019" class="btn btn-light btn-outline-info btn-block">June,
                    2019</button></li>
                <li><button type="button" value="July, 2019" class="btn btn-light btn-outline-info btn-block">July,
                    2019</button></li>
                <li><button type="button" value="August, 2019" class="btn btn-light btn-outline-info btn-block">August,
                    2019</button></li>
                <li><button type="button" value="September, 2019" class="btn btn-light btn-outline-info btn-block">September,
                    2019</button></li>
                <li><button type="button" value="October, 2019" class="btn btn-light btn-outline-info btn-block">October,
                    2019</button></li>
                <li><button type="button" value="November, 2019" class="btn btn-light btn-outline-info btn-block">November,
                    2019</button></li>
                <li><button type="button" value="December, 2019" class="btn btn-light btn-outline-info btn-block">December,
                    2019</button></li>
              </ul>
            </div>
          </div>

          <div class="col-md-2 mr-auto">
            <input type="submit" value="Explore" class="form-control btn btn-danger btn-lg">
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- CONTENTS -->

  <!-- INTERNATIONAL PACKAGES -->
  <section class="packages py-5 text-center" id="internationalTourPackages">
    <div class="container">
      <h2 class="text-primary">International Tour Packages</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptatum.</p>
    </div>
    <!-- tour carousel -->
    <div id="carouselInter" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <?php
        $sql = "select * from packages where category='international'";
        $result = $mysqli->query($sql);
        $num_row = $result->num_rows;
        $i = 0;
        $col = 4;


        ?>
        <div class="carousel-item active">
          <div class="container d-flex flex-row">
            <?php
            while ($row = $result->fetch_array()) :
              if ($i < $col) :
                ?>
                <div class="card p-2 mr-2">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" class="card-img-top img-fluid"></a>
                  <div class="d-flex flex-row justify-content-between">
                    <div class="text-left">
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
                      <p class="text-muted mb-0">Packages</p>
                    </div>
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary">$ <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                  </div>
                </div>
              <?php
            endif;

            if ($i == $col || $i == ($col + 4)) :
              if ($i == ($col + 4)) :
                $col = $col + 4;
              endif;

              ?>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container d-flex flex-row">
              <?php
            endif;
            if ($i >= $col) :

              ?>
                <div class="card p-2 mr-2">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" class="card-img-top img-fluid"></a>
                  <div class="d-flex flex-row justify-content-between">
                    <div class="text-left">
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
                      <p class="text-muted mb-0">Packages</p>
                    </div>
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary">$ <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                  </div>
                </div>
              <?php

            endif;
            $i++;
          endwhile;
          $result->free();
          ?>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselInter" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselInter" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  <!-- INDIA PACKAGES -->
  <section class="packages py-5 text-center" id="indiaTourPackages">
    <div class="container">
      <h2 class="text-primary">India Tour Packages</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptatum.</p>
    </div>
    <!-- tour carousel -->
    <div id="carouselIndia" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <?php
        $sql = "select * from packages where category='india'";
        $result = $mysqli->query($sql);
        $num_row = $result->num_rows;
        $i = 0;
        $col = 4;


        ?>
        <div class="carousel-item active">
          <div class="container d-flex flex-row">
            <?php
            while ($row = $result->fetch_array()) :
              if ($i < $col) :
                ?>
                <div class="card p-2 mr-2">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" class="card-img-top img-fluid"></a>
                  <div class="d-flex flex-row justify-content-between">
                    <div class="text-left">
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
                      <p class="text-muted mb-0">Packages</p>
                    </div>
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary">$ <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                  </div>
                </div>
              <?php
            endif;

            if ($i == $col || $i == ($col + 4)) :
              if ($i == ($col + 4)) :
                $col = $col + 4;
              endif;

              ?>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container d-flex flex-row">
              <?php
            endif;
            if ($i >= $col) :

              ?>
                <div class="card p-2 mr-2">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" class="card-img-top img-fluid"></a>
                  <div class="d-flex flex-row justify-content-between">
                    <div class="text-left">
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
                      <p class="text-muted mb-0">Packages</p>
                    </div>
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary">$ <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                  </div>
                </div>
              <?php

            endif;
            $i++;
          endwhile;
          $result->free();
          ?>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndia" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselIndia" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>


  <!-- INDIA PACKAGES -->
  <!-- <section class="packages py-5 text-center" id="indiaTourPackages">
    <div class="container">
      <h2 class="text-primary">India Tour Packages</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptatum.</p>
    </div>
     tour carousel -->
  <!-- <div id="carouselIndia" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="container d-flex flex-row">

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india1.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 1</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 20,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india2.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 2</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 30,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india3.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 3</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 40,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2 d-none d-sm-block">
              <a href="#"><img src="img/india4.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 4</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 50,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container d-flex flex-row">

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india5.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 5</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 60,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india6.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 6</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 70,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2">
              <a href="#"><img src="img/india7.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 7</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 80,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>

            <div class="card p-2 mr-2 d-none d-sm-block">
              <a href="#"><img src="img/india8.jpg" class="card-img-top img-fluid"></a>
              <div class="d-flex flex-row justify-content-between">
                <div class="text-left">
                  <h5 class="mt-2 mb-1">India 8</h5>
                  <p class="text-muted mb-0">Packages</p>
                </div>
                <div class="text-right">
                  <h5 class="mt-2 mb-1 text-primary">$ 90,000</h5>
                  <p class="text-muted mb-0 "><small>Starting Price</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselIndia" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselIndia" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section> -->

  <?php require_once "footer.php"; ?>
</body>