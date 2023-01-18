<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   // header('location:login_form.php');
}


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

<header class="header">

   <section class="flex">

      <a href="#home" class="logo">educa.</a>
<?php
@include_once './components/teanavbar.php'
?>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>


</body>
</html>
