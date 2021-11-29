<?php include ROOT. '/views/layouts/header.php'; ?>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login</li>
            </ol>
        </div>
    </div>


    <div class="account">
        <div class="container">
            <h2>Login</h2>
            <div class="account_grid">

                <?php if (isset($errors) && is_array ($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li>  <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <div class="col-md-6 login-right">
                    <form action="#" method="post">

                        <span>Email Address</span>
                        <input type="text" name="email">

                        <span>Password</span>
                        <input type="password" name="password">

                        <div class="word-in">
                            <a class="forgot" href="#">Forgot Your Password?</a>
                            <input type="submit" value="Login" name="submit">
                        </div>

                    </form>
                </div>
                <div class="col-md-6 login-left">
                    <h4>NEW CUSTOMERS</h4>
                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a class="acount-btn" href="/user/register">Create an Account</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--footer-->



<?php include ROOT . '/views/layouts/footer.php';?>