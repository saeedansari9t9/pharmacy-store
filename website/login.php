<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Erratum – Multi purpose error page template for Service, corporate, agency, Consulting, startup.">
    <meta name="keywords" content="Error page 404, page not found design, wrong url">
    <meta name="author" content="Ashishmaraviya">
    <link rel="icon" href="assets/imgs/logo/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/imgs/logo/logo.png" type="image/x-icon" />
    <title>Please Login</title>
    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="logincss/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="logincss/css/fontawesome.css">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="logincss/css/login.css">
</head>

<body>
    <?php
    include('php/query.php');
    ?>
    <!-- 01 Preloader -->
    <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid">
                <div class="content-detail">
                    
                    <!-- Login form -->
                    <form class="login-form" method="post">
                        <div class="imgcontainer">
                            <img src="assets/imgs/logo/3.png" alt="Avatar" class="avatar" height="60px">
                        </div>
                        <div class="input-control">
                            <input type="text" placeholder="Enter Username" name="username" required>
                            <span class="password-field-show">
                                <input type="password" placeholder="Enter Password" name="password"
                                    class="password-field" value="" required>
                                <span data-toggle=".password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </span>
                            <label class="label-container">Remember me
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <span class="psw"><a href="forgot.php" class="forgot-btn">Forgot password?</a></span>
                            <div class="login-btns">
                                <button type="submit" name="login">Login</button>
                            </div>
                            <div class="division-lines">
                                <p>or login with</p>
                            </div>
                            <div class="login-with-btns">
                                <button type="button" class="google"><i class="fab fa-google"></i></button>
                                <button type="button" class="facebook"><i class="fab fa-facebook-f"></i></button>
                                <button type="button" class="twitter"><i class="fab fa-twitter"></i></button>
                                <button type="button" class="linkedin"><i class="fab fa-linkedin-in"></i></button>
                                <span class="already-acc">Not a member? <a href="signup.php" class="signup-btn">Sign
                                        up</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="logincss/js/jquery-3.5.1.min.js"></script>
    <script src="logincss/js/jquery.parallaxmouse.min.js"></script>
    <!-- Theme js-->
    <script src="logincss/js/script.js"></script>
</body>

</html>