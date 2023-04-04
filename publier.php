<?php
session_start();


if(!$_SESSION['logged_in']){
  header('location:index.php');
}

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
  ?>

      <section id="deuxieme" style="width: 100%;padding-top: 20px; padding-right: 30px;">
      <form method="POST" id="signup-form" class="signup-form" action="upload.php"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Titre de la publication</label>
                    <input type="text" class="w3-input w3-border w3-round" name="titre" id="name"/>
                </div>
                <div class="form-group">
                    <label  for="">Type de la publication</label>
                    <select class="w3-select w3-border" name="fonction">
                        <option selected>Faire un choix</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Recette">Recette</option>
                        <option value="Experience" >Retourd'Experience</option>
                        <option value="Conseil">Conseil</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="photo">Image</label>
                    <input class="w3-input w3-border w3-round" type="file" name="imagepub"/>
                </div>
                <div class="form-group">
                    <label for="texte">Message</label>
                    <textarea  name="texte" id="" cols="58" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="w3-input" name="submit" id="submit" value="Publier"/>
                </div>
            </form>
   </section>

<!-- Swiper JS -->
<script>
      // voir plus
      $(document).ready(function(){
      $('.gallery').slice(0,12).show()
      $('.btn').on('click',function(){
          $('.gallery:hidden').slice(0,12).slideDown('show')
          if($('.gallery:hidden').length ==0 ){
              $(this).text('Plus d\'images à afficher');
          }
          return false;
      });
      });

</script>



</body>
</html>