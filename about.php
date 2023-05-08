<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="box">
            <img src="uploaded_img/About.png" alt="">
            <h3>why choose us?</h3>
            <p>Indulge in our premium ice cream experience like no other. Our commitment to quality starts with the finest ingredients, resulting in a rich and satisfying taste that sets us apart. With unique and creative flavors, exceptional customer service, and a passion for craftsmanship, we strive to create an unforgettable ice cream journey for you to savor.</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

         <div class="box">
            <img src="uploaded_img/ice.png" alt="">
            <h3>what we provide?</h3>
            <p>Our ice cream shop provides a premium quality, handcrafted ice cream experience with unique flavors and treats. We offer personalized customization options, exceptional customer service, and aim to create memorable moments for our customers. Visit our shop for an unforgettable ice cream experience that goes beyond just a scoop, with a commitment to quality, creativity, and customer satisfaction.</p>
            <a href="shop.php" class="btn">our shop</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">customer reivews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images\WhatsApp Image 2023-03-12 at 19.17.06.png" alt="Franklin" width="100" height="100">
            <p>"Absolutely love the ice cream from this shop! The flavors are unique and delicious, and the quality is top-notch. The personalized customization option is a fun touch, and the friendly staff make the experience even more enjoyable. Highly recommend!"</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Franklin James Luke</h3>
         </div>

         <div class="box">
            <img src="images\WhatsApp Image 2023-03-14 at 18.51.00.png" alt="">
            <p>"Hands down the best ice cream I've ever had! The flavors are so rich and creamy, and the attention to detail in every scoop is impressive. The service is outstanding, and the shop has a cozy and inviting atmosphere. Highly recommend, I keep coming back for more!"</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Lokesh</h3>
         </div>

         <div class="box">
            <img src="images\WhatsApp Image 2023-03-14 at 18.51.09.png" alt="">
            <p>"I'm blown away by the creativity and innovation in the ice cream flavors at this shop. The combinations are unique and unexpected, and the taste is out of this world. The staff are friendly and helpful, and the quality of the ice cream is truly exceptional. Can't get enough of it!"</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
            </div>
            <h3>Naveen</h3>
         </div>

         <div class="box">
            <img src="images\image.png" alt="">
            <p>"This ice cream shop is a gem! The quality of the ice cream is outstanding, and the flavors are unlike anything I've tried before. The personalized customization option is a fun feature, and the service is top-notch. I highly recommend stopping by for a treat that will exceed your expectations!"</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
            </div>
            <h3>Chattai</h3>
         </div>

         <div class="box">
            <img src="images\WhatsApp Image 2023-03-14 at 18.51.15.png" alt="">
            <p>I'm in ice cream heaven! The flavors at this shop are so creative and delicious, and the ice cream is made with the finest ingredients. The staff are welcoming and knowledgeable, and the shop has a charming ambiance. I'm hooked and can't wait to try all the flavors!</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
            </div>
            <h3>Santa</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>This ice cream shop is a must-visit! The flavors are amazing and the ice cream is so smooth and creamy. The customization option allows me to create my dream ice cream treat, and the service is always friendly and attentive. I keep coming back for the quality and taste that's unmatched!</p>
            <div class="stars">
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
               <i class="fas fa-star fa-3x"></i>
            </div>
            <h3>Muniamma From Tidel park</h3>
         </div>

      </div>

   </section>









   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>