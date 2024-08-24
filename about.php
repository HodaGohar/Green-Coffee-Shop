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
            <h1>about us</h1>
        </div><!-- ./banner -->

        <div class="title2">
            <a href="home.php">home</a>
            <span> / about</span>
        </div><!-- ./ title2-->

        <div class="about-category">
            <div class="box">
                <img src="./img/3.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./detail -->
            </div><!-- ./box -->

            <div class="box">
                <img src="./img/2.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./detail -->
            </div><!-- ./box -->

            <div class="box">
                <img src="./img/about.png" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon teaname</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./detail -->
            </div><!-- ./box -->

            <div class="box">
                <img src="./img/1.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./detail -->
            </div><!-- ./box -->
        </div><!-- ./about-category -->

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

        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="./img/3.png" alt="">
                </div><!-- ./img-box -->
                <div class="detail">
                    <h1>visit our beautiful showroom!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias quis tempore voluptas totam pariatur dolor, saepe autem quia officia ratione inventore quae consectetur dolore! Quae ullam reprehenderit vel fugiat? Distinctio</p>
                    <a href="view-products.php" class="btn">shop now</a>
                </div><!-- ./detail -->
            </div><!-- ./row -->
        </div><!-- ./about -->

        <div class="testimonial-container">
            <div class="title">
                <img src="./img/download.png" alt="" class="logo">
                <h1>what people say about us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam omnis provident itaque, quas perferendis cupiditate! Rem possimus quis vitae accusantium?</p>
            </div><!-- ./title -->

            <div class="container">
                <div class="testimonial-item active">
                    <img src="./img/01.jpg" alt="">
                    <h1>sara smith</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, eum id quibusdam rem et ullam autem dolore ea quas sunt.</p>
                </div><!-- ./testimonial-item -->

                <div class="testimonial-item ">
                    <img src="./img/02.jpg" alt="">
                    <h1>jhon smith</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, eum id quibusdam rem et ullam autem dolore ea quas sunt.</p>
                </div><!-- ./testimonial-item -->

                <div class="testimonial-item ">
                    <img src="./img/03.jpg" alt="">
                    <h1>selena ansari</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, eum id quibusdam rem et ullam autem dolore ea quas sunt.</p>
                </div><!-- ./testimonial-item -->

                <div class="testimonial-item ">
                    <img src="./img/04.jpg" alt="">
                    <h1>selena ansari</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, eum id quibusdam rem et ullam autem dolore ea quas sunt.</p>
                </div><!-- ./testimonial-item -->

                <div class="left-arrow" onclick="nextSlide()"><i class="fa fa-caret-left"></i></div><!-- ./left-arrow -->
                <div class="right-arrow" onclick="prevSlide()"><i class="fa fa-caret-right"></i></div><!-- ./left-arrow -->

            </div><!-- ./container -->
        </div><!-- ./testimonial-container -->

        <?php include 'components/footer.php'; ?>
    </div><!-- ./main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>