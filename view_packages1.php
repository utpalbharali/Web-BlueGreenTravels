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

<?php require_once "header.php";
require_once "connect.php";
//grab p_id
if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
}
?>

<!-- PACKAGE-SEARCH -->
<section id="package-search" class="py-5">
    <div class="container">
        <h1 class="text-white pt-0 ">Search Your Destination</h1>
        <form action="#">
            <div class="row no-gutters">

                <!-- destination input -->
                <div class="col-md-4 ml-auto">
                    <div class="search">
                        <span class="fa fa-search"></span>
                        <input type="text" class="form-control" placeholder="Search Your Destination">
                    </div>
                </div>

                <!-- duration / days input -->
                <div class="col-md-3 btn-days-wrapper">
                    <div class="clock-icon">
                        <span class="fa fa-clock-o"></span>
                        <input type="button" id="btn-days" value="Select Duration" class="form-control">
                    </div>
                    <!-- dropdowns -->
                    <div class="btn-days-dropdown">
                        <ul class="p-0 col">
                            <li><button type="button" value="1 to 3 days" class="btn btn-outline-info btn-block">
                                    1 to 3 days</button></li>
                            <li><button type="button" value="4 to 6 days" class="btn btn-outline-info btn-block">4
                                    to 6 days</button></li>
                            <li><button type="button" value="7 to 9 days" class="btn btn-outline-info btn-block">7
                                    to 9 days</button></li>
                            <li><button type="button" value="10 to 12 days" class="btn btn-outline-info btn-block">10 to 12 days</button></li>
                            <li><button type="button" value="13 to 15 days" class="btn btn-outline-info btn-block">13 to 15 days</button></li>
                            <li><button type="button" value="Not decided" class="btn btn-outline-info btn-block">Not
                                    decided</button></li>
                        </ul>
                    </div>
                </div>

                <!-- month input -->
                <div class="col-md-3 btn-month-wrapper">
                    <div class="calendar-icon">
                        <span class="fa fa-calendar-o"></span>
                        <input type="button" id="btn-month" value="Select Month" class="form-control">
                    </div>
                    <!-- dropdowns -->
                    <div class="btn-month-dropdown">
                        <ul class="p-0 col">
                            <li><button type="button" value="January, 2019" class="btn btn-light btn-outline-info btn-block">
                                    January, 2019</button></li>
                            <li><button type="button" value="February, 2019" class="btn btn-light btn-outline-info btn-block">February,
                                    2019</button></li>
                            <li><button type="button" value="March, 2019" class="btn btn-light btn-outline-info btn-block">March,
                                    2019</button></li>
                            <li><button type="button" value="April, 2019" class="btn btn-light btn-outline-info btn-block">April,
                                    2019</button></li>
                            <li><button type="button" value="May, 2019" class="btn btn-light btn-outline-info btn-block">May, 2019</button></li>
                            <li><button type="button" value="June, 2019" class="btn btn-light btn-outline-info btn-block">June,
                                    2019</button></li>
                            <li><button type="button" value="July, 2019" class="btn btn-light btn-outline-info btn-block">July,
                                    2019</button></li>
                            <li><button type="button" value="August, 2019" class="btn btn-light btn-outline-info btn-block">August,
                                    2019</button></li>
                            <li><button type="button" value="September, 2019" class="btn btn-light btn-outline-info btn-block">September,
                                    2019</button></li>
                            <li><button type="button" value="October, 2019" class="btn btn-light btn-outline-info btn-block">October,
                                    2019</button></li>
                            <li><button type="button" value="November, 2019" class="btn btn-light btn-outline-info btn-block">November,
                                    2019</button></li>
                            <li><button type="button" value="December, 2019" class="btn btn-light btn-outline-info btn-block">December,
                                    2019</button></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 mr-auto">
                    <input type="submit" value="Explore" class="form-control btn btn-danger btn-lg">
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Packages Title -->
<?php
$sql = "SELECT p_name FROM packages where id='$p_id'";
?>
<section class="package-wrapper pb-4">
    <div class="container">

        <nav aria-label="breadcrumb" class="mb-4 custom-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Packages</li>
            </ol>
        </nav>


        <?php
        if ($result = $mysqli->query($sql)) :
            if ($result->num_rows > 0) :
                while ($row = $result->fetch_array()) :
                    ?>
                    <h4 class="mb-4"><?php echo $row['p_name'] ?></h4>
                <?php
                endwhile;
            else :
                echo "<h4 class='mb-4'>Error Retrieving Package</h4>";
            endif;

        else :
            echo "<h4 class='mb-4'>" . $mysqli->error . "</h4>";
        endif;
        ?>

        <div class="hotel-detail-box bg-white p-4 text-left">
            <div class="tab-nav">
                <ul>
                    <li @click="navTab('itenary')" :style="[tabItenary ? addBorder : removeBorder]">Itenary</li>
                    <li @click="navTab('inclusion')" :style="[tabInclusion ? addBorder : removeBorder]">Inclusion &
                        Exclusion</li>
                    <!-- <li @click="navTab('important')" :style="[tabImportant ? addBorder : removeBorder]">Important
                        </li> -->
                   <!-- <li @click="navTab('accom')" :style="[tabAccommodation ? addBorder : removeBorder]">Accommodation
                    </li>
                   <li @click="navTab('price')" :style="[tabPrice ? addBorder : removeBorder]">Pricing
                    </li> -->
                    <li @click="navTab('terms')" :style="[tabTerms ? addBorder : removeBorder]">Terms and conditions
                    </li>
                    <li data-toggle="modal" data-target="#contactNow">Contact Now</li>
                </ul>
            </div>

            <!-- Modal Start here -->
            <div class="modal fade" id="contactNow" tabindex="-1" role="dialog" aria-labelledby="contactNowTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Enter Your details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="public_process.php" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Phone:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <input type="hidden" name="pack_id" value="<?php echo $p_id ?>">
                                <div class="form-group">
                                    <label for="pack_cat">Package Category</label>
                                    <select class="form-control" name="pack_cat" id="pack_cat">
                                        <option>Economical</option>
                                        <option>Standard</option>
                                        <option>Deluxe</option>
                                        <option>Luxury</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <!-- <input type="submit" class="btn btn-success"  value="Submit" name="contact_now_modal"> -->
                                <button type="submit" class="btn btn-success" name="contact_now_modal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal End here -->

            <div class="tab-content">
                <div id="itenary" v-if="tabItenary">
                    <?php
                    $sql_itenary = "SELECT * FROM itenary where P_id='$p_id'";

                    if ($result = $mysqli->query($sql_itenary)) :
                        while ($row = $result->fetch_array()) :
                            ?>
                            <div class="mb-4 mt-4">
                                <h5><?php echo $row['title'] ?></h5>
                                <p class="lead mb-2"><?php echo $row['description'] ?></p>
                            </div>

                        <?php
                        endwhile;
                        $result->free();
                    else :
                        $mysqli->error;
                        $result->free();
                    endif;
                    ?>
                </div>

                <div id="inclusion" v-if="tabInclusion">
                    <?php
                    $sql_inc = "SELECT * from inclusions where p_id='$p_id'";
                    $sql_exc = "SELECT * from exclusions where p_id='$p_id'";

                    if ($result_inc = $mysqli->query($sql_inc)) :
                        ?>
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <h5 class="mb-4">Inclusion</h5>
                                <ul>
                                    <?php
                                    //loop 
                                    while ($row = $result_inc->fetch_array()) :
                                        ?>
                                        <li>
                                            <p class="lead"><i class="fa fa-angle-double-right"></i><?php echo $row['inclusions'] ?></p>
                                        </li>

                                    <?php
                                    endwhile;
                                    $result_inc->free();
                                    ?>
                                </ul>
                            <?php
                            else :
                                $mysqli->error;
                                $result_inc->free();
                            endif;
                            ?>

                        </div>
                        <div class="col-sm-6 mt-4">

                            <?php
                            if ($result_exc = $mysqli->query($sql_exc)) :
                                ?>

                                <h5 class="mb-4">Exclusion</h5>
                                <ul>
                                    <?php
                                    //loop 
                                    while ($row = $result_exc->fetch_array()) :
                                        ?>
                                        <li>
                                            <p class="lead"><i class="fa fa-angle-double-right"></i><?php echo $row['exclusions'] ?></p>
                                        </li>

                                    <?php
                                    endwhile;
                                    $result_exc->free();
                                    ?>
                                </ul>
                            <?php
                            else :
                                $mysqli->error;
                                $result_exc->free();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- <div id="important" v-if="tabImportant">
                            <ul>
                                <li>
                                    <p class="lead"><i class="fa fa-angle-double-right"></i>City tour is not possible on Friday</p>
                                </li>
                                <li>
                                    <p class="lead"><i class="fa fa-angle-double-right"></i>For INR Invoice, add Rs. 1.00 on ROE. INR Invoice is valid only on the day it has been issued.</p>
                                </li>
                                <li>
                                    <p class="lead"><i class="fa fa-angle-double-right"></i>In USD, add USD 30 as Inward remittance charge and Inward / Outward Remittance charge to be borne
                                    by SENDER</p>
                                </li>
                                <li>
                                    <p class="lead"><i class="fa fa-angle-double-right"></i>INR Invoice is valid only on the day it has been issued.</p>
                                </li>
                            </ul>
                        </div> -->

                <!-- ACCOMMODATION SECTION -->
                <!-- <div id="accommodation" v-if="tabAccommodation">  -->

                    <?php
                //     $sql_accom = "SELECT * FROM accommodation WHERE p_id='$p_id'";
                //    if ($result = $mysqli->query($sql_accom)) :
                        ?>
                        <!-- <div class="row">
                            <div class="table-responsive mx-auto">
                                <table class="table table-bordered"> -->
                                    <!-- <thead class="bg-light">
                                        <tr>
                                            <th scope="col">City</th>
                                            <th scope="col">Budget</th>
                                            <th scope="col">Standard</th>
                                            <th scope="col">Deluxe</th>
                                        </tr>
                                    </thead>
                                    <tbody>   -->

                                         <!--Loop rows  -->
                                        <?php
                                        //while ($row = $result->fetch_array()) :
                                            ?>

                                            <!-- <tr>
                                                <td><?//php echo $row['city'] ?></td>
                                                <td><?//php echo $row['budget'] ?></td>
                                                <td><?//php echo $row['standard'] ?></td>
                                                <td><?//php echo $row['deluxe'] ?></td>
                                            </tr> -->

                                        <?php
                                        // endwhile;
                                        // $result->free();
                                        ?>

                                    </tbody>

                                <?php
                                // else :
                                //     $mysqli->error;
                                //     $result->free();
                                // endif;
                                ?>
                            <!-- </table>
                        </div>
                    </div>
                </div>   -->

                <!-- PRICE SECTION -->
                <!-- <div id="price" v-if="tabPrice"> -->

                    <?php
                //    $sql_price = "SELECT * FROM price WHERE p_id='$p_id'";-->
                //    if ($result = $mysqli->query($sql_price)) :-->
                    ?>
                    <!--    <div class="row">-->
                    <!--        <div class="table-responsive mx-auto">-->
                    <!--            <table class="table table-bordered">-->
                    <!--                <thead class="bg-light">-->
                    <!--                    <tr>-->
                    <!--                        <th scope="col">Category</th>-->
                    <!--                        <th scope="col">Based On 2 Pax</th>-->
                    <!--                        <th scope="col">Based On 4 Pax</th>-->
                    <!--                        <th scope="col">Based On 6 Pax</th>-->
                    <!--                    </tr>-->
                    <!--                </thead>-->
                    <!--                <tbody>-->

                                         <!--Loop rows  -->
                                        <?php
                                        // while ($row = $result->fetch_array()) :
                                            ?>

                                            <!-- <tr>
                                                <td><?//php echo $row['category'] ?></td>
                                                <td><?//php echo $row['based_on_2_pax'] ?></td>
                                                <td><?//php echo $row['based_on_4_pax'] ?></td>
                                                <td><?//php echo $row['based_on_6_pax'] ?></td>
                                            </tr> -->

                                        <?php
                                        // endwhile;
                                        // $result->free();
                                        ?>

                                    </tbody>

                                <?php
                                // else :
                                //     $mysqli->error;
                                //     $result->free();
                                // endif;
                                ?>
                            <!-- </table>
                        </div>
                    </div>
                </div> -->

                <div id="terms" v-if="tabTerms">
                    <ul>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>High season surcharges will be applicable</p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>The Rate of Exchange (R.O.E) will be the prevailing rate on the day/date of booking</p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Rates are subject to change without prior notice</p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Rooms/Seats are subject to availability at the time of booking. Kindly note that the drivers are not guides
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Confirmation of Hotels and other services is subject to availability
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>International hotel check in is 1400hrs and checkout would be 1000hrs
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Early check in and late checkout subject to availability. Itineraries are subject to change
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Cancellation charges applicable as per company policy
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>Passport copies of all the passengers are must to initiate the booking
                            </p>
                        </li>
                        <li>
                            <p class="lead"><i class="fa fa-angle-double-right"></i>We will not be liable for claims or expenses arising from circumstances beyond our control such as accidents, injuries delayed or cancelled flights and acts or forces of nature
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once "footer.php"; ?>


