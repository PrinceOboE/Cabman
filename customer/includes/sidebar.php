<?php

// $db_email_address   = $_SESSION['email_address'];
// $db_user_fname      = $_SESSION['firstname'];
// $db_profileimg      = $_SESSION['profileimg'];
// $db_user_status     = $_SESSION['user_status'];
// $db_user_type       = $_SESSION['user_type'];
// $db_user_address    = $_SESSION['user_address'];
// $db_unique_id       = $_SESSION['unique_id'];
// $db_user_id         = $_SESSION['user_id'];
// $db_pnumber         = $_SESSION['pnumber'];
// $db_gender          = $_SESSION['gender'];

?>
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
                        <h4 class="profile-email font-weight-light"><b>Wallet ID:</b> <?php echo $_SESSION['unique_id']?></h4>
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
                        <span class="menu-item-icon menu-dark profile">
                            <img src="../icons/ic_bank.svg" alt="Avatar Darker Icon">
                        </span>
                        <span class="menu-item-icon menu-light profile">
                            <img src="../icons/ic_bank.svg" alt="Avatar Darker Icon">
                        </span>
                        <span class="menu-item-title profile">My Dashboard</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="payment-method.php">
                        <span class="menu-item-icon far fa-money-bill-alt"></span>
                        <span class="menu-item-title">Payment Methods</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="history.php">
                        <span class="menu-item-icon menu-light">
                            <img src="../icons/history-light.svg" alt="History Icon">
                        </span>
                        <span class="menu-item-icon menu-dark">
                            <img src="../icons/history.svg" alt="History Icon">
                        </span>
                        <span class="menu-item-title">My Rides History</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="addresses.php">
                        <span class="menu-item-icon menu-dark">
                            <img src="../icons/my-addresses-dark.svg" alt="My Addresses Icon">
                        </span>
                        <span class="menu-item-icon menu-light">
                            <img src="../icons/my-addresses.svg" alt="My Addresses Icon">
                        </span>
                        <span class="menu-item-title">My Addresses</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="notifications.php">
                        <span class="menu-item-icon menu-dark support">
                            <img src="../icons/support.svg" alt="Support Icon">
                        </span>
                        <span class="menu-item-icon menu-light support">
                            <img src="../icons/support-light.svg" alt="Support Lighter Icon">
                        </span>
                        <span class="menu-item-title">Notifications</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="apply-promo.php">
                        <span class="menu-item-icon far fa-plus-square"></span>
                        <span class="menu-item-title promo">Apply Promo Code</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="online-support.php">
                        <span class="menu-item-icon menu-dark support">
                            <img src="../icons/support.svg" alt="Support Icon">
                        </span>
                        <span class="menu-item-icon menu-light support">
                            <img src="../icons/support-light.svg" alt="Support Lighter Icon">
                        </span>
                        <span class="menu-item-title">Complaints</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="chat\users.php">
                        <span class="menu-item-icon menu-dark support">
                            <img src="../icons/support.svg" alt="Support Icon">
                        </span>
                        <span class="menu-item-icon menu-light support">
                            <img src="../icons/support-light.svg" alt="Support Lighter Icon">
                        </span>
                        <span class="menu-item-title">Contact Support</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                    <a class="menu-item" href="settings.php">
                        <span class="menu-item-icon menu-dark setting">
                            <img src="../icons/settings.svg" alt="My Settings Icon">
                        </span>
                        <span class="menu-item-icon menu-light setting">
                            <img src="../icons/settings-light.svg" alt="My Settings Icon">
                        </span>
                        <span class="menu-item-title">Settings</span>
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
                    <a href="includes/clear-session.php" name="clear" class="menu-item margin-top-auto">
                        <span class="menu-item-icon menu-dark logout">
                            <img src="../icons/logout.svg" alt="Logout Icon">
                        </span>
                        <span class="menu-item-icon menu-light logout">
                            <img src="../icons/logout-light.svg" alt="Logout Icon">
                        </span>
                        <span type="submit" class="menu-item-title logout">Logout</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!--Main Menu End-->