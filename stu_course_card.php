<?php

@include 'config.php';

session_start();{
$user_name= $_SESSION['student_name'];
$data = "SELECT * FROM req_course WHERE name='$user_name' ";
$result = mysqli_query($conn, $data);
// $row = mysqli_fetch_assoc($result);
if (isset($_GET['id'])){
  // Sanitize the provided item id to prevent SQL injection attacks
  $id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "DELETE FROM req_course WHERE id= $id";
if (mysqli_query($conn, $sql)) {
  header('location:stu_course_card.php');

  // $error[] = 'Record deleted successfully';
} else {
//  $error[] = 'There was a problem deleting the record';
}

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
   <link rel="stylesheet" href="css/cards.css">
   <!-- <link rel="stylesheet" href="css/cards.css"> -->

</head>
<body>
   
<!-- header section starts  -->
<?php
@include_once './components/stnavbar.php'
?>
<!-- header section ends -->
<!-- home section starts  -->


<!-- contact section ends -->

<!-- footer section starts  -->
<div class="main-container">
      <?php
while ($row = mysqli_fetch_array($result)) {


     ?>
  <div class="cards">
    <div class="card card-4">
      <div class="card__icon"><i class="fas fa-bolt" style="font-size: 30px"><?php echo $row['course_name']?></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title"><?php echo $row['content']?></h2>
      <p class="card__apply">
        <a class="card__link" style="font-size: 15px" href="stu_course_card.php?id=<?php echo $row['id']?>">Remove<i class="fas fa-arrow-right"></i></a>

      </p>
    </div>
</div>
<?php
     }
     ?>
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>