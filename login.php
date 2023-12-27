<?php
session_start();

$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="icon" type="image/png" href="images/title logo.png">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">


    
  
    
    

    <!-- MAIN CSS -->
    

    <title>Andromeda</title>
     <link rel="icon" type="image/png" href="images/title logo.png">

</head>

<body>


    <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0">
                        <div class="row g-0 align-items-center">
                            

                                        
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="logoimg">
                                            <img  src="images/logo.png" alt="logo" height="60px" width="230px" style="margin-left: 110px;">
                                        </div>
                                        <div class="p-2 mt-5">
                                            <div class="text-center mt-2">
                                                <h5 class="fs-3xl">Create account</h5>
                                            </div>
                                            <form class="needs-validation" novalidate action="loginback.php" method="post">

                                                
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control " id="username" placeholder="Enter username" required name="username">
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>

                                               

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" class="form-control password-input pe-5"  placeholder="Enter password" id="password-input"  required >
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit" name="login">Sign Up</button>
                                                </div>
                                                <p class="text-danger"><?php echo $error; ?></p>
                                            </form>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Dont have an account  <a href="signup.php" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Go to&nbsp;<a href="index.html" class="fw-semibold text-primary text-decoration-underline"> Home </a> </p>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- password create init js-->
    <script src="assets/js/pages/passowrd-create.init.js"></script>

</body>

</html>