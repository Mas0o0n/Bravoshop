<?php include ROOT. '/views/layouts/header.php'; ?>


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active"> My Account</li>
            </ol>
        </div>
    </div>


    <div class="account">
        <div class="container">
            <h2>Welcome, <?php echo $user['first_name'];?></h2>
            <div class="account_grid">
                <li><a href="/cabinet/edit"><span aria-hidden="true"></span >Edit Account info</a></li>
                <li><a href="/cart"><span aria-hidden="true"></span >Shopping List</a></li>


                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--footer-->



<?php include ROOT . '/views/layouts/footer.php';?>