
  <?php
  include 'connect.php';

//--------------- If user Sign Up-------------------------
if(isset($_POST['signup'])){

    $email = addslashes($_POST ['email_']);
    $motpasse = md5($_POST ['motdepasse_']);
    $nom = addslashes($_POST ['nom_']);
    $pnom = addslashes($_POST ['prenoms_']);


    $query = mysqli_query($conn, "SELECT * FROM adminn WHERE email ='$email'");
    $rows = mysqli_num_rows($query);
    if($rows!=1){
    $array = $query->fetch_assoc();
    mysqli_query($conn, 
    "INSERT INTO adminn (nom ,prenoms,email, motdepasse)
     VALUES ('$nom','$pnom', '$email','$motpasse')");

    echo "Congratulation now you have an account";
    echo "<br>";
    echo "Now you can log into your account";

    header("location: login.php");

    }else{
	      echo "Email already exists click";
        echo "<br><b>";
        echo "<font color = 'green'>";
        echo "<a href = 'index.php'>";
        echo "Here";
        echo "</b></a>";
        echo "</font>";
        echo " to log into your account.";
    }



}


?>