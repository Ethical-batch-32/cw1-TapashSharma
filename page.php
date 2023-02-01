<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['student_name'];
  if (isset($_GET['id'])){
    // Sanitize the provided item id to prevent SQL injection attacks
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // Query the database for the item with the specified id	
$sql = "SELECT * FROM created_at WHERE id = $id";
$items = mysqli_query($conn, $sql);
} 
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online Education Site</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/teacher.css">

</head>
<body> 
<!-- header section starts  -->
<?php
@include_once './components/stnavbar.php'
?>

         
         

<div class="grid" style='margin-top: 60px;'>
   <?php
        while ($feat = mysqli_fetch_array($items))  {
           ?>
  <div class="grid__item">
     
    <div class="card" >
      <div class="card__content" style='padding: 16rem 10rem;'>
        <h1 class="card__header"><?php echo $feat['content']?></h1>
        <p class="card__text"><?php echo $feat['course']?></p>
        <a style="font-size:25px;"href ="coursefile/<?php echo $feat['file']?>" attributes-list>Click to view file</a>
        <p class="card__text"> Updated by <?php echo $feat['name']?> at <?php echo date('F jS, Y', strtotime($feat['created_at']))?></p>
      </div>
    </div>
  </div>
  <?php
        }
  ?>

</div>
</body>
</html>
