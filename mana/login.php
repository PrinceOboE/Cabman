<?php include 'includes/top.php'; ?>
<body class="login-img3-body">

    <div class="container">

        <form class="login-form" action="includes/login.php" method="post">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="email" class="form-control" placeholder="Email Address" required name="email" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                </div>
                <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
                <button style="color: whitesmoke!important;" name="login" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </div>
        </form>
    <?php include 'includes/bottom.php'; ?>