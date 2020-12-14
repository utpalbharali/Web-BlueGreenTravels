<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Packages</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once "header.php"; ?>
    <?php require_once "connect.php"; ?>

    <div class="container mt-4">

        <nav aria-label="breadcrumb" class="mb-4 custom-breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insert Data Into A Package</li>
            </ol>
        </nav>

        <form action="admin_packages.php" method="get">
            <div class="form-row">
                <div class="col-sm-6 ml-auto">
                    <select name="category" class="form-control">
                <?php
                    $sql = "SELECT category from category";

                    if($result = $mysqli->query($sql)):
                        while($row = $result->fetch_array()):
                            echo "<option value=". $row['category'] . ">".  strtoupper($row['category']). "</option>";
                            
                        endwhile;
                    
                    else:
                        echo "not found";

                    endif;
                    $result->free();
                ?>
                    <!-- <select name="category" class="form-control">
                        <option value="india">India</option>
                        <option value="international">International</option>
                    </select> -->
                    </select>
                </div>
                <div class="col-sm-2 mr-auto">
                    <input type="submit" class="form-control btn btn-danger" value="Filter Search">
                </div>
            </div>
        </form>

        <?php

        $main_sql = "SELECT * from packages where category='international'";

        //get filtered sql
        if (isset($_GET['category'])) {

            $default = "india";
            $cat = $_GET['category'];
            $main_sql = "select * from packages where category='$cat'";
        }



        // if(!$result){
        //     echo "<div class='alert alert-danger' role='alert'>
        //     The Page You Are Looking For Is Not Available!
        //     </div>";
        // }

        if ($result = $mysqli->query($main_sql)) :
            ?>

            <h2 class="text-center text-primary mb-4 mt-4">Packages</h2>

            <div class="row mt-2 mb-3">
                <?php
                if ($result->num_rows > 0) :
                    while ($row = $result->fetch_array()) :
                        ?>
                        <div class="col-sm-3">
                            <div class="card mb-3">
                                <img class="card-img-top" src="<?php echo 'slider_images/' . $row['img_url'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $row['p_name'] ?></h5>
                                        <a href="insert_data.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-xs ">Insert Data</a>
                                </div>
                            </div>
                        </div>
                    <?php
                endwhile;

            else :
                ?>
                    <div class="alert alert-danger col-6 mx-auto text-center" role="alert">
                        Sorry No Packages Found!
                    </div>
                <?php
            endif;
        endif;
        ?>
        </div>

    </div>

    <?php require_once "footer.php" ?>

</body>