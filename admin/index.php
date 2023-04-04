<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/css/reg_log.css"> -->

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 w-75">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block bg-login-image"></div>

                            <div class="col-lg-8 " style="margin: auto;">
                                <div class="p-0 m-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                    </div>
                                    <form class="user" action="log_verif.php" name="myForm" method ="POST" onsubmit="return validateForm()">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email_"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <!-- <br> -->
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password_"
                                                placeholder="Password">
                                        </div>
                                        <!-- <br> -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <!-- <br> -->
                                        <button type="submit" class="btn btn-primary btn-user b"  name ="login">Se connecter</button>
                                        <!-- <hr>
                                        <a href="indx.html" class="btn btn-google btn-user btn-block">
                                          <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Mot de passe oublier?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Inscrivez-vous!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>

<script>
    function validateForm() {
    var x = document.forms["myForm"]["email_"].value;
    var x1 = document.forms["myForm"]["password_"].value;


    if (x == "") {
        alert("Saisir votre email");
        return false;
    }
    if (x1 == "") {
        alert("Saisir votre mot de passe ");
        return false;
    }
}
</script>
