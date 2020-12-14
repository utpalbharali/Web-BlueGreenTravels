<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inclusions & Exclusions details </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once "header.php" ?>

    <div class="container mt-4">
        <nav aria-label="breadcrumb" class="custom-breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inclusion & Exclusion</li>
            </ol>
        </nav>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Click Add More</strong> to create more forms<br>
            * Blank fields will not be saved, so feel free to leave it blank(both fields in a row)
        </div>

        <form action="process.php" method="post" class="mb-4">
            <!-- INCLUSION DETAILS -->
            <legend class="text-secondary mt-4 text-dark">Inclusion Details</legend>
            <div id="inclusions">
                <div class="itenary-item">
                    <div class="form-row mb-2">
                        <label for="incCounter" class="col-form-label col-xs-1 ml-auto">#1:</label>
                        <div class="col-sm-7 mr-auto">
                            <textarea name="inclusions[]" class="form-control" placeholder="eg. 2 Nights in Munnar with breakfast" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADD MORE INCLUSION BUTTON -->
            <div class="form-row">
                <div class="col-xs-2 ml-auto">
                    <button class="btn btn-info btn-sm form-control" name="addMore" id="add-more-inclusion">Add More Inclusion</button>
                </div>
            </div>

            <!-- EXCLUSION DETAILS -->
            <legend class="text-secondary mt-4 text-dark">Exclusions Details</legend>
            <div id="exclusions">
                <div class="itenary-item">
                    <div class="form-row mb-2">
                        <label for="excCounter" class="col-form-label col-xs-1 ml-auto">#1:</label>
                        <div class="col-sm-7 mr-auto">
                            <textarea name="exclusions[]" class="form-control" placeholder="eg. Any increase in Govt. taxes, Fuel price and any applicability of new taxes from the govt." rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADD MORE EXCLUSION BUTTON -->
            <div class="form-row">
                <div class="col-xs-2 ml-auto">
                    <button class="btn btn-info btn-sm form-control" name="addMore" id="add-more-exclusion">Add More Exclusion</button>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-1 mx-auto">
                    <input type="submit" value="Submit" name="inc_exc_submit" class="btn btn-success btn-sm form-control">
                </div>
            </div>
        </form>
    </div>

    <?php include_once "footer.php" ?>

    <script>
        function addMoreInput(parentDiv, btnId, nextDiv) {
            //get table tbody
            const parent = document.querySelector(parentDiv);

            //store count 
            let rowNum = 1;

            //on clicking add more
            document.querySelector(btnId).addEventListener("click", function(e) {
                rowNum++;
                //get clone 
                const trClone = parent.lastElementChild.cloneNode(true);

                //set row no
                trClone.children[0].children[0].textContent = `#${rowNum} `;
                //reset value 
                trClone.children[0].children[1].firstElementChild.value = "";

                //add to parent 
                parent.appendChild(trClone);

                //scroll to bottom 
                document.getElementById(nextDiv).scrollIntoView({
                    behavior: "smooth",
                    block: "end",
                    inline: "end"
                });
                // location.hash = "addMoreAccom";
                // window.scrollTo(0, document.body.scrollHeight);

                e.preventDefault();
            });
        }

        addMoreInput("#inclusions", "#add-more-inclusion", "add-more-inclusion");
        addMoreInput("#exclusions", "#add-more-exclusion", "footer");
    </script>
</body>