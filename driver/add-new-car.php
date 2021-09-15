<?php include 'includes/top.php'; ?>
<?php

if (isset($_POST['create_vehicle'])) {
    $date                      = $_POST['date'];
    $regdate                   = $_POST['regdate'];
    $cartype                   = $_POST['cartype'];
    $carmodel                  = $_POST['carmodel'];
    $carcolor                  = $_POST['carcolor'];
    $carregistrationnum        = $_POST['car-registration-num'];
    $fueltype                  = $_POST['capacity'];
    $userid                    = $_SESSION['user_id'];

    $carimage                = $_FILES['carimage']['name'];
    $carimage_tmp            = $_FILES['carimage']['tmp_name'];
    move_uploaded_file($carimage_tmp, "../images/carimage/" . $carimage);
    $insurance                = $_FILES['insurance']['name'];
    $insurance_tmp            = $_FILES['insurance']['tmp_name'];
    move_uploaded_file($insurance_tmp, "../images/insurance/" . $insurance);
    $particulars             = $_FILES['particulars']['name'];
    $particulars_tmp         = $_FILES['particulars']['tmp_name'];
    move_uploaded_file($particulars_tmp, "../images/particulars/" . $particulars);
    $ProOOwnership           = $_FILES['ProOOwnership']['name'];
    $ProOOwnership_tmp       = $_FILES['ProOOwnership']['tmp_name'];
    move_uploaded_file($ProOOwnership_tmp, "../images/proofofownership/" . $ProOOwnership);

    $query = "INSERT INTO vehicledetails(userid, date, regdate, cartype, carmodel, carcolor, carregistrationnum, fueltype, carimage, particulars, ProOOwnership) ";
    $query .= "VALUES('{$userid}','{$date}','{$regdate}','{$cartype}','{$carmodel}','{$carcolor}','{$carregistrationnum}','{$fueltype}','{$carimage}','{$particulars}','{$ProOOwnership}') ";
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
                <span>Car Registration</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="rest-container">
                    <div class="scan-your-card-container-none">
                        <div class="clearfix"></div>
                        <div class="font-awesome-container"></div>

                        <!--Car Registration Info Container Start-->
                        <div class="car-info-container car-info-container-top font-weight-light">
                            <div class="card-number">

                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Vehicle Manufacturer</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <input class="form-control car-info-wrap display-block" type="text" name="cartype" required>
                                    </div>
                                    </label>
                                </div>
                                <!--Car Registration Field End-->

                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100">
                                        <span class="label-title">Vehicle Model</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <input class="form-control car-info-wrap display-block" type="text" name="carmodel" required>
                                    </div>
                                    </label>
                                </div>
                                <!--Car Registration Field End-->

                                <!--Car Registration Two Fields Container Start-->
                                <div class="multi-form-container display-flex justify-content-between">

                                    <div class="form-group">
                                        <label class="width-100">
                                            <span class="label-title">Year of Manufacture</span>
                                            <span class="car-info-wrap display-block">
                                                <select name="date" class="custom-select font-weight-light car-info" required>
                                                    <option value="">Year</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                </select>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="width-100 mb-0">
                                            <span class="label-title">License Expiration Date</span>
                                        </label>
                                        <div class="input-group light-field">
                                            <input class="form-control" type="month" name="regdate" required>
                                        </div>
                                    </div>
                                </div>
                                <!--Car Registration Two Fields Container End-->

                                <!--Car Registration Field Start-->
                                <div class="form-group">
                                    <label class="width-100 mb-0">
                                        <span class="label-title">Color</span>
                                    </label>
                                    <div class="input-group light-field">
                                        <input class="form-control" type="text" name="carcolor" required>
                                    </div>
                                </div>
                                <!--Car Registration Field End-->

                                <!--Car Registration Two Fields Container Start-->
                                <div class="multi-form-container display-flex justify-content-between">
                                    <div class="form-group">
                                        <label class="width-100">
                                            <span class="label-title">Car Registration Number</span>
                                            <input class="form-control text-input font-weight-light" type="text" autocomplete="off" name="car-registration-num" value="LG-287-GL" required>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="width-100">
                                            <span class="label-title">Capacity</span>
                                            <input class="form-control text-input font-weight-light" type="text" autocomplete="off" name="capacity" value="4" required>
                                        </label>
                                    </div>
                                </div>
                                <!--Car Registration Two Fields Container End-->

                                <div class="text-center car-registration-container">
                                    <h4>Please Upload Car Documents Below</h4>
                                </div>

                                <!--Upload Car Pictures Container Start-->
                                <div style="text-align: center;" class="scan-your-card-prompt">
                                    <span>FRONT VIEW OF VEHICLE</span>
                                    <div class="position-relative">
                                        <div class="upload-picture-container mb-0">
                                            <div class="upload-camera-container text-center">
                                                <span class="camera">
                                                    <img src="../icons/photocamera.svg" alt="Camera Icon">
                                                </span>
                                            </div>
                                        </div>
                                        <input name="carimage" class="scan-prompt" type="file" accept="image/*" required>
                                    </div>
                                    <div class="upload-picture-buttons-append">

                                        <span class="float-right delete-btn">
                                            <img src="../icons/delete.svg" alt="Delete Icon">
                                        </span>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                <!--Upload Car Pictures Container End-->

                                <!--Car Registration ID Upload Container Start-->
                                <div class="scan-your-card-prompt">
                                    <div class="upload-picture-buttons-prepend text-center">
                                        <span>VEHICLE LICENSE</span>
                                        <span class="float-right delete-btn">
                                            <img src="../icons/delete.svg" alt="Delete Icon">
                                        </span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="upload-picture-container mb-0">
                                            <div class="upload-camera-container text-center">
                                                <span class="camera">
                                                    <img src="../icons/photocamera.svg" alt="Camera Icon">
                                                </span>
                                            </div>
                                        </div>
                                        <input name="particulars" class="scan-prompt" type="file" accept="image/*" required>
                                    </div>
                                </div>
                                <!--Car Registration ID Upload Container End-->

                                <!--Car Registration ID Upload Container Start-->
                                <div class="scan-your-card-prompt">
                                    <div class="upload-picture-buttons-prepend text-center">
                                        <span>PROOF OF OWNERSHIP</span>
                                        <span class="float-right delete-btn">
                                            <img src="../icons/delete.svg" alt="Delete Icon">
                                        </span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="upload-picture-container mb-0">
                                            <div class="upload-camera-container text-center">
                                                <span class="camera">
                                                    <img src="../icons/photocamera.svg" alt="Camera Icon">
                                                </span>
                                            </div>
                                        </div>
                                        <input name="ProOOwnership" class="scan-prompt" type="file" accept="image/*" required>
                                    </div>
                                </div>
                                <!--Car Registration ID Upload Container End-->

                                <!--Car Registration ID Upload Container Start-->
                                <div class="scan-your-card-prompt">
                                    <div class="upload-picture-buttons-prepend text-center">
                                        <span>VEHICLE INSURANCE</span>
                                        <span class="float-right delete-btn">
                                            <img src="../icons/delete.svg" alt="Delete Icon">
                                        </span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="upload-picture-container mb-0">
                                            <div class="upload-camera-container text-center">
                                                <span class="camera">
                                                    <img src="../icons/photocamera.svg" alt="Camera Icon">
                                                </span>
                                            </div>
                                        </div>
                                        <input name="insurance" class="scan-prompt" type="file" accept="image/*" required>
                                    </div>
                                </div>
                                <!--Car Registration ID Upload Container End-->

                            </div>
                        </div>
                        <!--Car Registration Info Container End-->

                        <div class="register">
                            <input type="submit" class="btn btn-primary text-uppercase col-12" name="create_vehicle" value="Save">

                            <!-- <a href="index.php" class="btn btn-dark " type="button">Submit</a> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'includes/bottom.php'; ?>