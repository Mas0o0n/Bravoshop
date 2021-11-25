<?php include ROOT. '/views/layouts/header.php'; ?>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="register">

            <div class="mation">
                <?php if ($result): ?>
                    <h2>Account information edited!</h2>
                        <?php else: ?>

                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif ?>

            </div>

            <form action="#" method="post">
                <div class="col-md-6  register-top-grid">
                    <h2>Edit your account information</h2>
                    <div class="mation">
                        <span>First Name</span>
                        <input type="text" name="firstname" value="<?php echo $fname; ?>">

                        <span>Last Name</span>
                        <input type="text" name="lastname" value="<?php echo $lname; ?>">

                        </div>
                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
                    </a>
                </div>

                <div class=" col-md-6 register-bottom-grid">
                    <div class="mation">
                        <span>Password</span>
                        <input type="password" name="password" value="<?php echo $password; ?>">
                    </div>
                </div>
                <div class="clearfix"> </div>

                <div class="register-but">
                    <input type="submit" value="Save Changes" name="submit">
                    <div class="clearfix"> </div>
            </form>

            <?php endif ?>
        </div>
    </div>


<?php include ROOT . '/views/layouts/footer.php';?>