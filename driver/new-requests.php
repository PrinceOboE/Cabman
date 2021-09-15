<?php include 'includes/top.php'; ?>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100">
    <div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center header-icons-container-with-other">
            <div>
                <a href="index.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span class="title">New Requests</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--Page Title & Icons End-->

        <!--Sticky Notification Container Start-->
        <a href="new-requests.php" class="href-decoration-none notification-request">
            <div class="request-notification-container">
                <span class="num">3</span> New Requests!
                <div class="font-weight-light">
                    Please accept or decline request
                </div>
            </div>
        </a>
        <!--Sticky Notification Container End-->

        <div class="rest-container new-request">
            <div class="all-history-items all-history-items-driver remaining-height">

                <!--Request Item Container Start-->
                <div class="request-item-container">
                    <div class="profile-picture text-center">
                        <img src="https://via.placeholder.com/65" alt="Profile Picture">
                    </div>
                    <div class="history-items-container">
                        <div class="history-item">

                            <!--Profile Information Container Start-->
                            <div class="profile-information text-center">
                                <div class="profile-information">
                                    <div class="profile-name font-18">Amanda Legren</div>
                                </div>
                            </div>
                            <!--Profile Information Container End-->

                            <!--Wishes Container Start-->
                            <div class="notification-container">
                                <div class="grey-label">Wishes</div>
                                <div class="border-bottom-primary">
                                    <p class="grey-label font-weight-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                                    </p>
                                </div>
                            </div>
                            <!--Wishes Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                   placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.php" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon">
                                                <img src="../icons/circle.svg"  alt="Current Location Icon">
                                            </span>
                                            <div class="map-input mr-0 display-flex border-0 controls flex-1 font-weight-normal align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--All Trip Fares Container Start-->
                            <div class="all-trip-fares trip-fare-request">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Trip Fare</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">
                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Estimate Price</span>
                                        <span class="float-right blue-price">$12.30</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->

                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance</span>
                                        <span class="float-right blue-price">5.54 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->

                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance from Customer</span>
                                        <span class="float-right blue-price">0.740 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->

                                </div>
                            </div>
                            <!--All Trip Fares Container End-->

                            <!--Accept or Decline Container Start-->
                            <div class="request-btn-container display-flex justify-content-between">
                                <div class="request-btn">
                                    <button type="button" class="btn btn-transparent decline text-uppercase">Decline</button>
                                </div>
                                <div class="request-btn">
                                    <a href="index.php?accepted=1" class="btn btn-primary w-100 font-weight-light text-uppercase">Accept</a>                                </div>
                            </div>
                            <!--Accept or Decline Container End-->

                        </div>
                    </div>
                </div>
                <!--Request Item Container End-->

                <!--Request Item Container Start-->
                <div class="request-item-container">
                    <div class="profile-picture text-center">
                        <img src="https://via.placeholder.com/65" alt="Profile Picture">
                    </div>
                    <div class="history-items-container">
                        <div class="history-item">

                            <!--Profile Information Container Start-->
                            <div class="profile-information text-center">
                                <div class="profile-information">
                                    <div class="profile-name font-18">Amanda Legren</div>
                                </div>
                            </div>
                            <!--Profile Information Container End-->

                            <!--Wishes Container Start-->
                            <div class="notification-container">
                                <div class="grey-label">Wishes</div>
                                <div class="border-bottom-primary">
                                    <p class="grey-label font-weight-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                                    </p>
                                </div>
                            </div>
                            <!--Wishes Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                   placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.php" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon">
                                                <img src="../icons/circle.svg"  alt="Current Location Icon">
                                            </span>
                                            <div class="map-input mr-0 display-flex border-0 controls flex-1 font-weight-normal align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--All Trip Fares Container Start-->
                            <div class="all-trip-fares trip-fare-request">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Trip Fare</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">
                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Estimate Price</span>
                                        <span class="float-right blue-price">$12.30</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->

                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance</span>
                                        <span class="float-right blue-price">5.54 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->

                                    <!--Trip Fares Item Container Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance from Customer</span>
                                        <span class="float-right blue-price">0.740 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fares Item Container End-->
                                </div>
                            </div>
                            <!--All Trip Fares Container End-->

                            <!--Accept or Decline Container Start-->
                            <div class="request-btn-container display-flex justify-content-between">
                                <div class="request-btn">
                                    <button type="button" class="btn btn-transparent decline text-uppercase">Decline</button>
                                </div>
                                <div class="request-btn">
                                    <a href="index.php?accepted=1" class="btn btn-primary w-100 font-weight-light text-uppercase">Accept</a>
                                </div>
                            </div>
                            <!--Accept or Decline Container End-->

                        </div>
                    </div>
                </div>
                <!--Request Item Container End-->

                <!--Request Item Container Start-->
                <div class="request-item-container">
                    <div class="profile-picture text-center">
                        <img src="https://via.placeholder.com/65" alt="Profile Picture">
                    </div>
                    <div class="history-items-container">
                        <div class="history-item">

                            <!--Profile Information Container Start-->
                            <div class="profile-information text-center">
                                <div class="profile-information">
                                    <div class="profile-name font-18">Amanda Legren</div>
                                </div>
                            </div>
                            <!--Profile Information Container End-->

                            <!--Wishes Container Start-->
                            <div class="notification-container">
                                <div class="grey-label">Wishes</div>
                                <div class="border-bottom-primary">
                                    <p class="grey-label font-weight-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                                    </p>
                                </div>
                            </div>
                            <!--Wishes Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                   placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.php" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                           <span class="map-input-icon">
                                                <img src="../icons/circle.svg"  alt="Current Location Icon">
                                            </span>
                                            <div class="map-input mr-0 display-flex border-0 controls flex-1 font-weight-normal align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--All Trip Fares Container Start-->
                            <div class="all-trip-fares trip-fare-request">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Trip Fare</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">
                                    <div class="trip-fare-item">
                                        <span class="float-left">Estimate Price</span>
                                        <span class="float-right blue-price">$12.30</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance</span>
                                        <span class="float-right blue-price">5.54 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="trip-fare-item">
                                        <span class="float-left">Distance from Customer</span>
                                        <span class="float-right blue-price">0.740 km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                            </div>
                            <!--All Trip Fares Container End-->

                            <!--Accept or Decline Container Start-->
                            <div class="request-btn-container display-flex justify-content-between">
                                <div class="request-btn">
                                    <button type="button" class="btn btn-transparent decline text-uppercase">Decline</button>
                                </div>
                                <div class="request-btn">
                                    <a href="index.php?accepted=1" class="btn btn-primary w-100 font-weight-light text-uppercase">Accept</a>
                                </div>
                            </div>
                            <!--Accept or Decline Container End-->
                        </div>
                    </div>
                </div>
                <!--Request Item Container End-->

            </div>
        </div>
    </div>

    <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>