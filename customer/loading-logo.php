<?php include 'includes/top.php'; ?>
<?php

// Verifying whether a cookie is set or not
if (isset($_COOKIE["username"])) {

    $query               = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query   = mysqli_query($connection, $query);
    if (!$select_user_query) {
        header("Location: customer/sign-in.php");
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id                = $row['id'];
        $db_user_firstname         = $row['fullname'];
        $db_profileimg             = $row['profileimg'];
        $db_user_type              = $row['user_type'];
        $db_user_address           = $row['user_address'];
        $db_user_city              = $row['user_city'];
        $db_user_state             = $row['user_state'];
        $db_username               = $row['username'];
        $db_pnumber                = $row['pnumber'];
        $db_gender                 = $row['gender'];
        $db_user_password          = $row['user_password'];
        $db_email_address          = $row['email_address'];

        $_SESSION['username']         = $db_username;
        $_SESSION['email_address']    = $db_email_address;
        $_SESSION['fullname']         = $db_user_firstname;
        $_SESSION['profileimg']       = $db_profileimg;
        $_SESSION['user_status']      = $db_user_status;
        $_SESSION['user_type']        = $db_user_type;
        $_SESSION['user_address']     = $db_user_address;
        $_SESSION['user_id']          = $db_user_id;
        $_SESSION['pnumber']          = $db_pnumber;
        $_SESSION['gender']           = $db_gender;
        header("Location: customer/index.php");
    }
} else {
    header("Location: customer/sign-in.php");
}

?>
<body style="background: #e6ffff;">

    <!--Loading Container Start-->
    <div style="background: #e6ffff;" id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <!--Loading Logo Container Start-->
    <div style="background: #e6ffff;" class="main-background w-100 h-100">
        <input type="hidden" class="loading-logo  customer">
        <div style="background: #e6ffff;" class="d-flex h-100 justify-content-center align-items-center flex-column">
            <a href="sign-up.php" class="loading-logo-margin">
                <img style="max-width: 300px;" src="..\images\Cabman-logo.png" alt="Main Logo"></a>
        </div>
    </div>
    <!--Loading Logo Container End-->

    <!-- Optional JavaScript -->

    <?php include 'includes/bottom.php'; ?>