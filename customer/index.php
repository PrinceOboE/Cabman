<?php include 'includes/top.php'; ?>


<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->


<div class="row h-100">
    <div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container position-relative text-center">
            <span class="float-left back-to-map hidden">
                <img src="../icons/back.svg" alt="Back Icon">
            </span>
            <div id="dvDistance">
            </div>
            <span class="title">Add Route</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="hidden">
            <div class="margin-top-10 height-auto" id="origin-input-container">
                <div class="w-100 map-input-container map-input-container-top">
                    <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                    <div class="map-input display-flex">
                        <input id="origin-input" class="controls flex-1" type="text" placeholder="Enter an origin location">
                        <span class="mic"><img src="../icons/microphone.svg" alt="Microphone Icon"></span>
                        <span class="remove">
                            <img src="../icons/cross-light.svg" alt="Remove Icon Light Color">
                        </span>
                    </div>
                </div>
                <div class="w-100 map-input-container map-input-container-bottom">
                    <span class="map-input-icon"><img src="../icons/circle.svg" alt="Current Location Icon"></span>
                    <div class="map-input display-flex">
                        <input id="destination-input" class="controls flex-1" type="text" placeholder="Enter a destination location">
                        <span class="mic"><img src="../icons/microphone.svg" alt="Microphone Icon"></span>
                        <span class="remove">
                            <img src="../icons/cross-light.svg" alt="Remove Icon Light Color">
                        </span>
                    </div>
                    <span class="dotted-line-index"></span>
                </div>
            </div>
        </div>

        <!--Google Maps Start-->
        <div id="map" class="h-100"></div>
        <!--Google Maps End-->

        <div class="not-map">

            <!--Request Ride Button Container Start-->
            <div class="request-ride-btn hidden">
                <button type="button" class="btn btn-primary">Request a Ride</button>
            </div>
            <!--Request Ride Button Container End-->

            <!--Choose a Car Container Start-->
            <div class="ride-options-bottom hidden">
                <div class="cars-options">
                    <div class="car-option" data-about-target-id="about-section-1">
                        <img style="max-width:80ox" src="../images/Economy.png" alt="Car Option 1">
                    </div>
                    <div class="car-option active" data-about-target-id="about-section-2">
                        <img src="../images/Classic.png" alt="Car Option 2">
                    </div>
                    <div class="car-option" data-about-target-id="about-section-3">
                        <img src="../images/Executive.png" alt="Car Option 3">
                    </div>
                </div>
                <div class="about-section">
                    <div class="about-section-1 hidden">
                        <div class="about-section-title">
                            Economy: <strong>N30.00</strong> / 6.85 km /
                            <span class="black-text">3 Minutes</span>
                        </div>
                        <div class="about-section-more">
                            NOTE: This is an approximate estimate. Actual cost may vary according to the traffic.
                        </div>
                    </div>
                    <div class="about-section-2">
                        <div class="about-section-title">
                            <div class="about-section-title">
                                Classic: <strong>N50.00</strong> / 6.85 km /
                                <span class="black-text">7 Minutes</span>
                            </div>
                        </div>
                        <div class="about-section-more">
                            NOTE: This is an approximate estimate. Actual cost may vary according to the traffic.
                        </div>
                    </div>
                    <div class="about-section-3 hidden">
                        <div class="about-section-title">
                            <div class="about-section-title">
                                Executive: <strong>N100.00</strong> / 6.85 km /
                                <span class="black-text">10 Minutes</span>
                            </div>
                        </div>
                        <div class="about-section-more">
                            NOTE: This is an approximate estimate. Actual cost may vary according to the traffic.
                        </div>
                    </div>
                </div>
                <div class="payment-options">
                    <div class="send-wishes-container">
                        <div class="float-left wishes">
                            <img src="../icons/wishes.svg" class="h-100" alt="Wishes Icon">
                        </div>
                        <div class="payment-option-content">
                            Note To Driver
                            <span class="payment-options-more">Write a note to driver</span>
                        </div>
                    </div>
                    <div class="default-payment-method-container display-flex">
                        <div class="float-left wishes">
                            <img src="../icons/cash.svg" alt="Cash Icon" class="h-100">
                        </div>
                        <div class="payment-option-content">
                            Payment Method
                            <span class="payment-options-more">Default Payment Method</span>
                        </div>
                    </div>
                </div>
                <div class="confirm-ride-btn">
                    <button href="driverinfo.php" type="button" class="btn btn-primary">Confirm</a>
                </div>
            </div>
            <!--Choose a Car Container End-->

            <!--Wish Container Start-->
            <div class="wish-container hidden">
                <div class="close-wish">
                    <span class="float-right">
                        <img src="../icons/close.svg" alt="Close Icon">
                    </span>
                    <span class="clearfix"></span>
                </div>
                <div class="wish-content-intro-container">
                    <span class="write-wishes-text">Write A Note To The Driver</span>
                    <span class="float-right"><img src="../icons/angle-right.svg" alt="Angle Right Icon"></span>
                </div>
                <div class="font-weight-light wishes-main-text">
                    <p>
                        By Clicking on the link above, you can write a note or your wishes to the driver.
                    </p>
                    <p>
                        Please write a polite message and kindly state your wishes. Make sure that your wishes will not make the driver uncomfortable. Enjoy your ride!
                    </p>
                </div>
                <div class="enter-wish hidden">
                    <textarea name="notes" class="width-100 height-100 font-weight-light" placeholder="Please enter your wishes here..."></textarea>
                </div>

                <div class="send-wish-btn hidden">
                    <button name="create_note" type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
            <!--Wish Container End-->

            <!--Payment Options Container Start-->
            <div class="payment-options-container hidden">
                <div class="payment-ready-btn">
                    <span class="text-uppercase float-right ready">
                        Ready
                        <img class="hidden" src="../icons/close.svg" alt="Close Icon"></span>
                </div>
                <div class="payment-options-intro-container">
                    <span class="payment-options-text"><span class="fas fa-dollar-sign"></span> Payment By Cash</span>
                    <span class="fas fa-chevron-down float-right"></span>
                </div>
                <div>
                    <ul class="payment-option-list hidden">
                        <li>
                            <span class="fas fa-dollar-sign"></span> Payment By Cash
                            <span class="float-right check">
                                <img src="../icons/check.svg" alt="Check Icon">
                            </span>
                        </li>
                        <li>
                            <span class="paypal-icon"><i class="fas fa-wallet"></i></span> Wallet
                            <span class="float-right hidden check">
                                <img src="../icons/check.svg" alt="Check Icon">
                            </span>
                        </li>
                        <li>
                            <span class="fab fa-cc-visa"></span> Debit Card
                            <span class="float-right hidden check">
                                <img src="../icons/check.svg" alt="Check Icon">
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="add-new-card-container">
                    <button type="button" class="btn btn-dark">Add New Debit Card <img class="plus-icon" src="../icons/plus.svg" alt="Add Icon"></button>
                </div>
                <div class="payment-options-main-text">
                    Paying by card is a fast and convenient option. Click the button to add a new card. The amount will be charged after the trip.
                </div>
            </div>
            <!--Payment Options Container End-->

            <!--Tapped Car Information Container Start-->
            <div class="tapped-car-info hidden">
                <div class="tapped-car-container">

                    <!--Chosen Car Information Container Start-->
                    <div class="tapped-car-info-container">
                        <div class="tapped-car-info-header-icons text-center">
                        </div>
                        <div class="rider-info">
                            <div class="float-left">
                                <?php
                                global $_SESSION;

                                $driveru_id = 1033326662;
                                $sql = mysqli_query($connection, "SELECT * FROM userd WHERE unique_id = '{$driveru_id}'");
                                $row = mysqli_fetch_assoc($sql);
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $dimge = $row['profileimg'];
                                $profileimg = $row['profileimg'];
                                $db_unique_id  = $_SESSION['unique_id'];
                                $_SESSION['driveru_id'] = $driveru_id;
                                $_SESSION['rideru_id'] = $db_unique_id;

                                ?>
                                <span><?php echo $fname . " " . $lname; ?></span>
                                <div class="font-14 rating">
                                    <span class="fas fa-star text-white font-weight-light"></span>
                                    <span class="fas fa-star text-white font-weight-light"></span>
                                    <span class="fas fa-star text-white font-weight-light"></span>
                                    <span class="fas fa-star text-white font-weight-light"></span>
                                    <span class="fas fa-star text-white font-weight-light"></span>
                                </div>
                            </div>
                            <div class="float-right profile-picture">
                                <img style="height: 90px; width: 90px; object-fit: cover; border-radius: 50%;" src="..\images\avatar\<?php echo $dimge ?>" alt="Profile Picture">
                            </div>
                        </div>
                        <div class="margin-top-25">
                            <img src="https://via.placeholder.com/178x73" alt="Mercedes Car" class="img-responsive">
                        </div>
                        <div class="requested-car-info">
                            <div class="float-left font-weight-light">
                                <div>Mercedes-Benz</div>
                                <div>GL-278-LG</div>
                            </div>
                            <div class="float-right request-btn">
                                <a type="button" class="btn btn-transparent">Request</a>
                            </div>
                            <div class="float-right ride-status hidden">
                                <span class="text-uppercase pending-request float-right font-13"><span class="pending-spinner fas fa-spinner fa-spin primary-color font-13"></span> Pending</span>
                                <span class="text-uppercase just-approved float-right font-13 hidden">Approved</span>
                                <span class="miles-till-arrival hidden">2.850</span>
                                <span class="text-uppercase on-the-way float-right font-13 hidden">on the way</span>
                                <div>
                                    <button onclick="openWin()" class="btn pending-icon message"><span class="fas fa-comments"></span></button>
                                    <a class="btn pending-icon call"><span class="fas fa-phone"></span></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Chosen Car Information Container End-->

                    <!--More Information About Chosen Car Container Start-->
                    <div class="tapped-car-more-info">
                        <button type="button" class="cancel-trip btn btn-transparent text-uppercase">Cancel Trip</button>
                        <div class="more-info-container">
                            <p>

                                <?php
                                if (isset($_POST['create_note'])) {
                                    $unique_id      = $_SESSION['unique_id'];
                                    $notes          = $_POST['notes'];

                                    $notez          = mysqli_real_escape_string($connection, $notes);
                                    echo $notez;

                                    // $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

                                    // $query = "INSERT INTO drivernotes(notemessage, sender, dateos) ";
                                    // $query .= "VALUES({$notes},'{$unique_id}',now() ) ";

                                    // $create_post_query = mysqli_query($connection, $query);
                                    // confirmQuery($create_post_query);

                                    // if ($create_post_query) {
                                    // } elseif (count($errors) == 0) {
                                    // }
                                }
                                ?>

                            </p>
                        </div>
                    </div>
                    <!--More Information About Chosen Car Container End-->

                </div>
            </div>
            <!--Tapped Car Information Container End-->

            <!--Submit Review Container Start-->
            <div class="submit-review hidden">
                <div class="text-center driver-info">
                    <img class="review-profile" style="max-width: 20%; border-radius: 50%;" src="../images\avatar\mike.jpg" alt="Driver Picture">
                    <div class="float-right close-review">
                        <img src="../icons/close.svg" alt="Close Icon">
                    </div>
                    <div class="driver-name"><?php echo $fname . " " . $lname; ?></div>
                    <div class="driver-stars rating">
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                    </div>
                </div>
                <div class="text-center trip-desc-info">
                    <div class="trip-desc-question">How Was Your Trip ?</div>
                    <div class="please-rate">Please rate, your feedback will help improve driving experience.</div>
                </div>
                <div class="comment-info">
                    <span class="comment-label"> * </span> Comments
                    <textarea class="w-100"></textarea>
                    <button class="btn btn-primary text-uppercase">Submit Review</button>
                </div>
            </div>
            <!--Submit Review Container End-->

        </div>
    </div>


    <?php include 'includes/sidebar.php'; ?>
    <?php include 'includes/modal.php'; ?>
    <?php include 'includes/bottom.php'; ?>