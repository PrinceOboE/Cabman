<?php include 'includes/top.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fas fa-car"></i>
                    <div class="count">6674</div>
                    <div class="title">Pending Drivers</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fas fa-taxi"></i>
                    <div class="count">1426</div>
                    <div class="title">Approved Drivers</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fas fa-user-friends"></i>
                    <div class="count">7538</div>
                    <div class="title">Registers Riders</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">4362</div>
                    <div class="title">Rides Taken</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

        </div>
        <!--/.row-->
        <!-- Today status end -->

        <!-- project team & activity start -->
        <div class="row">
            <div class="col-lg-12">
                <!--Project Activity start-->
                <section class="panel">
                    <div class="panel-body progress-panel">
                        <div class="row">
                            <div class="col-lg-8 task-progress pull-left">
                                <h1>To Do Everyday</h1>
                            </div>
                            <div class="col-lg-4">
                                <span class="profile-ava pull-right">
                                    <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    Jenifer smith
                                </span>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                            <tr>
                                <td>Today</td>
                                <td>
                                    web design
                                </td>
                                <td>
                                    <span class="badge bg-important">Upload</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Yesterday</td>
                                <td>
                                    Project Design Task
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress2"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>21-10-14</td>
                                <td>
                                    Generate Invoice
                                </td>
                                <td>
                                    <span class="badge bg-success">Task</span>
                                </td>
                                <td>
                                    <div id="work-progress3"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>22-10-14</td>
                                <td>
                                    Project Testing
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>24-10-14</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-info">Milestone</span>
                                </td>
                                <td>
                                    <div id="work-progress4"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>28-10-14</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <div id="work-progress5"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Last week</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-primary">To-Do</span>
                                </td>
                                <td>
                                    <div id="work-progress1"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>last month</td>
                                <td>
                                    Project Release Date
                                </td>
                                <td>
                                    <span class="badge bg-success">To-Do</span>
                                </td>
                                <td>
                                    <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <!--Project Activity end-->
            </div>
        </div><br><br>
        <!-- project team & activity end -->

    </section>
    <?php include 'includes/bottom.php'; ?>