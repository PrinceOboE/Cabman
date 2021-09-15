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
            <div class="header-icons-container text-center">
                <a href="sales-history.php">
                    <span class="float-left">
                        <img src="../icons/back.svg" alt="Back Icon">
                    </span>
                </a>
                <span class="title">Route ID #GD34562</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                    </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container trip-description">
                <div class="all-history-items all-history-items-driver remaining-height">
                    <div class="profile-picture text-center">
                        <img src="https://via.placeholder.com/76" alt="Profile Picture">
                    </div>
                    <div class="history-items-container">
                        <div class="history-item">

                            <!--Profile Info Start-->
                            <div class="profile-information text-center">
                                <div class="profile-information">
                                    <div class="profile-name font-18">John Legran</div>
                                </div>
                                <div class="rating">
                                    <div class="text-uppercase grey-label font-helvetica font-11 font-weight-light">RATED:</div>
                                    <div class="rating">
                                        <span class="fas fa-star font-weight-light"></span>
                                        <span class="fas fa-star font-weight-light"></span>
                                        <span class="fas fa-star font-weight-light"></span>
                                        <span class="fas fa-star font-weight-light"></span>
                                        <span class="fas fa-star font-weight-light"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Profile Info End-->

                            <!--Notification Info Start-->
                            <div class="notification-container">
                                <div class="grey-label">Notification</div>
                                <p class="grey-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor. Fusce ut diam non enim elementum interdum. venenatis nec neque. Aliquam rhoncus sapien lectus, ac pulvin
                                </p>
                            </div>
                            <!--Notification Info End-->

                            <div><span class="grey-label">Route ID:</span> GD345</div>

                            <!--Google Maps Start-->
                            <div id="map1"></div>
                            <!--Google Maps End-->

                            <!--Date & Time Container Start-->
                            <div class="border-bottom-primary">
                                <div class="status-container status-container-driver">
                                    <div class="date float-left">
                                        <span>
                                            <img src="../icons/calendar-dark.svg" alt="Calendar Icon" class="calendar-icon">
                                        </span> 29 April
                                    </div>
                                    <div class="status-none float-right text-uppercase">
                                        <span class="fas fa-clock font-weight-light"></span> 16:12
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--Date & Time Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                        <div class="map-input display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text" placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="#" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon"><img src="../icons/circle.svg" alt="Current Location Icon"></span>
                                            <div class="map-input display-flex controls flex-1 font-weight-light align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="all-trip-fares">
                                    <div class="border-bottom-primary border-bottom-light-grey">
                                        <div class="text-uppercase trip-fare">Trip Fare</div>
                                    </div>
                                    <div class="trip-fare-container trip-fare-driver font-weight-light">
                                        <div class="trip-fare-item">
                                            <span class="float-left">Credit Card</span>
                                            <span class="float-right blue-price">$12.30</span>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="trip-fare-item">
                                            <span class="float-left">Tip</span>
                                            <span class="float-right blue-price">$2.00</span>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="trip-fare-item">
                                            <span class="float-left">Total Paid Amount</span>
                                            <span class="float-right blue-price">$14.30</span>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Address Container End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>