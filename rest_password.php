<?php
  session_start();

  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }

  include 'connect.php';
  $mail = $_SESSION['email'];

  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Entrez votre nouveau mot de passe </h1>
                                    </div>
                                    <?php
  $req ="SELECT*FROM utilisateurs where email = '$mail'";
  $result = mysqli_query($conn, $req);

  if(mysqli_num_rows($result) > 0){
    while($har = mysqli_fetch_assoc($result)){
  ?>
                                    <form class="user" action="update_password.php" name="myForm" method ="POST" onsubmit="return validateForm()">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Entrer  votre  addresse email..." name="password_">
                                                
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Entrer  votre  addresse email..." name="password__">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"  name ="login">Se connecter</button>
                                    </form>
                                    <?php
      }
      }

      
       mysqli_close($conn);
       
      ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<script>
    function validateForm() {
    var x = document.forms["myForm"]["password_"].value;
    var x1 = document.forms["myForm"]["password__"].value;

    if (x == "") {
        alert("Saisir votre mot de passe");
        return false;
    }

    if (x1 == "") {
        alert("Saisir confirmer votre mot de passe");
        return false;
    }

}
</script>