<?php include 'components/connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
//register user
if (isset($_POST['submit'])) {
    // $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = $_POST['password'];
    $pass = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_SPECIAL_CHARS);
    $user_type = $_POST['user_type'];
    $user_type = filter_var($user_type, FILTER_SANITIZE_SPECIAL_CHARS);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $message[] = 'email already exist';
        echo 'email already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm your password';
            echo 'confirm your password';
        } else {
            $insert_user = $conn->prepare("INSERT INTO `users`(name,email,password) VALUES(?,?,?)");
            $insert_user->execute([ $name, $email, $pass]);
            header('location: home.php');
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
            }
        }
    }
}

?>


<style type="text/css">
    <?php include 'css/style.css'; ?>
</style>m

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>green tea - register now</title>
</head>

<body>

    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="./img/download.png" alt="">
                <h1>register now</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, pariatur.</p>
            </div><!-- ./title -->
            <form action="" method="post">
                <div class="input-field">
                    <p>your name <sup class="input-sup">*</sup></p>
                    <input type="text" name="name" required placeholder="enter your name" maxlength="50">
                </div><!-- ./input-filed -->

                <div class="input-field">
                    <p>your email <sup class="input-sup">*</sup></p>
                    <input type="email" name="email" required placeholder="enter your email" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                </div><!-- ./input-filed -->

                <div class="input-field">
                    <p>your password <sup class="input-sup">*</sup></p>
                    <input type="password" name="password" required placeholder="enter your password" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                </div><!-- ./input-filed -->

                <div class="input-field">
                    <p>confirm password <sup class="input-sup">*</sup></p>
                    <input type="password" name="cpass" required placeholder="enter your confirm password" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                </div><!-- ./input-filed -->

                <div class="input-field">
                    <p>user type <sup class="input-sup">*</sup></p>
                    <input type="text" name="user_type" required placeholder="enter your  user_type" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                </div><!-- ./input-filed -->

                <input type="submit" name="submit" value="register now" class="btn">
                <p>already have an account? <a href="login.php">login now</a></p>
            </form>
        </section>
    </div><!-- ./main-container -->
</body>

</html>