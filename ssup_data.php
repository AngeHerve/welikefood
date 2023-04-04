<?php
  session_start();


  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
$user = $_SESSION['id'];
include "connect.php"; 

    $id =$_GET['id'];

    $sql = "DELETE from publications where id = $id && id_user = $user";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Suppression effectuée avec success";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'mespubli.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error."";
    }
    $conn->close();



?>