<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>onlineshop.kz</title>
	<!--<link rel="stylesheet" type="text/css" href="CSS.css">-->
	<link rel="stylesheet" type="text/css" href="main.css">
	  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
   <link rel="shortcut icon" href="/shop.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel = "icon" href = "shop.png" type = "image/x-icon"> 
         <link rel="stylesheet" type="text/css" href="header.css">
      <script type="text/javascript" src="functions.js"></script>
</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>
  <div class="dropdown">
    <div id = "list">
        <button class="dropbtn"><img class="img" src ="line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
         <div class="dropdown-content">
      <a href="b2.php"><img src ="cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
      <a href="meal.php"><img src ="meal.png" alt ="meal" width ="15px" height ="15px">Meals</a>
      <a href="#"><img src ="fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
      <a href="#"><img src ="fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
      <a href="#"><img src ="vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
      <a href="#"><img src ="drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
    </div>
</div>
  <div class="dropdown">
    <div id = "list">
        <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="phone.png" width="25" height="25" class="contactimg"> Contacts</p></button></div>
           <div class="dropdown-content">
       <a href="#"><p>Email:onlineshop@mail.ru</p></a>
       <a href="#"><p>Phone number:+7(777)-777-77-77</p></a>
    </div>
</div>
        <button class="log"><a href="#" class="logtext">LogIn</a><p class="sign">/</p><a href="registration.php" class="regtext">Register</a></button>
          <form method="post">
      <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
      <button  type = "submit" class="sub" name = "submit" >&#128270;</button>
      </form>
        <div><a href="basket.html" title="Basket"><img src="basket.png" class="basimg"></a></div>
    </div>
 </header> 
<hr style="color: black;">
</header>
<body>
<div class="main">
  <div class="slideshow-container">

  <div class="mySlides fade">
    <img src="shop1.png" alt ="1" width="900px" height="500px">
  </div>

  <div class="mySlides fade">
    <img src="new.png" alt ="2" width="900px" height="450px">
  </div>

  <div class="mySlides fade">
  	<img src="stay.png" alt ="3" width="900px" height="450px">
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
<div class="gallery-image">
    <div class="img-box">
      <img src="bake1.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p><a href ="b2.html">Bakery products</a></p>
          <p class="opacity-low">NEW catalog</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="milk.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Natural Prosucts</p>
          <p class="opacity-low">Eco system from villages 180 <small>tg</small></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="https://picsum.photos/350/250/?image=431" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Columbia Coffee</p>
          <p class="opacity-low">New cost 1500 <small>tg per 1 kg</small></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="fff.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Sales to fruits and vegetables</p>
          <p class="opacity-low">50% of sale</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="tea.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Aromo tea from India</p>
          <p class="opacity-low">New Cost</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="choco.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Switzerland chocolate</p>
          <p class="opacity-low">Minimum cost 450<small>tg</small></p>
        </div>
      </div> 
    </div>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
  }
  </script>
  <footer class="footer">
    <br>
    <p>follow us on instagram:onlineshop</p>
  </footer>
  </body>
</html>
