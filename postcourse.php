<?php

@include 'config.php';

session_start();{
$teacher_name=$_SESSION['teacher_name'];
if(isset($_FILES['image'])){
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";

	$file_name=$_FILES['image']['name'];
	$file_size=$_FILES['image']['size'];
	$file_tmp=$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];

	if(move_uploaded_file($file_tmp, "coursefile/". $file_name)){
		// echo "Successfull.";

	}else{
		// echo"Could not be uploaded.";
	}

}
if(isset($_POST['submit'])){
   // $uname=($_POST['name']);
   $content = ($_POST['content']);
   $coursename = ($_POST['courses']);
   
   // $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $insert = "INSERT INTO created_at(name, course, content, file) VALUES('$teacher_name','$content','$coursename','$file_name')";
   if(mysqli_query($conn, $insert)){
      header('location:postcourse.php');

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
   <title>Online Education Site</title>

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
@include_once './components/teanavbar.php'
?>
<!-- header section ends -->
<!-- home section starts  -->


<!-- contact section ends -->

<!-- footer section starts  -->

<section class="contact" id="contact">
<div class="row">

<div class="image">
   <img src="images/contact-img.svg" alt="">
</div>

<form action="" method="post" enctype="multipart/form-data">
   <!-- <span>Course Name</span> -->
   <!-- <input type="text" required placeholder="enter the course name" maxlength="50" name="name" class="box"> -->
   <span>Enter the course content</span>
   <input type="text" required placeholder="Enter the you want to deliever" maxlength="50" name="content" class="box">
   <input type="file" name="image" class="box">
   <!-- <input type="file" name="image" class="form-control filee" id="customFile" /> -->
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