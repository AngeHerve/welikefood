
<?php
  session_start();


  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
$user = $_SESSION['id'];
include('connect.php');


//--------------- If user Sign Up-------------------------
if(isset($_POST['motpasse'])){

    $motpasse = md5($_POST ['motdepasse_']);
    $Cmotpasse = md5($_POST ['motdepasse__']);

        $sql =  "UPDATE utilisateurs SET motpasse = '$motpasse' WHERE id= $user";
    

if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Modification effectuée avec success. Vous devez vous reconnecter";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'index.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";

    }else{
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>