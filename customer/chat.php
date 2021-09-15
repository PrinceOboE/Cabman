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
            <a href="index.php">
                <span class="float-left">
                    <img src="../icons/back.svg" alt="Back Icon">
                </span>
            </a>
            <span class="title">Chat</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container chat-rest-container">
            <div class="chat-container">

                <!-- Draft Message Example Container for Future Messages Start-->
                <div class="left-align-message hidden example">
                    <div class="message-info">
                        <div>
                            <span class="icon"><img src="../icons/calendar.svg" alt="Calendar Icon" class="calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content">
                        Hello
                    </div>
                    <div class="profile-picture">
                        <span class="fas fa-circle status"></span>
                        <img src="https://via.placeholder.com/32x32" class="profile-picture-image" alt="Profile Picture Image">
                    </div>
                </div>
                <!-- Draft Message Example Container for Future Messages End-->

                <!--Left Aligned Message Start-->
                <div class="left-align-message">
                    <div class="message-info">
                        <div>
                            <span class="icon"><img src="../icons/calendar.svg" alt="Calendar Icon" class="calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content">
                        Hello
                    </div>
                    <div class="profile-picture">
                        <span class="fas fa-circle status"></span>
                        <img src="https://via.placeholder.com/32x32" class="profile-picture-image" alt="Profile Picture Image">
                    </div>
                </div>
                <!--Left Aligned Message End-->

                <!--Left Aligned Message Start-->
                <div class="left-align-message">
                    <div class="message-info">
                        <div>
                            <span class="icon"><img src="../icons/calendar.svg" alt="Calendar Icon" class="calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content">
                        I am waiting for you now
                    </div>
                    <div class="profile-picture">
                        <span class="fas fa-circle status"></span>
                        <img src="https://via.placeholder.com/32x32" class="profile-picture-image" alt="Profile Picture Image">
                    </div>
                </div>
                <!--Left Aligned Message End-->

                <!--Right Aligned Message Start-->
                <div class="right-align-message">
                    <div class="message-info">
                        <div>
                            <span class="icon"><img src="../icons/calendar.svg" alt="Calendar Icon" class="icon calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content">
                        Hello
                    </div>
                    <div class="profile-picture">
                        <img src="https://via.placeholder.com/32x32" alt="Profile Picture" class="profile-picture-image">
                        <span class="fas fa-circle status"></span>
                    </div>
                </div>
                <!--Right Aligned Message End-->

                <!--Right Aligned Message Start-->
                <div class="right-align-message">
                    <div class="message-info">
                        <div>
                            <span><img src="../icons/calendar.svg" alt="Calendar Icon" class="icon calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content">
                        Please let me know more about your location
                    </div>
                    <div class="profile-picture">
                        <img src="https://via.placeholder.com/32x32"  alt="Profile Picture" class="profile-picture-image">
                        <span class="fas fa-circle status"></span>
                    </div>
                </div>
                <!--Right Aligned Message End-->

                <!--Left Aligned Message Start-->
                <div class="left-align-message">
                    <div class="message-info">
                        <div>
                            <span class="icon"><img src="../icons/calendar.svg" alt="Calendar Icon" class="calendar-icon"></span> Oct. 16
                        </div>
                        <div>
                            <span class="icon fas fa-clock"></span> 05:37 PM
                        </div>
                    </div>
                    <div class="message-content dots">
                        ...
                    </div>
                    <div class="profile-picture">
                        <span class="fas fa-circle status"></span>
                        <img src="https://via.placeholder.com/32x32" class="profile-picture-image" alt="Profile Picture Image">
                    </div>
                </div>
                <!--Left Aligned Message End-->
            </div>

            <!--Send Message Container Start-->
            <div class="send-message">
                <div class="send-message-container width-100">
                        <img src="../icons/plus-blue.svg" alt="Plus Icon">
                        <img src="../icons/photocamera.svg" alt="Camera Icon">
                        <input type="text" autocomplete="off" name="message" class="message-input">
                        <span class="fas fa-paper-plane send-chat blue-icon"></span>
                        <img src="../icons/microphone.svg" alt="Microphone Icon">
                </div>
            </div>
            <!--Send Message Container End-->

        </div>
    </div>

    <?php include 'includes/sidebar.php'; ?>
<?php include 'includes/bottom.php'; ?>
