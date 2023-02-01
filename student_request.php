<?php

@include 'config.php';

session_start();{
  $sqll = "SELECT * FROM req_course";
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/reqcards.css">

</head>
<body> 
<!-- header section starts  -->
<?php
@include_once './components/teanavbar.php'
?>


<div class="container">
        <?php
        while ($row = mysqli_fetch_assoc($thiss)) {
        ?>
  <div class="card">
    <div class="card-header">
      <img src="./images/courseicon.png" alt="rover" />
    </div>
    <div class="card-body">
      <span class="tag tag-teal" style='margin-left: -10px'><?php echo $row['course_name']?></span>
      <h4 style="margin-top: 6px;font-size: 14px;">
      <?php echo $row['content']?>
      </h4>

      <div class="user">
        <!-- <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" /> -->
        <div class="user-info" style='font-size: 14px;'>
          <h5><?php echo $row['name']?></h5>
          <small><?php echo date('F jS, Y', strtotime($row['created_at']))?></small>
        </div>
      </div>
    </div>
  </div>
  <?php
        }
  ?>
</div>


</body>
</html>
