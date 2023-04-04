
<?php
  session_start();


  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
$user = $_SESSION['id'];
include('connect.php');


//--------------- If user Sign Up-------------------------
if(isset($_POST['avatar'])){

    $img_name= $_FILES['avatar_']['name'];
    $img_size= $_FILES['avatar_']['size'];
    $tmp_name= $_FILES['avatar_']['tmp_name'];
    $error= $_FILES['avatar_']['error'];

    if ($error === 0) {
      if ($img_size === 60000) {
         echo "Désolé, ton fichier est trop lourd";

      }
      else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");
          if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = "avatars/".$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);

            // $sql = "INSERT INTO publication (tittre, pubimg, typePub, pubcorps, avatar)
            //  VALUES ('$titre', '$new_img_name', '$type', '$message', '$new_img_name')";
    }}}


    $sql =  "UPDATE utilisateurs SET avatar = '$new_img_name' WHERE id= $user";


if ($conn->query($sql) === TRUE) {
        echo "<center><h2><b><font color = 'green'>";
        echo "Modification de votre avatar effectuée avec success.";
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