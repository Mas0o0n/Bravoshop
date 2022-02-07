<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>
<!---->

<div class="container">
    <div class="check-out">
        <h2>Checkout</h2>

        <?php if ($productsInCart): ?>
        <table >
            <tr>
                <th>Item</th>
                <th>Price, $</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>

<?php foreach ($products as $product): ?>
            <tr>

                <td class="ring-in"><a href="/product/<?php echo $product['id'];?>" class="at-in"><img src="<?php echo $product['image'];?>" class="img-responsive" alt=""></a>
                    <div class="sed">
                        <h5><?php echo $product['name']; ?></h5>
                        <p>code: <?php echo $product['code']; ?> </p>
                    </div>
                    <div class="clearfix"> </div></td>

                <td><?php echo $product['price']; ?></td>
                <td><?php echo $productsInCart[$product['id']];?></td>
                <td>
                    <a href="/cart/delete/<?php echo $product['id'];?>">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
    <?php endforeach; ?>
           <tr>
               <td colspan="3">Total cost: </td>
               <td><?php echo $totalPrice; ?></td>
           </tr>
        </table>
<?php else: ?>
<h1>Your Cart is empty!</h1>
<?php endif; ?>

        <a href="/cart/checkout/" class=" to-buy">OK</a>
        <div class="clearfix"> </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>