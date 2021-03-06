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
                <a href="history.php">
                    <span class="float-left">
                    <img src="../icons/back.svg" alt="Back Icon">
                </span>
                </a>
                <span class="title">Trip Description</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
                </a>
            </div>
            <!--Page Title & Icons End-->

            <div class="rest-container">
                <div class="all-history-items remaining-height">
                    <div class="history-items-container trip-history">
                        <div class="history-item">
                            <div><span class="label-title">Route ID:</span> <span class="font-13">HD345</span></div>
                            <!--Google Map Start-->
                            <div id="map1"></div>
                            <!--Google Map End-->

                            <!--Date & Time Container Start-->
                            <div class="border-bottom-primary thin">
                                <div class="status-container">
                                    <div class="date float-left">
                                        <img src="../icons/calendar-dark.svg" alt="Calendar Icon" class="calendar-icon"> 29 April
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
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text" placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.php" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon"><img src="../icons/circle.svg"  alt="Current Location Icon"></span>
                                            <div class="map-input display-flex border-0 controls flex-1 font-weight-light align-items-center">
                                                Palo Alto
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="online-support">
                                <a href="online-support.php" class="btn btn-dark text-uppercase">Support</a>
                            </div>
                            <!--Address Container End-->

                            <!--Trip Costs Container Start-->
                            <div class="border-bottom-primary thin width-48 border-bottom-light-grey">
                                <div class="text-uppercase trip-fare">Trip Fare</div>
                            </div>

                            <div class="trip-fare-container font-weight-light">
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
                            <!--Trip Costs Container End-->

                            <!--Driver Information Container Start-->
                            <div class="driver-information">
                                <div class="driver-profile">
                                    <div class="float-left">
                                        <img class="img-responsive" src="https://via.placeholder.com/48" alt="Driver Picture">
                                    </div>
                                    <div class="float-left driver-name">Sergey <br/> Gubelmayer</div>
                                    <div class="float-right">
                                        <a href="chat.php" class="btn approved-icon message"><span class="fas fa-comments"></span></a>
                                        <a class="btn approved-icon call"><span class="fas fa-phone text-white"></span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="driver-car-info">
                                    <div class="driver-car-info-item">
                                        <div class="info-container float-left">
                                            <div class="info-container-label">
                                                Car Model:
                                            </div>
                                            <div>
                                                Toyota Prius
                                            </div>
                                        </div>
                                        <div class="info-container float-right">
                                            <div class="info-container-label">
                                                Plate Number:
                                            </div>
                                            <div class="text-right">
                                                GL-278-LG
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="driver-car-info-item">
                                        <div class="info-container float-left">
                                            <div class="info-container-label">
                                                Color:
                                            </div>
                                            <div>
                                                <span class="fas fa-circle"></span> Black
                                            </div>
                                        </div>
                                        <div class="info-container float-right">
                                            <div class="info-container-label">
                                                Ride Type:
                                            </div>
                                            <div class="text-right">
                                                Economy
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Driver Information Container End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/sidebar.php'; ?>
        <?php include 'includes/bottom.php'; ?>