
<?php
  session_start();


  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
$user = $_SESSION['id'];
include('connect.php');


//--------------- If user Sign Up-------------------------
if(isset($_POST['modify'])){

    $email = addslashes($_POST ['email_']);
    $nom = addslashes($_POST ['nom_']);
    $pnom = addslashes($_POST ['prenoms_']);
    $datenaiss =$_POST ['datenaiss_'];
    $tel = $_POST ['tel_'];


    $sql =  "UPDATE utilisateurs SET nom = '$nom',prenoms = '$pnom', date_naiss = '$datenaiss',
     telephone = '$tel' ,email = '$email' WHERE id= $user";


if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Modification effectuée avec success.";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'mon_profil.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";

    }else{
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>