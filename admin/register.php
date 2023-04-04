<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/reg_log.css">
</head>
<body class="bg-register-image">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 w-75">
            <div class="card-body py-0 px-0">
                <!-- Nested Row within Card Body -->
                <div class="row" >
                    <div class="col-lg-4 d-none d-lg-block "></div>
                    <div class="col-lg-8 " style="margin: auto;" >
                        <div class="p-0 m-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Inscription</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data" action="reg_insert.php" name="myForm" onsubmit="return validateForm()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            name="nom_"  placeholder="Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        name="prenoms_" placeholder="Prénoms">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="email_"  placeholder=" Addresse Email">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        name="motdepasse_" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="motdepasse__" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-user" name="signup" value="Créer votre compte">
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function validateForm() {
        var x = document.forms["myForm"]["nom_"].value;
        var x1 = document.forms["myForm"]["prenoms_"].value;
        var x2 = document.forms["myForm"]["email_"].value;
        var x3 = document.forms["myForm"]["motdepasse_"].value;
        var x4 = document.forms["myForm"]["motdepasse__"].value;

        if (x == "") {
            alert("entrer votre Nom ");
            return false;
        }
        if (x1 == "") {
          alert("Entrer vos Prénoms");
          return false;
        }
        if (x2 == "") {
          alert("Entrer votre Email");
          return false;
        }
        if (x3 == "") {
          alert("Entrer votre mot de passe");
          return false;
        }
        if (x4 == "") {
          alert("Confirmer votre mot de passe");
          return false;
        }
    }
    </script>
</body>
</html>
