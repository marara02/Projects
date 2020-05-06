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
<body style="background-color:white">
<header>
    <div class="topnav">
        <button class="home"><a href ="main.php">Home</a></button>
  <div class="dropdown">
    <div id = "list">
        <button class="dropbtn"><p class="catalogtext">Catalog</p></button></div>
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
</body>
</html>