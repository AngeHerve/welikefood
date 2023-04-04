<?php

    include"connect.php";

    $id =$_GET['id'];

    $sql2 = "DELETE from utilisateurs where id=$id";
    
    if ($conn->query($sql2) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Suppression effectuée avec success";
        echo "</b></h2>";
        echo "<br>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'users.php'>";
        echo "Retour";
        echo "</a>";
        echo "</b></font>";
        echo "</center>";
    } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error."";
    }
    $conn->close();
?>