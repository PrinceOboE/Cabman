<?php include "db.php"; ?>
<?php session_start(); ?>
<?php
if (isset($_POST['login'])) {
    $phone               = $_POST['phone'];
    $password            = $_POST['password'];
    $phone               = mysqli_real_escape_string($connection, $phone);
    $password            = mysqli_real_escape_string($connection, $password);
    $query               = "SELECT * FROM userd WHERE pnumber = '{$phone}' ";
    $select_user_query   = mysqli_query($connection, $query);
    if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id                = $row['id'];
        $db_user_fname             = $row['fname'];
        $db_profileimg             = $row['profileimg'];
        $db_user_type              = $row['user_type'];
        $db_user_address           = $row['user_address'];
        $db_user_city              = $row['user_city'];
        $db_user_state             = $row['user_state'];
        $db_lastname               = $row['lname'];
        $db_pnumber                = $row['pnumber'];
        $db_gender                 = $row['gender'];
        $db_user_password          = $row['user_password'];
        $db_email_address          = $row['email_address'];
        $db_unique_id              = $row['unique_id'];
    }
    if ($phone !== $db_pnumber && $password !== $db_user_password) {
        header("Location: ../sign-in-error.php");
    } else if ($phone == $db_pnumber && $password == $db_user_password) {
       
        $_SESSION['lastname']         = $db_lastname;

        // Setting a cookie
        setcookie("username", "$db_lastname", time()+3600*24*7*4*12, "/");

        $_SESSION['email_address']    = $db_email_address;
        $_SESSION['firstname']        = $db_user_fname;
        $_SESSION['profileimg']       = $db_profileimg;
        $_SESSION['user_status']      = $db_user_status;
        $_SESSION['user_type']        = $db_user_type;
        $_SESSION['user_address']     = $db_user_address;
        $_SESSION['unique_id']        = $db_unique_id;
        $_SESSION['user_id']          = $db_user_id;
        $_SESSION['pnumber']          = $db_pnumber;
        $_SESSION['gender']           = $db_gender;
        header("Location: ../index.php");
    } else {
        header("Location: ../sign-in-error.php");
    }
}
?>