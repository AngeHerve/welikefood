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
 
            
    <div class="card o-hidden border-0 shadow-lg my-5 w-75">
            <div class="card-body py-0 px-0">
                <!-- Nested Row within Card Body -->
                <div class="row" >
                    <div class="col-lg-4 d-none d-lg-block "></div>
                    <div class="col-lg-8 " style="margin: auto;" >
                        <div class="p-0 m-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Mes informations personnelles</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data" action="update_name.php" name="myForm" onsubmit="return validateForm()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            name="nom_"  placeholder="Nom" value="<?php echo $har['nom']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        name="prenoms_" placeholder="Prénoms" value="<?php echo $har['prenoms']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user" id="exampleFirstName"
                                            name="datenaiss_"  placeholder="" value="<?php echo $har['date_naiss']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" id="exampleLastName"
                                        name="tel_" placeholder="Numero telephone" value="<?php echo $har['telephone']; ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="email_"  placeholder=" Addresse Email" value="<?php echo $har['email']; ?>">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user" name="modify" value="Modifier">
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <?php
      }
      }

      
       mysqli_close($conn);
       
      ?>

</body>
</html>