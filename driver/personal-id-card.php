<?php include "includes/top.php"; ?>
<?php

if (isset($_POST['create_vehicle'])) {
    $nin                       = $_POST['nin'];
    $id_id                     = $_SESSION['user_id'];

    $front                     = $_FILES['front']['name'];
    $front_tmp                 = $_FILES['front']['tmp_name'];
    move_uploaded_file($front_tmp, "../images/id/front/" . $front);

    $back                      = $_FILES['back']['name'];
    $back_tmp                  = $_FILES['back']['tmp_name'];
    move_uploaded_file($back_tmp, "../images/id/back/" . $back);

    $query = "INSERT INTO iddetails(nin, id_id, front, back) ";
    $query .= "VALUES('{$nin}','{$id_id}','{$front}','{$back}') ";
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);

    if ($create_post_query) {
        header("Location: index.php");
    } else {
        header("Location: sign-up-page-error.php");
    }
}
?>

<body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <div class="row h-100">
        <div class="col-xs-12 col-sm-12">

            <!--Page Title & Icons Start-->
            <div class="header-icons-container text-center">
                <a href="driver-registration.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span>Personal ID Card</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="address-title">Personal ID Card</div>

                <form class="width-100" action="" method="post" enctype="multipart/form-data">
                    <!--Personal ID Fields Container Start-->
                    <div class="all-container all-container-with-classes">
                        <form class="width-100">

                            <!--Input Field Container Start-->
                            <div class="form-group form-control-margin">
                                <label class="label-title">Personal ID Number</label>
                                <div class="input-group">
                                    <input class="form-control form-control-with-padding" type="text" name="nin" autocomplete="off" placeholder="National Identification Number(NIN)">
                                    <div class="input-group-append">
                                        <span class="fas fa-id-card icon-inherited-color"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Input Field Container End-->

                            <!--Upload Front Start-->
                            <div class="display-flex justify-content-between">
                                <span class="text-uppercase">NIN Certificate</span>
                                <span class="delete-btn">
                                    <img src="../icons/delete.svg" alt="Delete Icon">
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="../icons/photocamera.svg" alt="Camera Icon">
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" name="front" type="file" accept="image/*">
                                </div>
                            </div>
                            <!--Upload Front End-->

                            <!--Upload Back Start-->
                            <div class="display-flex justify-content-between">
                                <span class="text-uppercase">State Intelligence Bereau(SIB) Clearance</span>
                                <span class="delete-btn">
                                    <img src="../icons/delete.svg" alt="Delete Icon">
                                </span>
                            </div>
                            <div class="scan-your-card-prompt margin-top-5">
                                <div class="position-relative">
                                    <div class="upload-picture-container">
                                        <div class="upload-camera-container text-center">
                                            <span class="camera">
                                                <img src="../icons/photocamera.svg" alt="Camera Icon">
                                            </span>
                                        </div>
                                    </div>
                                    <input class="scan-prompt" name="back" type="file" accept="image/*">
                                </div>
                            </div>
                            <!--Upload Back End-->
                        </form>
                        <div class="form-submit-button text-center">
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_vehicle" value="Continue">

                            <!-- <a href="add-new-car.php" class="btn btn-dark text-uppercase ">Save</a> -->
                        </div>
                    </div>
                    <!--Personal ID Fields Container End-->
            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>