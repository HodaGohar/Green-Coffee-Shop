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

    <title>Green Coffee - home page</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">

        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsum dolor sit.</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, odit atque! Repellendus!</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./slide-detail -->
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div><!-- ./slider__slider -->

                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>welcom to my shop</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, odit atque! Repellendus!</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./slide-detail -->
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div><!-- ./slider__slider -->

                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsum dolor sit.</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, odit atque! Repellendus!</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./slide-detail -->
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div><!-- ./slider__slider -->

                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsum dolor sit.</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, odit atque! Repellendus!</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./slide-detail -->
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div><!-- ./slider__slider -->

                <div class="slider__slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsum dolor sit.</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, odit atque! Repellendus!</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./slide-detail -->
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div><!-- ./slider__slider -->

                <div class="left-arrow"><i class="fa fa-caret-left fa-2x"></i></div>
                <div class="right-arrow"><i class="fa fa-caret-right fa-2x"></i></div>
            </div><!-- ./slider -->
        </section><!-- ./home-section -->

        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="./img/thumb2.jpg" alt="">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <i class="fa fa-chevron-right"></i>
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/thumb0.jpg" alt="">
                    <h3>lemon tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <i class="fa fa-chevron-right"></i>
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/thumb1.jpg" alt="">
                    <h3>green Coffee</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <i class="fa fa-chevron-right"></i>
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/thumb.jpg" alt="">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <i class="fa fa-chevron-right"></i>
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </section>

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="./img/about-us.jpg" alt="">
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/download.png" alt="">
                    <span>healthy tea</span>
                    <h1>save up to 50% off</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est recusandae dicta nostrum voluptas</p>
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </section>

        <section class="shop">
            <div class="title">
                <img src="./img/download.png" alt="">
                <h1>trending products</h1>
            </div><!-- ./title -->
            <div class="row">
                <img src="./img/about.jpg" alt="">
                <div class="row-detail">
                    <img src="./img/basil.jpg" alt="">
                    <div class="top-footer">
                        <h1>a cup of green tea makes you healthy</h1>
                    </div><!-- ./top-footer -->
                </div><!-- ./row-detail -->
            </div><!-- ./row -->
            <div class="box-container">
                <div class="box">
                    <img src="./img/card.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/card0.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/card1.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/card2.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/10.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/6.webp" alt="">
                    <a href="view_products.php" class="btn">shop now</a>
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </section>

        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="./img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% Off</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./detail -->
                </div><!-- ./box -->

                <div class="box">
                    <img src="./img/7.jpg" alt="">
                    <div class="detail">
                        <span>new in taste </span>
                        <h1>Coffee House</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                    </div><!-- ./detail -->
                </div><!-- ./box -->

            </div><!-- ./box-container -->
        </section>

        <section class="services">
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

        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="./img/brand (1).jpg" alt="">
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/brand (2).jpg" alt="">
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/brand (3).jpg" alt="">
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/brand (4).jpg" alt="">
                </div><!-- ./box -->
                <div class="box">
                    <img src="./img/brand (5).jpg" alt="">
                </div><!-- ./box -->
            </div><!-- ./box-container -->
        </section>
        <?php include 'components/footer.php'; ?>
    </div><!-- ./main -->

    <script src="./script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>