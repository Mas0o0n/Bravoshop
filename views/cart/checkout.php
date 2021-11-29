<?php include ROOT . '/views/layouts/header.php'; ?>
<!--header-->

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="register">
        <h2>Checkout</h2>
        <?php if ($result): ?>
<p>Order confirmed. We will call you back!</p>
<?php else: ?>
<p> - <?php echo $totalQuantity; ?> products has been chosen. For <?php echo $totalPrice; ?> $.</p>

<?php if (!$result): ?>
        <div class="col-md-6">
        <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
        <?php foreach ($errors as $error): ?>
        <li> <?php echo $error; ?> </li>
        <?php endforeach; ?>
       </ul>
        <?php endif; ?>
        <p>Fill the form for confirm your order. Our manager will call you back!</p>
        </div>
        <form action="#" method="post">
            <div class="col-md-6  register-top-grid">

                <div class="mation">
                    <span>First Name</span>
                    <input type="text" name="userFName" value="<?php echo $userFName; ?>">

                    <span>Last Name</span>
                    <input type="text" name="userLName" value="<?php echo $userLName; ?>">

                    <span>Phone</span>
                    <input type="text" name="userPhone" value="<?php echo $userPhone; ?>">
                    <span>Comment</span>
                    <input type="text" name="userComment" value="<?php echo $userComment; ?>">

                        <input type="submit" name="submit" value="Submit the order">
                        <div class="clearfix"> </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </form>


    </div>
</div>
<?php endif; ?>
<?php endif; ?>

<!--footer-->

<?php include ROOT . '/views/layouts/footer.php'; ?>