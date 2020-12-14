<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accommodation Form </title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            /* border-collapse: collapse; */
            /* width: 100%; */
        }

        th {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            /* padding: 5px; */
        }

        @media(min-width:992px) {
            input {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include_once "header.php" ?>

    <div class="container-fluid mt-4">

        <nav aria-label="breadcrumb" class="mb-4 custom-breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
                <li class="breadcrumb-item"><a href="admin_packages.php">Insert Data Into A Package</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accommodation</li>
            </ol>
        </nav>

        <form action="process.php" method="post" class="mb-4">
            <table class="table table-condensed accom-table">
                <thead>
                    <tr>
                        <th scope="col" class="bg-light text-secondary">#</th>
                        <th scope="col" class="bg-light text-secondary">City</th>
                        <th scope="col" class="bg-light text-secondary">Budget</th>
                        <th scope="col" class="bg-light text-secondary">Standard</th>
                        <th scope="col" class="bg-light text-secondary">Deluxe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="text" name="city[]" placeholder="eg.Cochin">
                        </td>
                        <td><input type="text" name="budget[]" placeholder="eg. Ramada Resort or similar"></td>
                        <td><input type="text" name="standard[]" placeholder="eg. Abad Green Forest or similar"></td>
                        <td><input type="text" name="deluxe[]" placeholder="eg. Uday Samudra or similar"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td class="text-right"><button type="submit" name="accom-submit" class="btn btn-success btn-xs">Submit</button>
                            <button type="button" class="btn btn-xs btn-info" id="addMoreAccom">Add More</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>

    </div>

    <?php include_once "footer.php"; ?>

    <script>
        //get table tbody
        const tbody = document.querySelector('.accom-table').children[1];

        //store count 
        let rowNum = 1;

        //on clicking add more
        document.querySelector('#addMoreAccom').addEventListener("click", function(e) {
            rowNum++;
            //get clone 
            const trClone = tbody.lastElementChild.cloneNode(true);

            //set row no
            trClone.children[0].textContent = `${rowNum}`;

            //reset city, budget, standard, deluxe
            trClone.children[1].children[0].value = "";
            trClone.children[2].children[0].value = "";
            trClone.children[3].children[0].value = "";
            trClone.children[4].children[0].value = "";

            //add to tbody 
            tbody.appendChild(trClone);

            //scroll to bottom 
            document.getElementById("footer").scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest"
            });
            // location.hash = "addMoreAccom";
            // window.scrollTo(0, document.body.scrollHeight);

            e.preventDefault();
        });
    </script>
</body>