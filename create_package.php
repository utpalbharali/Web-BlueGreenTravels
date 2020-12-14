<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a package </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once "header.php" ?>

    <div class="container mt-4">

        <nav aria-label="breadcrumb" class="custom-breadcrumb mt-4">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Package</li>
            </ol>
        </nav>

        <?php
        require_once "connect.php";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['package_submit'])) {
                //fetch variables
                $p_name = $mysqli->real_escape_string($_POST['p_name']);
                $category = $mysqli->real_escape_string($_POST['category']);
                $category = strtolower($category);
                $starting_price = $_POST['starting_price'];
                $img_url = $_FILES['photo']['name'];

                if (!empty($p_name) && !empty($starting_price) && !empty($img_url)) {
                    //check if file was uploaded without errors 
                    if (checkImage($img_url)) {
                        //insert query
                        $sql = "INSERT INTO packages(p_name, starting_price, category, img_url)
                            VALUES(?,?,?,?)";

                        if ($stmt = $mysqli->prepare($sql)) {
                            //bind params
                            $stmt->bind_param("siss", $p_name, $starting_price, $category, $img_url);

                            //attempt to execute
                            if ($stmt->execute()) {
                                echo "<div class='alert alert-success' role='alert'>
                                    Thankyou, entered data saved!!
                                </div>";

                                echo "<a href='admin.php'>Back to admin page</a>";
                            } else {
                                echo "<div class='alert alert-success' role='alert'>
                                Error " . $mysqli->error . "
                                </div>";
                            }
                        } else {
                            echo "<div class='alert alert-success' role='alert'>
                                Error " . $mysqli->error . "
                                </div>";
                        }
                    } else {
                        echo "<div class='alert alert-success' role='alert'>
                                File Upload Error " . $mysqli->error . "
                             </div>";
                    }
                } else {
                    echo "Please fill all fields";
                }
            }
        }

        function checkImage($img_url)
        {
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
                //get image resolution info 
                list($width, $height) = getimagesize($_FILES['photo']['tmp_name']);

                //allowed uploaded type files
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg");

                $img_type = $_FILES['photo']['type'];
                $img_size = $_FILES['photo']['size'];

                //verify extension , pathinfo returns info about file path 
                //incuding [dirname, basename, extension, filename]
                //to be more specify PATHINFO_EXTENSION returns only extension
                $ext = pathinfo($img_url, PATHINFO_EXTENSION);

                //checks if specified key exists in array
                if (!array_key_exists($ext, $allowed))
                    die("ERROR: Please select a valid format");

                //verify file size - 50kb(50000 bytes) max
                $maxsize = 50000;
                if (($img_size > $maxsize) || ($width > 258 || $height > 169))
                    die("Error: File size is larger than the allowed limit or resolution is greater than 258x169");

                // Verify MYME type of the file
                if (in_array($img_type, $allowed)) {
                    // if (file_exists("slider_images/" . $img_url)) {
                    //     echo $img_url . " is already exists";
                    //     return false;
                    // } else {
                    move_uploaded_file($_FILES['photo']['tmp_name'], "slider_images/" . $img_url);
                    echo "Your file was uploaded successfully.";
                    // }
                }

                return true;
            }
        }
        ?>

        <legend class="text-secondary mt-2 text-center">Enter Details</legend>

        <form class="mb-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="packageName">Package Name: </label>
                <input type="text" class="form-control" name="p_name" placeholder="Enter a package name">
            </div>

            <div class="form-row">
                <div class="col-sm-4">
                    <label for="startingPrice">Starting Price: </label>
                    <input type="number" class="form-control" name="starting_price" placeholder="Enter a starting price">
                </div>

                <div class="col-sm-4 mx-auto">
                    <label for="category">Category: </label>
                    <!-- <input type="text" class="form-control" name="category" placeholder="eg. India, Europe, Asia"> -->

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
                    </select>
                </div>

                <div class="col-sm-4 mx-auto">
                    <label for="imgUrl">Upload Image (Must be 258x169 px & below 50kb): </label>
                    <input type="file" class="form-control-file" name="photo">
                </div>
            </div>
            <div class="form-row mt-4">
                <div class="col-sm-2 mx-auto">
                    <input type="submit" class="form-control btn btn-success" name="package_submit" value="Submit">
                </div>
            </div>
        </form>
    </div>

    <?php require_once "footer.php" ?>

    <script>

    </script>
</body>