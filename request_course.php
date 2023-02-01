<?php

@include 'config.php';

session_start();{
$user_name=$_SESSION['student_name'];
if(isset($_POST['submit'])){
   // $uname=($_POST['name']);
   $content = ($_POST['content']);
   $coursename = ($_POST['courses']);
   
   // $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $insert = "INSERT INTO req_course(name, content, course_name) VALUES('$user_name','$content','$coursename')";
   if(mysqli_query($conn, $insert)){
      header('location:stu_course_card.php');

   }
   else{
      echo"Error";
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
   <title>Education Site</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

<footer class="footer">

   <section>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-youtube"></a>
      </div>
   </section>

</footer>

<!-- footer section ends -->


<section class="contact" id="contact">

   <!-- <h1 class="heading"><span>contact</span> us</h1> -->

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <!-- <span>Course Name</span> -->
         <!-- <input type="text" required placeholder="enter the course name" maxlength="50" name="name" class="box"> -->
         <span>Enter Content</span>
         <input type="text" required placeholder="Enter what you want to request" maxlength="50" name="content" class="box">
         <span>select course</span>
         <select name="courses" class="box" required>
            <option value="" disabled selected>select the course --</option>
            <option value="web developement">web developement</option>
            <option value="science and biology">science and biology</option>
            <option value="engineering">engineering</option>
            <option value="digital marketing">digital marketing</option>
            <option value="graphic design">graphic design</option>
            <option value="teaching">teaching</option>
            <option value="social studies">social studies</option>
            <option value="data analysis">data analysis</option>
            <option value="artificial intelligence">artificial intelligence</option>
         </select>
         <!-- <span>select gender</span> -->
         <!-- <div class="radio">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">female</label>
         </div> -->
         <input type="submit" name ="submit" value="Submit Requests" class="btn" name="send">
      </form>

   </div>

</section>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>