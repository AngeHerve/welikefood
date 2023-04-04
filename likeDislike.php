
<?php
  session_start();

  if(!$_SESSION['logged_in']){
    header('location:index.php');
  }
      include('connect.php');
    if(isset($_POST["id"]) && isset($_POST["avis"])){
        

        $id= $_POST["id"];
        $avis = $_POST["avis"];

        
        $sql = "INSERT INTO `avis`(`avis`, `date`, `publication_id`) 
        VALUES ('$avis', NOW(), $id)";

        // echo $sql;

        if(mysqli_query($conn, $sql)){
            $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
            $result = mysqli_query($conn, $sql);
            $count1 = mysqli_num_rows($result);

            
          $sql2 = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
          $result1 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($result1);
            echo json_encode([ "like" => $count1, "dislike" =>$count2]);
            
        }else{
            echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        
    }
?>