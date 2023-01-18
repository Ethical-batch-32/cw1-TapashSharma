<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['student_name'];
  
  $sqll = "SELECT * FROM created_at";
  $thiss=mysqli_query($conn, $sqll);
//   $rowdata=mysqli_fetch_assoc($thiss);  
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
  while ($row = mysqli_fetch_assoc($thiss)) {
    ?>
  <div class="grid__item">
     <h3>Newly Upload<span>Courses</span></h3>
    <div class="card" >
      <div class="card__content">
        <h1 class="card__header"><?php echo $row['content']?></h1>
        <p class="card__text"><?php echo $row['course']?></p>
     
        <p class="card__text"> Updated by <?php echo $row['name']?> at <?php echo date('F jS, Y', strtotime($row['created_at']))?></p>
        <!-- <button class="card__btn">Explore <span>&rarr;</span></button> -->
        <a class="card__btn" href="page.php?id=<?php echo $row['id']?>">Explore<span>&rarr;</span></a>
      </div>
    </div>
  </div>
  <?php
        }
  ?>

</div>
</body>
</html>
