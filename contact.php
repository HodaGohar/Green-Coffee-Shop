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

    <title>Green Coffee - about us page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>contact us</h1>
        </div><!-- ./banner -->

        <div class="title2">
            <a href="home.php">home</a>
            <span> / contact us</span>
        </div><!-- ./ title2-->

        <section class="services">
            <div class="title">
                <img src="./img/download.png" alt="" class="logo">
                <h1>why choose us </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos a temporibus ipsum.</p>
            </div><!-- ./title -->

            <div class="box-container">
                <div class="box">
                    <img src="./img/icon2.png" alt="">
                    <div class="detail">
                        <h3>great savings</h3>
                        <p>save big every order</p>
                    </div><!-- ./detail -->
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/icon1.png" alt="">
                    <div class="detail">
                        <h3>24*7 support </h3>
                        <p>one-on-one support</p>
                    </div><!-- ./detail -->
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/icon0.png" alt="">
                    <div class="detail">
                        <h3>gift vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div><!-- ./detail -->
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/icon.png" alt="">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                        <p>dropship worldwide</p>
                    </div><!-- ./detail -->
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </section>

        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="./img/download.png" alt="">
                    <h1>leave a message</h1>
                </div><!-- ./title -->
                <div class="input-field">
                    <p>your name <sup class="input-sup">*</sup></p>
                    <input type="text" name="name">
                </div><!-- ./input-field -->

                <div class="input-field">
                    <p>your email <sup class="input-sup">*</sup></p>
                    <input type="text" name="email">
                </div><!-- ./input-field -->

                <div class="input-field">
                    <p>your number <sup class="input-sup">*</sup></p>
                    <input type="text" name="number">
                </div><!-- ./input-field -->

                <div class="input-field">
                    <p>your message <sup class="input-sup">*</sup></p>
                    <textarea name="message"></textarea>
                </div><!-- ./input-field -->

                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
        </div><!-- ./form-container -->

        <div class="address">
            <div class="title">
                <img src="./img/download.png" alt="" class="logo">
                <h1>contact detail </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos a temporibus ipsum.</p>
            </div><!-- ./title -->

            <div class="box-container">
                <div class="box">
                    <i class="fa fa-map-pin"></i>
                    <div>
                        <h4>address</h4>
                        <p>1092 merigold lane, coral way</p>
                    </div>
                </div><!-- ./box -->

                <div class="box">
                    <i class="fa fa-phone"></i>
                    <div>
                        <h4>phone number</h4>
                        <p>8866889955</p>
                    </div>
                </div><!-- ./box -->

                <div class="box">
                    <i class="fa fa-map-pin"></i>
                    <div>
                        <h4>email</h4>
                        <p>hodaa.gohar@gmail.com</p>
                    </div>
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </div><!-- ./address -->

        <?php include 'components/footer.php'; ?>
    </div><!-- ./main -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>