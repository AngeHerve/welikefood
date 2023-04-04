
<?php
  session_start();

  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
  include 'connect.php';

  $mail = $_SESSION['email'];

if(isset($_POST['login'])){
      $motdepasse = md5($_POST ['password_']);
      $confirm_motdepasse = md5($_POST ['password__']);
        // $rows = mysqli_num_rows($query);

        $sql =  "UPDATE utilisateurs SET motpasse = '$motdepasse' WHERE email= '$mail'";    

          if ($conn->query($sql) === TRUE) {
            echo "<center><h2><b><font color = 'green'>";
            echo "Votre mot de passe a été changer avec succèss. Veuillez vous reconnecter";
            echo "</b></h2>";
            echo "<br>";
            echo "<br>";
            echo "<font color = 'green'><b>";
            echo "<a href = 'logout.php'>";
            echo "Retour";
            echo "</a>";
            echo "</b></font>";
            echo "</center>";
          
              }else{
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
  }


?>
