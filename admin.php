<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once "header.php" ?>

    <div class="container mt-4">

        <nav aria-label="breadcrumb" class="mb-4 custom-breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>

        <h2 class="text-center text-primary mb-4">Admin Panel</h2>

        <div class="row mt-2 mb-3">
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="create_package.php" class="card-link">Create A New Package</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="admin_packages.php" class="card-link ">Insert Data Into A Package</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="#" class="card-link">Update A Package</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="#" class="card-link ">Remove A Package</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once "footer.php" ?>

</body>