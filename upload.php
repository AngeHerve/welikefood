<?php
session_start();


if(!$_SESSION['logged_in']){
  header('location:index.php');
}
include('connect.php');
if(isset($_POST["submit"])){
    $nom = addslashes($_POST["titre"]);
    // $bt = htmlentities($nom);
    // $b = html_entity_decode($bt);
    // echo $b;
    $fonc = addslashes($_POST["fonction"]);
    $test = $_POST["texte"];
    $id_users = $_SESSION['id'];
    $target_dir = "imagess/";
    $target_file = $target_dir . basename($_FILES["imagepub"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
      $check = getimagesize($_FILES["imagepub"]["tmp_name"]);
      if($check !== false) {
        echo "c'est bien une image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "le fichier est different d'une image.";
        $uploadOk = 0;
      }
      // renomer l'image
    $temp = explode(".", $_FILES["imagepub"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = $target_dir .$newfilename;
    
    if($uploadOk == 0){
        echo"image non enregistre";
    
    }else{
        if(move_uploaded_file($_FILES["imagepub"]["tmp_name"],"" . $finaldestination)) {
            
            $sql = "INSERT INTO `publications`(titre, fonction, imagepub, texte, datepub, id_user)
             VALUES('$nom', '$fonc', '$finaldestination', '$test', NOW(), '$id_users')";
             header("location:acceuil.php");
            //  echo $sql;
    
        }
        if(mysqli_query($conn, $sql)){
          echo "succes";
        }else{
          echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    }
?>