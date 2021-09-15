<?php include "db.php"; ?>
<?php session_start();

// Verifying whether a cookie is set or not
if (isset($_COOKIE["username"])) {

    $lastname = $_COOKIE["username"];
    
    $query               = "SELECT * FROM users WHERE lname = '{$lastname}' ";
    $select_user_query   = mysqli_query($connection, $query);

    if ($select_user_query->num_rows == 0) {
        header("Location: ../sign-up.php");
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id                = $row['id'];
        $db_user_firstname         = $row['fname'];
        $db_profileimg             = $row['profileimg'];
        $db_user_type              = $row['user_type'];
        $db_user_address           = $row['user_address'];
        $db_user_city              = $row['user_city'];
        $db_user_state             = $row['user_state'];
        $db_lastname               = $row['lname'];
        $db_pnumber                = $row['pnumber'];
        $db_gender                 = $row['gender'];
        $db_user_password          = $row['user_password'];
        $db_unique_id              = $row['unique_id'];
        $db_email_address          = $row['email_address'];

        $_SESSION['lastname']         = $db_lastname;

        $_SESSION['email_address']    = $db_email_address;
        $_SESSION['firstname']        = $db_user_firstname;
        $_SESSION['lastname']         = $db_lastname;
        $_SESSION['unique_id']        = $db_unique_id;
        $_SESSION['profileimg']       = $db_profileimg;
        $_SESSION['user_status']      = $db_user_status;
        $_SESSION['user_type']        = $db_user_type;
        $_SESSION['user_address']     = $db_user_address;
        $_SESSION['user_id']          = $db_user_id;
        $_SESSION['pnumber']          = $db_pnumber;
        $_SESSION['gender']           = $db_gender;
        header("Location: ../index.php");
    }
} else {
    header("Location: ../sign-up.php");
}

?>