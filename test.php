<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing page</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .div1 {
        border: 2px solid red;
        margin-bottom: 20px;
    }

    .div2 {
        border: 2px solid blue;
        margin-bottom: 20px;
    }
</style>

<body>
    <?php
    require_once "header.php";
    include_once "connect.php";

    $sql = "select * from packages where category='international'";

    $result = $mysqli->query($sql);

    //counter to limit sliding images to 4 
    $i = 0;
    $j = 4;
    $k = 0;
    $num_row = $result->num_rows;
    $num_slider = ceil($num_row);
    // while($row = $result->fetch_array()){
    //     echo "<div>";
    //         echo "id: " . $row['id'] . " ";
    //         echo "p_name: " . $row['p_name'] . " ";
    //         echo "starting_price: " . $row['starting_price'] . " ";
    //     echo "</div>";
    // }

    echo "<br><br>";

    // while($row = $result->fetch_array()){
    //         echo "i : " .  $i;
    //         if($i <= 3){
    //         echo "<div class='div1'>";
    //         echo "id: " . $row['id'] . " ";
    //         echo "p_name: " . $row['p_name'] . " ";
    //         echo "starting_price: " . $row['starting_price'] . " ";
    //         echo "</div>";
    //         }


    //         if($i > 3){
    //             echo "<div class='div2'>";
    //             echo "id: " . $row['id'] . " ";
    //             echo "p_name: " . $row['p_name'] . " ";
    //             echo "starting_price: " . $row['starting_price'] . " ";
    //             echo "</div>";
    //         }
    //         $i++;
    // }


    ?>

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
            $sql = "select * from packages where category='international'";
            $result = $mysqli->query($sql);
            $num_row = $result->num_rows;
            $i=0;
            $col=4;
            
       
        ?>
        <div class="carousel-item active">
          <div class="container d-flex flex-row">
            <?php
                while($row = $result->fetch_array()):
                if($i < $col):
            ?>
            <div class="card p-2 mr-2">
              <a href="view_packages.php?id=<?php echo $row['id']?>"><img src="slider_images/<?php echo $row['img_url']?>" class="card-img-top img-fluid"></a>
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
                  // echo $i;
                  // || $i == ($col+4)
                  if($i == $col || $i == ($col+4)):
                    if($i == ($col+4)):
                        $col = $col+4;
                    endif;
                    // echo "c:".$col . "i:".$i;
                ?>
            </div>
        </div>
        <div class="carousel-item">
          <div class="container d-flex flex-row">
            <?php
                endif;
                if($i >= $col):
                //   if($i == ($col+4)): $col=$col+4;  echo "i: ". $i . "col " . $col; 
                // endif;
                // echo $i. $col;
            ?>
            <div class="card p-2 mr-2">
                <a href="view_packages.php?id=<?php echo $row['id']?>"><img src="slider_images/<?php echo $row['img_url']?>" class="card-img-top img-fluid"></a>
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

    <?php
    include_once "footer.php";
    ?>
</body>