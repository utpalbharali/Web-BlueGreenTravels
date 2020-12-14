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
          
          <!--<img src="img/slider3.jpeg" alt="slide3" class="img-fluid"> -->
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
                 <!--<h1 class="display-3">Heading Three</h1>  -->
                 <!--<a href="#" class="btn btn-primary btn-lg">Learn More</a> -->
            </div>
          </div>
        </div>
        
        
        <div class="carousel-item img-slider-2">
          <!--<img src="img/slider2.jpeg" alt="slide2" class="img-fluid"> -->
        </div>
        
        
        <div class="carousel-item img-slider-3">
          <!-- <img src="img/slider3.jpeg" alt="slide3" class="img-fluid"> -->
          
          <div class="container">
            <div class="col-4 pt-4 ml-auto d-none d-xl-block">
              <div class="packages-pricing">
                <div class="card text-center">
                  <div class="card-header">
                    <h3>Any Package </h3>
                  </div>

                  <div class="card-title p-2">
                    <h3 class="display-4">call us</h3>
                    <span>8761948789</span>
                  </div>

                  <div class="card-body">
                    <p class="lead text-muted text-left"><i class="fa fa-cog"></i>BLUE GREEN TRAVELS</p>
                    <p class="lead text-muted text-left"><i class="fa fa-star"></i> Packages for all over the world</p>
                    <p class="lead text-muted text-left"><i class="fa fa-plane"></i> Cab, Hotel, Cottages, Cruize .. etc</p>
                    <p class="lead text-muted text-left" ><i class="fa fa-automobile"></i> all are available. Just Book us Now</p>
                  </div>

                  <div class="card-footer">
                    <h3><a href="#" data-toggle="modal" data-target="#contactNow">Book Now</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="carousel-item img-slider-4">
          <!-- <img src="img/slider4.jpeg" alt="slide4" class="img-fluid"> -->
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

    <!-- Modal Start here -->
    <div class="modal fade" id="contactNow" tabindex="-1" role="dialog" aria-labelledby="contactNowTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Enter Your details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="public_process.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <input type="hidden" name="pack_id" value="<?php echo $p_id ?>">
              <input type="hidden" name="from_page" value="index.php">
              <div class="form-group">
                <label for="pack_cat">Package Category</label>
                <select class="form-control" name="pack_cat" id="pack_cat">
                  <option>Economical</option>
                  <option>Standard</option>
                  <option>Deluxe</option>
                  <option>Pro</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <!-- <input type="submit" class="btn btn-success"  value="Submit" name="contact_now_modal"> -->
              <button type="submit" class="btn btn-success" name="contact_now_modal">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal End here -->

  </header>
<!-- Search your Destination code-->    

  <!-- CONTENTS -->

  <!-- INTERNATIONAL PACKAGES -->
  <section class="packages py-5 text-center" id="internationalTourPackages">
    <div class="container">
      <h2 class="text-primary">International Tour Packages</h2>
      <p></p>
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
                    <!--
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                    -->
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
                    <!--
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                    -->
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
      <p>Ancient Heritage and Diverse Culture</p>
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
                    <!--
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                    -->
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
                    <!--
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <?php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div>
                    
                    -->
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

  <!-- NORTHEAST PACKAGES -->
  <section class="packages py-5 text-center" id="northeastTourPackages">
    <div class="container">
      <h2 class="text-primary">North East Tour Packages</h2>
      <p>So Natural wild and Amazing</p>
    </div>
    <!-- tour carousel -->
    <div id="carouselNortheast" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <?php
        $sql = "select * from packages where category='NE'";
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
                <div class="card p-2 mr-2" style="max-width: 272px;">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" style="max-width: 258px; max-height: 169px;" class="card-img-top img-fluid"></a>
                  <div class="d-flex flex-row justify-content-center">  
                    <div>
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
                      <!-- <p class="text-muted mb-0">Packages</p>    -->
                    </div>
                    <!-- <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <? // php echo $row['starting_price'] ?></h5>          
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>
                    </div> -->
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
                <div class="card p-2 mr-2" style="max-width: 272px;">
                  <a href="view_packages.php?id=<?php echo $row['id'] ?>"><img src="slider_images/<?php echo $row['img_url'] ?>" style="max-width: 258px; max-height: 169px;" class="card-img-top img-fluid"></a>
                  <div class="text-center">
                  <div class="d-flex flex-row justify-content-center">  
                    
                      <h5 class="mt-2 mb-1"><?php echo $row['p_name'] ?></h5>
               <!--       <p class="text-muted mb-0">Packages</p>
                    </div>
                    <div class="text-right">
                      <h5 class="mt-2 mb-1 text-primary"><i class="fa fa-inr"></i> <?//php echo $row['starting_price'] ?></h5>
                      <p class="text-muted mb-0 "><small>Starting Price</small></p>    -->
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
        <a class="carousel-control-prev" href="#carouselNortheast" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselNortheast" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  <!-- INDIA PACKAGES -->
  <!-- <section class="packages py-5 text-center" id="indiaTourPackages">
    <div class="container">
      <h2 class="text-primary">India Tour Packages</h2>
      <p>Ancient Diverse Cultures</p>
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