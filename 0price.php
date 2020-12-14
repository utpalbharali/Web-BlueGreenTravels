<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price Form </title>
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

            input[type=date],
            input[type=number] {
                padding: 4.5px;
                border-radius: 4px;
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <?php include_once "header.php" ?>

    <div class="container-fluid mt-4">

        <nav aria-label="breadcrumb" class="custom-breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ol>
        </nav>

        <form action="process.php" method="post" class="mb-4">
            <table class="table table-condensed price-table">
                <thead>
                    <tr>
                        <th scope="col" class="bg-light text-secondary">#</th>
                        <th scope="col" class="bg-light text-secondary">Hotel</th>
                        <th scope="col" class="bg-light text-secondary">Start Date</th>
                        <th scope="col" class="bg-light text-secondary">End Date</th>
                        <th scope="col" class="bg-light text-secondary">Twin (Min. 2 Adults)</th>
                        <th scope="col" class="bg-light text-secondary">Twin (Min. 4 Adults)</th>
                        <th scope="col" class="bg-light text-secondary">Extra Bed</th>
                        <th scope="col" class="bg-light text-secondary">Single</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="text" name="hotel[]" placeholder="eg.Standard">
                        </td>
                        <td><input type="date" name="start-date[]" placeholder="eg. 	01 Apr 2019"></td>
                        <td><input type="date" name="end-date[]" placeholder="eg. 30 Sep 2019"></td>
                        <td><input type="number" name="twin-min-2-adults[]" placeholder="eg. 20990"></td>
                        <td><input type="number" name="twin-min-4-adults[]" placeholder="eg. 16990"></td>
                        <td><input type="number" name="extra-bed[]" placeholder="eg. 11990"></td>
                        <td><input type="number" name="single[]" placeholder="eg. 36990"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="8"><button type="submit" name="price-submit" class="btn btn-success btn-xs">Submit</button>
                            <button type="button" class="btn btn-xs btn-info" id="addMoreAccom">Add More</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>

    </div>

    <?php include_once "footer.php"; ?>

    <script>
        //get table tbody
        const tbody = document.querySelector('.price-table').children[1];

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
            trClone.children[5].children[0].value = "";
            trClone.children[6].children[0].value = "";
            trClone.children[7].children[0].value = "";

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