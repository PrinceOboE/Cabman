<?php include "db.php"; ?>
<?php session_start(); ?>
<?php include "../functions.php"; ?>
<?php
if (isset($_POST['create_user'])) {
    $username             = $_POST['username'];
    $user_password        = $_POST['password'];
    $passwordconirmaion   = $_POST['passwordconirmaion'];

    $username             = mysqli_real_escape_string($connection, $username);
    $user_password        = mysqli_real_escape_string($connection, $user_password);
    $passwordconirmaion   = mysqli_real_escape_string($connection, $passwordconirmaion);

    $user_email           = $_POST['email'];
    $profileimg           = $_POST['image'];
    $gender               = $_POST['gender'];
    $user_address         = $_POST['address'];
    $pnumber              = $_POST['phone'];
    $fullname             = $_POST['full-name'];

    $user_date            = date('d-m-y');
    $user_role            = "rider";

    if ($user_password == $passwordconirmaion) {


            $query = "INSERT INTO users(username, user_date, user_type, user_password, email_address, gender, user_address, fullname, pnumber) ";
            $query .= "VALUES('{$username}',now(),'{$user_role}','{$user_password}','{$user_email}','{$gender}','{$user_address}','{$fullname}','{$pnumber}') ";
            $create_post_query = mysqli_query($connection, $query);
            confirmQuery($create_post_query);

            if ($create_post_query) {
                $_SESSION['username']      = $username;
                $_SESSION['email_address'] = $user_email;
                $_SESSION['user_role']     = $user_role;
                $_SESSION['user_password'] = $user_password;
                $_SESSION['profileimg']    = $profileimg;
                $_SESSION['gender']        = $gender;
                $_SESSION['fullname']      = $fullname;
                $_SESSION['user_address']  = $user_address;
                $_SESSION['pnumber']       = $pnumber;
                
                header("Location: ..\add-new-car.php");
            }
        } else {
            header("Location: ..\sign-up-page-error.php");
        }
}
?>