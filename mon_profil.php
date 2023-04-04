<?php
  session_start();


  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
$user = $_SESSION['id'];
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>welikefood</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
		<style type="text/css">

	div.gallery {
  border: 1px solid #ccc;
  width: 270px;
  height: 245px;
  border-radius: 10px;
  margin-bottom: 35px;

}

div.gallery:hover {
  box-shadow: 2px 2px 8px lightgray;
}

div.gallery img {
  width: 298px;
  height: 250px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  
}
.para{
  width: 270px;
  margin-top: -4px;
  font-size: 12px;
  margin-left: 10px;
}
.para1{
  margin-left: 10px;
  margin-top: -10px;
  font-size: 12px;
  width: 270px;
}
div.desc1{
  padding-left: 15px;
  text-align: center;
  width: 250px;
  height: 100px;
  background-color: blue;
}

	.contenant {
  height: 200px;
  width: 270px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  margin-top: -200px;
  position: absolute;
}
.contenant:hover {
  position: absolute;
  opacity: 1;
  box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

}
 .contenant:hover .overlay {
  opacity: 1;
}
.contenant:hover .img_plus {
  opacity: 1;
}




/* texte dans image */
.overlay {
  
  margin-left: 10px;
  opacity: 0;
  transition: .5s ease;
  color: white;
  vertical-align: text-bottom;
  font-size: 11px;
  float: left;
  text-align: left;
  margin-top: 150px;

}

/* la petite image sur l'image */
.img_plus {
  
  opacity: 0;
  transition: .5s ease;  
  text-align: right;
  height:40px;
  width:40px;
 
}
 

/*caroussel*/
.swiper {
        width: 100%;
        height:  20%;
        margin-right: 20px;

      }

  .swiper-slide {
        
    font-size: 18px;
    background: #fff;
    border-radius: 30px;   
    border: 0.5px solid skyblue;
    width: 115px;
    height: 130px;
    margin-left: 23px;      
  }

/*fin caroussel*/

		.div_text_scroll {
			font-size: 12px;
			width: 150px;
			margin-left: 20px;
     
      margin-top: 5px;
		}
		.img_scroll {
			width: 100px;
			height: 70px;
			border-radius: 45%;
      padding-top: 10px;
      margin-left: 5px;
		}
	
		head {
			min-width: 1000px;
		}
		body {
			min-width: 1000px;
		}

		</style>
</head>
<body>
	&nbsp;
  <?php
  include('header.php');
  $req ="SELECT*FROM utilisateurs where id = $user";
  $result = mysqli_query($conn, $req);

  if(mysqli_num_rows($result) > 0){
    while($har = mysqli_fetch_assoc($result)){
  ?>
 
            <div class="row" style="width: 700px; margin:auto;">
                  <p style="margin-left:250px;font-weight:600;text-decoration:underline;color:#0A8FD5;">Mes infomormations personnelles:</p>
                  <div class="col-lg-4">
                    <div class='row'>
                      <div class='col-lg-6 mx-1'>
                        <p  style="text-align:left">Nom:</h5>
                      </div>
                      <div class=''>
                        <p style="text-align:right;"><?php echo $har['nom']; ?></p>
                      </div>
                    </div>
                    <div class='row'>
                      <div class='col-lg-6'>
                        <p  style="text-align:left">Date de naissance:</h5>
                      </div>
                      <div class=''>
                        <p style="text-align:right;"><?php echo $har['date_naiss']; ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    
                  </div>
                  <div class="col-lg-4" >
                    <div class='row'>
                      <div class='col-lg-6'>
                        <p  style="text-align:left">Prénoms:</h5>
                      </div>
                      <div class=''>
                        <p style="text-align:right;"><?php echo $har['prenoms']; ?></p>
                      </div>
                    <div>
                    <div class='row'>
                      <div class='col-lg-6'>
                        <p  style="text-align:left">Téléphone:</h5>
                      </div>
                      <div class=''>
                        <p style="text-align:right;"><?php echo $har['telephone']; ?></p>
                      </div>
                    <div>
                </div>
                <div class="col-lg-12" style="margin-left:-80px;" >
                    <div class='row'>
                      <div class='col-lg-6'>
                        <p  style="text-align:left">Email:</h5>
                      </div>
                      <div class=''>
                        <p style="text-align:right;"><?php echo $har['email']; ?></p>
                      </div>
                    <div>
                </div>
                <a class="btn-sm btn-primary" style="width:50px;heigt:50px;margin-left:-40px;" 
           href="modifier.php?id='<?php echo $user; ?>'">Modifier</a>
            </div>

            
            <div class="row" style="width: 900px; margin-top:110px;margin-left:-250px;">
                <div class="col-lg-6">
                    <div class='row'>
                      <div class='col-lg-6 mx-1'>
                        <p  style="text-align:left">Mon avatar:</h5>
                      </div>
                      <div class=''>
                        <img style="width: 80px;height: 80px;" src="avatars/<?=$har['avatar']?>" alt="">
                      </div>
                    </div>
                    <form enctype="multipart/form-data" action="update_avatar.php" method="post">
                        <div class='row'>
                            <div class='col-lg-6'>
                                <p  style="text-align:left">Changer d'avatar:</h5>
                            </div>
                            <div class="form-group">
                                <input type="file" class="" id="exampleInputEmail"
                                name="avatar_" >
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user" name="avatar" value="Modifier mon avatar">
                    </form>
                </div>
                <form action="update_passw.php" method="post">
                    <div class="col-lg-6" >
                        <p style="margin-left: 50px;">Changer de mot de passe</p>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <p  style="text-align:left">Nouveau mot de passe:</h5>
                            </div>
                            <div class='form-group'>
                                <input type="password" class="form-control form-control-user"
                                    name="motdepasse_" id="exampleInputPassword" placeholder="Mot de passe">    
                            </div>
                        <div>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <p  style="text-align:left">Comfirmer le mot de passe:</h5>
                            </div>
                            <div class="form-group">    
                                <input type="password" class="form-control form-control-user"
                                    name="motdepasse__" id="exampleRepeatPassword" placeholder="Confirmation du mot de passe">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user" name="motpasse" value="Modier mon mot de passe">
                </form>
            </div>


            <?php
      }
      }

      
       mysqli_close($conn);
       
      ?>

</body>
</html>