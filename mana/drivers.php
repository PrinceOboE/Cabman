<?php include 'includes/top.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Riders List
                    </header>

                    <div class=" table-responsive">
                        <table class="table table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="fab fa-slack-hash"></i> ID</th>
                                    <th><i class="icon_profile"></i> Full Name</th>
                                    <th><i class="icon_calendar"></i> Sign-up Date</th>
                                    <th><i class="icon_mail_alt"></i> Email</th>
                                    <th><i class="icon_pin_alt"></i> Adress</th>
                                    <th><i class="icon_mobile"></i> Mobile</th>
                                    <th><i class="icon"></i> Status</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <?php
                                $query               = "SELECT * FROM userd ";
                                $select_user_query   = mysqli_query($connection, $query);
                                if (!$select_user_query) {
                                    die("QUERY FAILED" . mysqli_error($connection));
                                } else {
                                    while ($row = mysqli_fetch_array($select_user_query)) {
                                        $db_user_fname             = $row['fname'];
                                        $db_user_address           = $row['user_address'];
                                        $db_lastname               = $row['lname'];
                                        $db_state                  = $row['state'];
                                        $db_pnumber                = $row['pnumber'];
                                        $db_user_date              = $row['user_date'];
                                        $db_email_address          = $row['email_address'];
                                        $db_unique_id              = $row['unique_id'];
                                ?>
                                        <tr>
                                            <td><?php echo $db_unique_id ?></td>
                                            <td><?php echo $db_user_fname . " " . $db_lastname ?></td>
                                            <td><?php echo $db_user_date ?></td>
                                            <td><?php echo $db_email_address ?></td>
                                            <td><?php echo $db_user_address ?></td>
                                            <td><?php echo $db_pnumber ?></td>
                                            <td><?php echo $db_state ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary" href="profile.php?p_id==<?php echo $db_unique_id ?>"><i class="icon_plus_alt2"></i></a>
                                                    <a class="btn btn-success" href="drivers.php?approved=<?php echo $db_unique_id ?>"><i class="icon_check_alt2"></i></a>
                                                    <a class="btn btn-danger" href="drivers.php?unapproved=<?php echo $db_unique_id ?>"><i class="icon_close_alt2"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                                <?php


                                if (isset($_GET['approved'])) {
                                    $the_users_id = $_GET['approved'];

                                    $query = "UPDATE userd SET state = 'approved' WHERE unique_id = {$the_users_id}  ";
                                    $approved_users_query = mysqli_query($connection, $query);

                                    header("Location: drivers.php");
                                }


                                if (isset($_GET['unapproved'])) {
                                    $the_users_id = $_GET['unapproved'];

                                    $query = "UPDATE userd SET state = 'unapproved' WHERE unique_id = {$the_users_id} ";
                                    $unapproved_users_query = mysqli_query($connection, $query);

                                    header("Location: drivers.php");
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<?php include 'includes/bottom.php'; ?>