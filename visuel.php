<?php
session_start();


if(!$_SESSION['logged_in']){
  header('location:index.php');
}
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" href="css/comm.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
div.gallery {
  border: 1px solid rgb(39, 150, 39);
  padding: 25px 10px 10px 40px;
  width: 310px;
  height: 245px;
  border-radius: 40px;
  margin-left: 300px;

}


div.gallery img {
  width: 298px;
  height: 250px;  
}

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
    border-radius: 50px;   
    border: 0.5px solid skyblue;
    width: 150px;
    height: 50px;
    margin-left: 10px;      
  }

/*fin caroussel*/

		.div_text_scroll {
			font-size: 12px;
			width: 150px;
			margin-left: 40px;
     
      margin-top: -30px;
		}
		.img_scroll {
			width: 30px;
			height: 35px;
			border-radius: 50%;
      padding-top: 10px;
      margin-left: 5px;
		}

	</style>
</head>
<body>
<?php
  include('header.php');
  ?>


      <section id="deuxieme" style="width: 100%; padding-top: 20px;">
      
   <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    
    $req ="SELECT * FROM `publications` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $har = mysqli_fetch_assoc($result);

    
    ?>

    <h2 style="margin-left: 370px;color: #008518"><?=$har['fonction']?></h2>
    
      <div>
      
      <div class="gallery">
        <a  href="#">
        <img style="width: 230px;height: 190px;position:relative;" src="<?=$har['imagepub']?>" alt="">
          <div class="contenant">
          </div>
        </a>
      </div>

      </div>
 </div>
   </section>

   <?php
        
        if(isset($_GET["id"])){
         
          
          $id= $_GET["id"];
            
          $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
          $result = mysqli_query($conn, $sql);
          $count1 = mysqli_num_rows($result);

          $sql2 = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
          $result1 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($result1);
          
        }
          ?>

  
   <div style="margin-left: 380px;margin-top: -20px;position: absolute;width: 170px;height:40px;background-color: white;paddinf-left: 30px;display:flex">
   
       <form method="POST">
           <input  type="number" name="avis"  value="1" class="ron1" hidden>
           <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
           <input type="submit" name="count1"  value="<?php echo $count1 ?>" class="ron1" disabled>
           <button type="submit" name="submit" style="background-color: white;border: none;">
           <i class="fa fa-thumbs-up like-btn" class="fa fa-thumbs-o-up like-btn" class="imj1" style="color: blue;"></i>
           </button>
        </form> 
           
        <form class="pouss" method="POST">
          <button style="background-color: white;border: none;">
          <i class="fa fa-thumbs-down dislike-btn" 
      		  class="fa fa-thumbs-o-down dislike-btn" style="color: red;" data-id=""></i>

          </button>
          <input  type="number" name="avis"  value="0" class="ron1" hidden>
          <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
          <input type="submit" name="count2" value="<?php echo $count2 ?>" class="ron2" disabled>
 
        </form>
        
   </div>


   <div class="bloc1">

   <?php
    $id= $_GET["id"];
    $req ="SELECT*FROM `publications` WHERE id = '$id'";
    $comment = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($comment) > 0){
     while($hari = mysqli_fetch_assoc($comment)){
    ?>
    <h2  ><?=$har['titre']?></h2>
    <p class="para2" ><?=$hari['texte']?></p>
    <p class="para3">publé le <?=$hari['datepub']?></p>
    
    <?php
      }
      }
      // else{
      //   echo "0 results";
      //  }
       
    
      ?>
   </div>
  
   <form action="" method="POST" class="for1">
    <input type="text" placeholder="Commentaire......" name="mess" class="met1">
    <button type="submit" name="submit" class="bloc2">
    <img src="images/c185d77163c157008199e78f78cca13e-removebg-preview.png" class="imj3">
    </button>
   </form> 

   <?php
            if (isset($_POST['submit'])) {
            if (isset($_GET["id"]) && isset($_POST["mess"])) {

              $user = $_SESSION['id'];
              $id = $_GET["id"];
              $commentaire = addslashes($_POST["mess"]);

              $sql = "INSERT INTO `commentaires`(`texte`, `date_pub`, `publication_id`, `id_user` ) 
              VALUES ('$commentaire',NOW(),$id, '$user')";

              if (mysqli_query($conn, $sql)) {
                      // echo "succes";
              } else {
                      echo "error: " . $sql . "<br>" . mysqli_error($conn);
              }
                            // header("refresh:0");
              }else{

                      echo "erreur";
              }
          }else{

                  echo ' ';
          }
          mysqli_close($conn);
    ?>


        <?php
include('connect.php');
$id = $_GET["id"];
// $user = $_SESSION['id'];

// Requête SQL pour récupérer les informations sur l'utilisateur et le commentaire pour chaque publication
$query_pag_data1 = "SELECT * from commentaires where publication_id = $id ";
$result_pag_data1 = mysqli_query($conn, $query_pag_data1);


 if (mysqli_num_rows($result_pag_data1) > 0) {

  while($hari = mysqli_fetch_assoc($result_pag_data1)) {
    $id_users = $hari['id_user'];

$query_pag_data = "SELECT * from utilisateurs where id = $id_users";
$result_pag_data = mysqli_query($conn, $query_pag_data);

  while($row = mysqli_fetch_assoc($result_pag_data)) {

?>
    <div class="comment-container">
        <div class="comment first-comment">
          <div class="comment-avatar">
            <img src="avatars/<?=$row['avatar']?>"" alt="John Doe">
          </div>
          <div class="comment-content">
            <div class="comment-author">
              <h3><?php echo $row['nom']; ?></h3>
            </div>
            <div class="comment-body">
              <p><?php echo $hari['texte']; ?></p>
              <span class="comment-date">commenté le <?php echo $hari['date_pub']; ?></span>
            </div>
          </div>
        </div>
    </div>

        <?php
}
} 
}
else {
echo "Aucun commentaire trouvé.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
        ?>

<style>

  
</style>


<script>
      
      function ldike(id) {
        var count=jQuery('#like'+id).html();
        count++;
        jQuery('#like'+id).html(count);
      }

      $(document).ready(function() {
        $('form').submit(function(pik) {
          // e.preventDefault();
          const avis = $(this).find('input[name=avis]').val();
          const id = $(this).find('input[name=id]').val();
          const _this = this
          $.post("likeDislike.php", { id, avis }, function(res){
            const result = JSON.parse(res)
            if(result) {
              $(_this).find('input[name=count1]').val(result.like)
              $(_this).find('input[name=count2]').val(result.dislike)
            }
          });
        });
      });

      
</script>
</body>
</html>