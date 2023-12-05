<header class="header">
    <div class="flex">
        <a href="home.php" class="logo">
            <img src="./img/logo.jpg" alt="">
        </a>
        <nav class="navbar ">
            <a href="home.php">home</a>
            <a href="view_products.php">products</a>
            <a href="order.php">orders</a>
            <a href="about.php">about us</a>
            <a href="contact.php">contact us</a>
        </nav>
        <div class="icons">
            <i class="fa fa-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class="fa fa-heart-o"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="fa fa-cart-arrow-down"></i><sup>0</sup></a>
            <a href="#">
            <i class="fa fa-list-ul" id="menu-btn" style="font-size: 1.5rem;"></i>
            </a>
        </div><!-- ./icons -->
        <div class="user-box ">
            <?php
            print_r($_SESSION);
            ?>
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="login.php" class="btn">login</a>
            <a href="register.php" class="btn">register</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">log out</button>
            </form>
        </div><!-- ./user-box -->
    </div><!-- ./flex -->

</header>