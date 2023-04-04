
  <?php
  include 'connect.php';

//--------------- If user Sign Up-------------------------
if(isset($_POST['signup'])){

    $email = addslashes($_POST ['email_']);
    $motpasse = md5($_POST ['motdepasse_']);
    $nom = addslashes($_POST ['nom_']);
    $pnom = addslashes($_POST ['prenoms_']);
    $datenaiss =$_POST ['datenaiss_'];
    $tel = $_POST ['tel_'];

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
    }}
    $id_user = (rand(1, 10000));
    $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email ='$email'");
    $rows = mysqli_num_rows($query);
    if($rows!=1){
    $array = $query->fetch_assoc();
    mysqli_query($conn, 
    "INSERT INTO utilisateurs (id_user,nom ,prenoms, date_naiss, telephone ,email, motpasse, avatar)
     VALUES ('$id_user','$nom','$pnom', '$datenaiss', '$tel', '$email','$motpasse', '$new_img_name')");

    echo "Congratulation now you have an account";
    echo "<br>";
    echo "Now you can log into your account";

    header("location: index.php");

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


}
?>