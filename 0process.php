<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processing..... </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container mt-4">

        <?php
        require_once "connect.php";


        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['p_id'])) {

            //session package id
            $p_id = $_SESSION['p_id'];

            //Itenary section
            if (isset($_POST['itenary_submit'])) {
                $title = $_POST['itenary-title'];
                $description = $_POST['itenary-description'];

                //check whether all query inserted successfully 
                $success = false;
                //stores number of rows successfully inserted
                $success_counter = 0;


                for ($i = 0; $i < sizeof($title); $i++) {
                    if ($title[$i] != "" && $description[$i] != "") {

                        //escape characters
                        $title[$i] = $mysqli->real_escape_string($title[$i]);
                        $description[$i] = $mysqli->real_escape_string($description[$i]);

                        $result = $mysqli->query("INSERT INTO itenary(p_id, title, description) VALUES('$p_id', '$title[$i]', '$description[$i]')");
                        if ($result) {
                            $success = true;
                            $success_counter++;
                        } else {
                            echo $mysqli->error;
                            $success = false;
                        }
                    } else if (($title[$i] != "" && $description[$i] == "") || ($title[$i] == "" && $description[$i] != "")) {
                        echo "<div class ='alert alert-danger' role='alert'>
                        Day " . ($i + 1) . " data not saved, because title or description is missing! </div>";
                    }
                }

                if ($success) {
                    echo "<div class ='alert alert-success' role='alert'>
                        Thankyou!, Total: " . $success_counter . " rows successfully saved! </div>";

                    session_unset();
                    session_destroy();
                    ?>
                    <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success</li>
                        </ol>
                    </nav>
                <?php
            } else {
                echo "<div class ='alert alert-danger' role='alert'>"
                    . "Please enter data in atleast one form!!"
                    . "</div>";

                echo "<p>You will be redirected to form page in 4s.</p>";
                //redirect to create_itenary.php
                header("refresh:4; url=create_itenary.php");
            }
        }

        //Accommodation Section 
        if (isset($_POST['accom-submit'])) {

            $city = $_POST['city'];
            $budget = $_POST['budget'];
            $standard = $_POST['standard'];
            $deluxe = $_POST['deluxe'];
            $success = false;
            $success_counter = 0;


            for ($i = 0; $i < sizeof($city); $i++) {
                if (($city[$i] != "") || ($budget[$i] != "") || ($standard[$i] != "") || ($deluxe[$i] != "")) {

                    //escape 
                    $city[$i] = $mysqli->real_escape_string($city[$i]);
                    $budget[$i] = $mysqli->real_escape_string($budget[$i]);
                    $standard[$i] = $mysqli->real_escape_string($standard[$i]);
                    $deluxe[$i] = $mysqli->real_escape_string($deluxe[$i]);

                    $result = $mysqli->query("INSERT INTO accommodation(p_id, city, budget, standard, deluxe) VALUES('$p_id', '$city[$i]', '$budget[$i]', '$standard[$i]', '$deluxe[$i]')");

                    if ($result) {
                        $success = true;
                        $success_counter++;
                    } else {
                        echo $mysqli->error;
                        $success = false;
                    }
                }
            }

            if ($success) {
                echo "<div class ='alert alert-success' role='alert'>
                    Thankyou!, Total: " . $success_counter . " rows successfully saved! </div>";
                session_unset();
                session_destroy();

                ?>

                    <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success</li>
                        </ol>
                    </nav>

                <?php
            } else {
                echo "<div class ='alert alert-danger' role='alert'>"
                    . "Please enter data in atleast one form!!"
                    . "</div>";

                echo "<p>You will be redirected to form page in 4s.</p>";
                //redirect to create_itenary.php
                header("refresh:4; url=accommodation.php");
            }
        }

        //Price Section 
        if (isset($_POST['price-submit'])) {

            $hotel = $_POST['hotel'];
            $start_date = $_POST['start-date'];
            $end_date = $_POST['end-date'];
            $twin_min_2_adults = $_POST['twin-min-2-adults'];
            $twin_min_4_adults = $_POST['twin-min-4-adults'];
            $extra_bed = $_POST['extra-bed'];
            $single = $_POST['single'];

            $success = false;
            $success_counter = 0;


            for ($i = 0; $i < sizeof($hotel); $i++) {
                if ($hotel[$i] != "" || $start_date[$i] != "" || $end_date[$i] != "" || $twin_min_2_adults[$i] != "" || $twin_min_4_adults[$i] != "" || $extra_bed[$i] != "" || $single[$i] != "") {

                    //escape characters 
                    $hotel[$i] = $mysqli->real_escape_string($hotel[$i]);

                    $result = $mysqli->query("INSERT INTO price(p_id, hotel, start_date, end_date, twin_min_2_adults, twin_min_4_adults, extra_bed, single) VALUES('$p_id', '$hotel[$i]', '$start_date[$i]', '$end_date[$i]', '$twin_min_2_adults[$i]', '$twin_min_4_adults[$i]', '$extra_bed[$i]', '$single[$i]')");

                    if ($result) {
                        $success = true;
                        $success_counter++;
                    } else {
                        echo $mysqli->error;
                        $success = false;
                    }
                }
            }

            if ($success) {
                echo "<div class ='alert alert-success' role='alert'>
                    Thankyou!, Total: " . $success_counter . " rows successfully saved! </div>";

                session_unset();
                session_destroy();

                ?>

                    <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success</li>
                        </ol>
                    </nav>

                <?php
            } else {
                echo "<div class ='alert alert-danger' role='alert'>"
                    . "Please enter data in atleast one form!!"
                    . "</div>";

                echo "<p>You will be redirected to form page in 4s.</p>";
                //redirect to create_itenary.php
                header("refresh:4; url=accommodation.php");
            }
        }

        //Inclusion Exclusion Section 
        if (isset($_POST['inc_exc_submit'])) {

            $inclusions = $_POST['inclusions'];
            $exclusions = $_POST['exclusions'];

            $success_inc = false;
            $success_inc_counter = 0;
            $success_exc = false;
            $success_exc_counter = 0;


            for ($i = 0; $i < sizeof($inclusions); $i++) {

                if ($inclusions[$i] != "") {

                    //escape characters 
                    $inclusions[$i] = $mysqli->real_escape_string($inclusions[$i]);

                    $result = $mysqli->query("INSERT INTO inclusions(p_id, inclusions) VALUES('$p_id', '$inclusions[$i]')");

                    if ($result) {
                        $success_inc = true;
                        $success_inc_counter++;
                    } else {
                        echo $mysqli->error;
                        $success_inc = false;
                    }
                }
            }

            for ($i = 0; $i < sizeof($exclusions); $i++) {

                if ($exclusions[$i] != "") {

                    //escape characters 
                    $exclusions[$i] = $mysqli->real_escape_string($exclusions[$i]);

                    $result = $mysqli->query("INSERT INTO exclusions(p_id, exclusions) VALUES('$p_id', '$exclusions[$i]')");

                    if ($result) {
                        $success_exc = true;
                        $success_exc_counter++;
                    } else {
                        echo $mysqli->error;
                        $success_exc = false;
                    }
                }
            }


            if ($success_inc && $success_exc) {
                echo "<div class ='alert alert-success' role='alert'>
                    Thankyou!, Total: " . $success_inc_counter . " inclusions rows successfully and total " . $success_exc_counter . " exclusions rows saved! </div>";

                session_unset();
                session_destroy();

                ?>

                    <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success</li>
                        </ol>
                    </nav>

                <?php
            } else if ($success_inc && !$success_exc) {
                echo "<div class ='alert alert-success' role='alert'>
                    Thankyou!, Total: " . $success_inc_counter . " inclusions rows successfully saved! </div>";

                session_unset();
                session_destroy();

                ?>

                    <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Success</li>
                        </ol>
                    </nav>

                <?php
            } else if (!$success_inc && $success_exc) {
                echo "<div class ='alert alert-success' role='alert'>
                    Thankyou!, Total: " . $success_exc_counter . " exclusions rows successfully saved! </div>";

                session_unset();
                session_destroy();
                echo "<p>You will be redirected to admin panel in 3s.</p>";
                //redirect to admin.php
                header("refresh:3; url=admin.php");
            } else {
                echo "<div class ='alert alert-danger' role='alert'>"
                    . "Please enter data in atleast one form!!"
                    . "</div>";

                echo "<p>You will be redirected to form page in 4s.</p>";

                header("refresh:4; url=inclusion_exclusion.php");
            }
        }
    } else {
        ?>

            <div class="alert alert-danger" role="alert">
                You are not authorised to view this page!
            </div>

            <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fail</li>
                </ol>
            </nav>

        <?php } ?>
    </div>
</body>