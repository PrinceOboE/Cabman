<?php include 'includes/top.php'; ?>

<!--Page Title & Icons Start-->
<div class="header-icons-container position-relative text-center">
    <a href="index.php">
        <span class="float-left">
            <img src="../icons/back.svg" alt="Back Icon">
        </span>
    </a>
    <span class="title">Select Driver</span>
    <a href="#">
        <span class="float-right menu-open closed">
            <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
        </span>
    </a>
</div>

<!--Page Title & Icons End-->

 <!--Google Maps Start-->
 <div id="map" class="h-100"></div>
            <!--Google Maps End-->

<!--Tapped Car Information Container Start-->
<div class="tapped-car-info ">
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
                    <a target="_blank" href="includes/sendrequest.php?driver=<?php echo $driveru_id ?>" type="button" class="btn btn-transparent">Request</a>
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

<script>
    function openWin() {
        myWindow = window.open('chat/chat2.php?user_id=<?php echo $driveru_id ?>', "_blank");
    }
    function openWind() {
        myWindow = window.open('includes/sendrequest.php', "_blank");
    }
</script>

<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/modal.php'; ?>
<?php include 'includes/bottom.php'; ?>