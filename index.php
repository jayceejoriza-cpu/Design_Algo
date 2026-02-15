<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Swipper-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    
</head>

<body>
    <header>
   <div class="head"> <img src="./images/logo.png" id="logo"><h1 id="navtext">DESIGN ALGO</a></h1></div>
    <nav>   
        <ul>
            <li><a href="#home" class="nav_link">HOME</a></li>
            <li><a href="#act" class="nav_link">ACT</a></li>
            <li><a href="#members" class="nav_link">MEMBERS</a></li>
        </ul>
    </nav>
    </header>

 <section class="banner" id="home">

    <div class="img-container reveal">
        <img class="image" src="images/gp.png">
   
    <div class="container-home ">
    <nav>
        <ul>
            <li><h2>JETHRO</h2></li>
            <li><h2>MIMON</h2></li>
            <li><h2>NICKA</h2></li>
            <li><h2>ALPHY</h2></li>
            <li><h2>BRYAN</h2></li>
        </ul>   
    </nav>
</div>
    </div>

 </section>

 <section class="act-container ">
    <div class="slider-container swiper" id="act">
        <div class="slide-content reveal" >
            <div class="class-wrapper swiper-wrapper">  
              <!--1-->
              
                <div class="card swiper-slide" id="slide1">
                <div class="image-content" id="img1">
                </div>

            <div class="card-content">
               <h1 class="name">1. Minimum Cost to Reach Destination</h1>
               <p class="description">
               Cities with distances between them and cost of traveling between cities.</p>

               <a href="1.php" class="btn btn-primary" id="myBtn">Enter</a>

            </div>
            </div>
            <!--2--> 
                <div class="card swiper-slide" id="slide2">
                <div class="image-content" id="img2">
                </div>
       
            <div class="card-content">
               <h1 class="name">2. Minimum Money Problem</h1>
               <p class="description">Array of coin denominations and a target amount.</p>

               <a href="2.php" class="btn btn-primary">Enter</a>
            </div>
            </div>
            <!--3-->
                <div class="card swiper-slide" id="slide3">
                <div class="image-content" id="img3">
                </div>
       
            <div class="card-content">
               <h2 class="name">3. Euclid's Algorithm</h2>
               <p class="description">Find the greatest common divisor (GCD) of two integers using Euclid's algorithm.</p>

               <a href="3.php" class="btn btn-primary">Enter</a>
            </div>
            </div>
            <!--4-->
                <div class="card swiper-slide" id="slide4">
                <div class="image-content" id="img4">
                </div>
        
            <div class="card-content">
               <h2 class="name">4. Couting the Frequency in an Array</h2>
               <p class="description">It will only count the number of frequency in an array.</p>

               <a href="4.php" class="btn btn-primary">Enter</a>
            </div>
            </div>
            <!--5-->
            <div class="card swiper-slide" id="slide5">
                <div class="image-content" id="img5">
                </div>
        
            <div class="card-content">
               <h2 class="name">5. Strings Array</h2>
               <p class="description">Series of numbers.</p>

               <a href="5.php" class="btn btn-primary">Enter</a>
            </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
        </div>
      </div>
</section>

<section class="bot-page">
    <h1 id="h2" class="reveal">MEMBERS</h1>
  <section class="bot-container reveal" id="members">
   

    <div class="card" id="box-card">
        <div class="card-image"> 
             <img src="images/JJ.jpg" style="width: 140px; margin: 5px 0 0 0; border-radius: 50%;">
        </div>
        <h2 id="name">Jaymhon Joriza</h2>
        <p id="text">POGI</p>
    </div>

    <div class="card" id="box-card">
        <div class="card-image img-2">
             <img src="images/JM.jpg" style="width: 140px; margin: 5px 0 0 0; border-radius: 50%;">
        </div>
        <h2 id="name">Jan Marlo Corpuz</h2>
        <p id="text">POGI</p>
    </div>

    <div class="card" id="box-card">
        <div class="card-image img-3">
              <img src="images/AL.jpg" style="width: 140px; margin: 5px 0 0 0; border-radius: 50%;">
        </div>
        <h2 id="name">Alphy Lamban</h2>
        <p id="text">POGI</p>
    </div>

    <div class="card" id="box-card">
        <div class="card-image img-4">
                <img src="images/RR.jpg" style="width: 140px; margin: 5px 0 0 0; border-radius: 50%;">
        </div>
        <h2 id="name">Ranicka Ramos</h2>
        <p id="text">POGI</p>
    </div>

    <div class="card" id="box-card">
        <div class="card-image img-5">
                 <img src="images/BL.jpg" style="width: 140px; margin: 5px 0 0 0; border-radius: 50%;">
        </div>
        <h2 id="name">Bryan Louie Ablao</h2>
        <p id="text">POGI</p>
    </div>
    
    

  </section>
</section>

</body>

<script src="js/bootstrap.esm.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.min.js"></script>


</html>

