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

        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            //view_packages cntact_now_modal popup
            if (isset($_POST['contact_now_modal'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $pack_id = $_POST['pack_id'];
                $pack_cat = $_POST['pack_cat'];
                $message = $_POST['message'];
                $pack_name = "";


                $sql = "SELECT p_name FROM packages WHERE id = '$pack_id'";

                if ($result = $mysqli->query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_array()) {
                            $pack_name = $row['p_name'];
                        }
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                }

                //call
                sendMail($name, $email, $phone, $pack_cat, $message, $pack_name);
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

<?php

//send mail function
function sendMail($name, $email, $phone, $pack_cat, $message, $pack_name)
{
    //mail variables
    $to = "arktravels.in@gmail.com";
    $to = "contact.utpal03@gmail.com";
    $subject = "New Booking Received";


    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $html_message = "<html><body>";
    $html_message .= '<h1 style="color: red">Reservation Details: </h1>';
    $html_message .= "<h4>Name: $name </h4>";
    $html_message .= "<h4>Email: $email </h4>";
    $html_message .= "<h4>Phonenumber: $phone</h4>";
    $html_message .= "<h4>Package Name: $pack_name</h4>";
    $html_message .= "<h4>Package Category: $pack_cat</h4>";
    $html_message .= "<h4>Message: </h4>";
    $html_message .= "<p> $message </p>";
    $html_message .= "</body></html>";
    $html_message = wordwrap($html_message, 70);


    $success = mail($to, $subject, $html_message, $headers);

    if ($success) : ?>
        <div class="alert alert-success" role="alert">
            Thankyou, your mail has been sent!
        </div>

        <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Success</li>
            </ol>
        </nav>
    <?php
    else : ?>

        <div class="alert alert-danger" role="alert">
            Your mail failed
        </div>

        <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Fail</li>
            </ol>
        </nav>
    <?php
    endif;
}
?>