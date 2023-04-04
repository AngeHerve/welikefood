
<?php
  include 'connect.php';


if(isset($_POST['login'])){
      $email = addslashes($_POST ['email_']);
      $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email ='$email'");
        $rows = mysqli_num_rows($query);
        if($rows==1){
          $array = $query->fetch_assoc();
          session_start();
          $_SESSION['logged_in']= true;
          $_SESSION['email'] = $array['email'];
        header('location:rest_password.php');
          }else{
            echo "<center><h2><b><font color = 'red'>";
            echo "Cette adresse mail n'existe pas. Vérifiez votre saisie ou créer un compte. <a href = 'register.php'> Créer un compte";
            echo "</b></h2>";
            echo "<br>";
            echo "<br>";
            echo "<font color = 'green'><b>";
            echo "<a href = 'forgot_password.php'>";
            echo "Retour";
            echo "</a>";
            echo "</b></font>";
            echo "</center>";
          }

  }


?>
