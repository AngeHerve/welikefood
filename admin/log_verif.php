
<?php
  include 'connect.php';


if(isset($_POST['login'])){
      $email = addslashes($_POST ['email_']);
      $password = md5($_POST ['password_']);
      $query = mysqli_query($conn, "SELECT * FROM adminn WHERE motdepasse='$password' AND email ='$email'");
        $rows = mysqli_num_rows($query);
        if($rows==1){
        $array = $query->fetch_assoc();
        session_start();
        $_SESSION['logged_in']= true;
        $_SESSION['id'] = $array['id'];
        $_SESSION['name'] = $array['nom'];
        $_SESSION['email'] = $array['email'];
        header('location:acceuil.php');
          }else{
          echo "<font color = 'red'>";
            echo "Wrong Email or Wrong Password click";
          echo "</font>";
          echo "<br>";
          echo "<font color = 'green'><b>";
          echo "<a href = 'forget.php'>";
          echo "Here";
          echo "</a>";
          echo "</b></font>";
          echo "<font color = 'red'>";
          echo " to get a new password .";
          echo "</font>";
          }

  }


?>
