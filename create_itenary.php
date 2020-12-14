<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert itenary details </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once "header.php" ?>

    <div class="container mt-4">
    <?php
        if(isset($_SESSION['p_id'])):
    ?>            
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Causion!</strong> You should check in on some of those fields below. <br>
            * Click Add More Button For More Fields <br>
            * If you write title, write description too. Its mandatory! <br>
            * Blank fields will not be saved, so feel free to leave it blank(both fields in a row)

        </div>

        <nav aria-label="breadcrumb" class="mb-4 custom-breadcrumb">
            <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Insert Itenary</li>
            </ol>
        </nav>

        <form action="process.php" method="post" class="mb-4">
            <!-- ITENARY DETAILS -->
            <legend class="text-secondary mt-4 text-dark">Iteration Details</legend>
            <div id="itenary">
                <div class="itenary-item">
                    <div class="form-row mb-2">
                        <div class="col-sm-5">
                            <label for="itenaryTitle"># 1 - Title: </label>
                            <input type="text" class="form-control" name="itenary-title[]" placeholder="Title">
                        </div>

                        <div class="col-sm-5 mx-auto">
                            <label for="description"># 1 - Description: </label>
                            <textarea name="itenary-description[]" class="form-control" rows="2" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-xs-2 ml-auto">
                    <button class="btn btn-info btn-sm form-control" name="addMore" id="add-more">Add More</button>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-1 mx-auto">
                    <input type="submit" value="Submit" name="itenary_submit" class="btn btn-success btn-sm form-control">
                </div>
            </div>
        </form>

    <?php 
        else:
            echo "<div class='alert alert-danger' role='alert'>
            Access Denied! No Package found.
          </div>";
        endif;
    ?>
    </div>

    <?php include_once "footer.php" ?>

    <script>
        //get add-more button (itenary)
        const btnAddMore = document.querySelector('#add-more');

        //var for counting number of days for 'btnAddMore'
        let days = 1;

        //on event
        btnAddMore.addEventListener('click', cloneItem);

        function cloneItem(e) {
            days++;

            //parent
            const itenary = document.querySelector('#itenary');

            //get last child to clone
            let cloneItem = itenary.lastElementChild;

            //clone it, true means copy all descends children as well as their attribute
            let clone = cloneItem.cloneNode(true);

            //add day to title
            clone.firstElementChild.firstElementChild.firstElementChild.textContent = `# ${days} - Title: `;
            //clear input title field
            clone.firstElementChild.firstElementChild.lastElementChild.value = "";
            //clear textarea description field
            clone.firstElementChild.lastElementChild.lastElementChild.value = "";

            //add day to description
            clone.childNodes[1].lastElementChild.firstElementChild.textContent = `# ${days} - Description: `;

            // append clone child 
            itenary.appendChild(clone);

            //scroll to bottom 
            document.getElementById("footer").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
            
            e.preventDefault();
        }
    </script>
</body>