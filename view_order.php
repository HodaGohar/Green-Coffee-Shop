<?php include 'components/connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
}else{
    $get_id = '';
    header("location: order.php");
}
if (isset($_POST['cancle'])) {
    $update_order = $conn->prepare("UPDATE `orders` SET status = ? WHERE id=?");
    $update_order->execute(['canceled',$get_id]);
    header("location: order.php");
}

?>

<style type="text/css">
    <?php include 'css/style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <title>Green Coffee - order detail page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>order detail</h1>
        </div><!-- ./banner -->

        <div class="title2">
            <a href="home.php">home</a>
            <span> / order detail</span>
        </div><!-- ./ title2-->

        <section class="order-detail">
            <div class="title">
                <img src="./img/download.png" class="logo" alt="">
                <h1>order detail</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore magni, unde accusamus modi voluptates et.</p>
            </div><!-- ./title -->
            <div class="box-container">
                <?php
                $grand_total = 0;
                $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE id = ?  LIMIT 1");
                $select_orders->execute([$get_id]);
                if ($select_orders->rowCount() > 0) {
                    while ($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                        $select_product = $conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
                        $select_product->execute([$fetch_order['product_id']]);
                        if ($select_product->rowCount() > 0) {
                            while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {
                                $sub_total = ($fetch_order['price'] * $fetch_order['qty']);
                                $grand_total += $sub_total;
                ?>
                                <div class="box">
                                    <div class="col">
                                        <p class="title"><i class="fa fa-calendar-o"></i><?= $fetch_order['qty']; ?></p>
                                        <img src="./img/<?= $fetch_product['image']; ?>" class="img" alt="">
                                        <p class="price"><?= $fetch_product['price']; ?> x <?= $fetch_order['qty']; ?></p>
                                        <h3 class="name"><?= $fetch_product['name']; ?></h3>
                                        <p class="grand-total">Total amount payable : <span>$<?= $grand_total; ?></span></p>
                                    </div><!-- ./col -->
                                    <div class="col">
                                        <p class="title">billing address</p>
                                        <p class="user"><i class="fa fa-users"></i><?= $fetch_order['name']; ?></p>
                                        <p class="user"><i class="fa fa-mobile"></i><?= $fetch_order['number']; ?></p>
                                        <p class="user"><i class="fa fa-envelope-o"></i><?= $fetch_order['email']; ?></p>
                                        <p class="user"><i class="fa fa-map-pin"></i><?= $fetch_order['address']; ?></p>
                                        <p class="title">status</p>
                                        <p class="status" style="color:<?php if ($fetch_order['status'] == 'delevered') {
                                                                            echo 'green';
                                                                        } elseif ($fetch_order['status'] == 'canceled') {
                                                                            echo 'red';
                                                                        } else {
                                                                            echo 'orange';
                                                                        } ?>">
                                            <?= $fetch_order['status']  ?>
                                        </p>

                                        <?php if ($fetch_order['status'] == 'canceled') { ?>
                                        <a href="checkout.php?get_id=<?=$fetch_product['id']; ?>" class="btn">order again</a>
                                       <?php }else{ ?>
                                        <form action="" method="post">
                                            <button type="submit" name="cancle" class="btn" 
                                            onclick="return confirm('do you want to cancle this order')">cancle</button>
                                        </form>
                                        <?php } ?>
                                    </div><!-- ./col -->
                                </div><!-- ./box -->
                <?php
                            }
                        } else {
                            echo '<p class="empty">product not found</p>';
                        }
                    }
                } else {
                    echo '<p class="empty">no order found</p>';
                }
                ?>
            </div><!-- ./box-container -->
        </section>

        <?php include 'components/footer.php'; ?>
    </div><!-- ./main -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>