<script src="thailand.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
    var app = new Vue({
        el: '.package-wrapper',
        data: {
            tabItenary: true,
            tabInclusion: false,
            tabImportant: false,
            tabTerms: false,
            tabAccommodation: false,
            tabPrice: false,
            addBorder: {
                borderBottom: '3px solid #0094DA'
            },
            removeBorder: {
                borderBottom: 'none'
            }
        },
        methods: {
            navTab: function(val) {
                if (val === 'itenary') {
                    this.tabItenary = true;
                    this.tabInclusion = false;
       //             this.tabAccommodation = false;
                    this.tabTerms = false;
                    this.tabPrice = false;
                } else if (val === 'inclusion') {
                    this.tabInclusion = true;
                    this.tabItenary = false;
      //              this.tabAccommodation = false;
                    this.tabTerms = false;
                    this.tabPrice = false;
                } else if (val === 'terms') {
                    this.tabTerms = true;
                    this.tabInclusion = false;
       //             this.tabAccommodation = false;
                    this.tabItenary = false;
                    this.tabPrice = false;
                } else if (val === 'accom') {
       //             this.tabAccommodation = true;
                    this.tabTerms = false;
                    this.tabInclusion = false;
                    this.tabItenary = false;
                    this.tabPrice = false;
                } else if (val === 'price') {
                    this.tabPrice = true;
      //              this.tabAccommodation = false;
                    this.tabTerms = false;
                    this.tabInclusion = false;
                    this.tabItenary = false;
                }
            }
        }
    })
</script>

<script>
    //bootstrap modal codes
    $(document).ready(function() {
        setTimeout(function() {
            if ($('#contactNow').is(':visible') == false) {
                $('#contactNow').modal('show');
            }
        }, 5000);
    });
</script>

</body>

</html>