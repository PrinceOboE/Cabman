<!--Main Menu Start-->
<div class="main-menu hidden-soft">
    <div class="mini-profile-info">
        <div class="menu-close">
            <span class="float-right">
                <img src="../icons/close.svg" alt="Close Icon">
            </span>
        </div>
        <div class="profile-picture text-center">
            <img style="height: 200px; width: 200px; object-fit: cover; border-radius: 50%;" src="..\images\avatar\<?php echo $_SESSION['profileimg'] ?>" alt="Profile Picture">
        </div>
        <div style="text-align: center;" class="profile-info">
            <h4 class="profile-name"><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></h4>
            <h6 class="profile-email font-weight-light"><?php echo $_SESSION['email_address'] ?></h6>
            <h4 class="profile-email font-weight-light"><b>Wallet ID:</b> 234-556778</h4>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="index.php">
                <div>
                    <span class="menu-item-icon menu-dark">
                        <img src="../icons/home.svg" alt="Home Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                        <img src="../icons/home-light.svg" alt="Home Lighter Icon">
                    </span>
                    <span class="menu-item-title">Home</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            <a class="menu-item" href="profile.php">
                <span class="menu-item-icon menu-dark profile">
                    <img src="../icons/avatar-dark.svg" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-icon menu-light profile">
                    <img src="../icons/avatar.svg" alt="Avatar Darker Icon">
                </span>
                <span class="menu-item-title profile">My Profile</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="dashboard.php">
                <span class="menu-item-icon menu-dark">
                    <img src="../icons/my-wallet.svg" alt="Wallet Icon">
                </span>
                <span class="menu-item-icon menu-light">
                    <img src="../icons/my-wallet-light.svg" alt="Wallet Icon">
                </span>
                <span class="menu-item-title">My Dashboard</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="driver-registration.php">
                <span class="menu-item-icon menu-dark">
                    <img src="../icons/driver-registration-dark.svg" alt="Driver Registration Icon">
                </span>
                <span class="menu-item-icon menu-light">
                    <img src="../icons/driver-registration.svg" alt="Driver Registration Icon">
                </span>
                <span class="menu-item-title">Upload Documents</span>
                <span class="menu-item-click fas fa-check green-status"></span>
            </a>
            <a class="menu-item position-relative" href="notifications.php">
                <span class="menu-item-icon menu-dark">
                    <img src="../icons/notification.svg" alt="Notification Icon">
                </span>
                <span class="menu-item-icon menu-light">
                    <img src="../icons/notification-light.svg" alt="Notification Icon">
                </span>
                <span class="menu-item-title">Notifications</span>
                <span class="notification-num">3</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="chat/">
                <span class="menu-item-icon menu-dark support">
                    <img src="../icons/support.svg" alt="Support Icon">
                </span>
                <span class="menu-item-icon menu-light support">
                    <img src="../icons/support-light.svg" alt="Support Lighter Icon">
                </span>
                <span class="menu-item-title">Contact Support</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="FAQs.php">
                <span class="menu-item-icon menu-dark support">
                    <img src="../icons/support.svg" alt="Support Icon">
                </span>
                <span class="menu-item-icon menu-light support">
                    <img src="../icons/support-light.svg" alt="Support Lighter Icon">
                </span>
                <span class="menu-item-title">FAQs</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a href="includes/clear-session.php" class="menu-item margin-top-auto">
                <span class="menu-item-icon menu-dark logout">
                    <img src="../icons/logout.svg" alt="Logout Icon">
                </span>
                <span class="menu-item-icon menu-light logout">
                    <img src="../icons/logout-light.svg" alt="Logout Icon">
                </span>
                <span class="menu-item-title logout">Log out</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
</div>
<!--Main Menu End-->