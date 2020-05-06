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
      <style>
           .wrapper {
            text-align: center;
            margin-left:15%;
               margin-right: 15%;
            margin-top: 4%;
            padding: 0;
            display: grid;
            grid-template-columns: 300px 300px 300px;
            grid-gap: 17px;
            background-color: white;
            color: #444;
        }

        .box {
            display: flex;
            flex-direction:column;
            background-color: #239B56;
            color: #fff;
            border-radius: 5px;
            padding: 20px;
            font-size: 100%;
        }
        div.img{
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
          #t{
              font-style: italic;
              font-family: Apple Chancery, cursive;
          }
      </style>
</head>
<body style="background-color:white">
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"><a href ="main.php">Home</a></p></button>
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
    <div class="wrapper">
        <div class="box"><img src ="r.jpg" alt ="beef" width= 100% ><a href = "cake.php"><p id = "t">Red Velvet<br>2000tg</p></a></div>
        <div class="box"><img src ="v.jpg" alt ="chicken" width="100%" height="80%"><a href = "vopi.php"><p id ="t">Voopie<br>3000tg</p></a></div>
        <div class="box"><img src ="japan.jpg" alt ="sheep" width="100%" height="80%"><a href = "honey.php"><p id ="t">Japanese Cake<br>2000tg</br></p></a></div>
        <div class="box"><img src ="cook.jpg" alt ="Cookies" width="100%" height="90%"><a href = "Cookie.php"><p id ="t">Cookies<br>500tg</br></p></a></div>
        <div class="box"><img src ="cap.jpg" alt ="Capcakes" width="100%" height="90%"><a href = "Cupi.php"><p id ="t">Cupcakes<br>150tg</br></p></a></div>
        <div class="box"><img src ="bread.jpg" alt ="Bread" width="100%" height="90%"><a href = "Bread.php"><p id = "t">Bread<br>100tg</br></p></a></div>
</div>
</body>
</body>
</body>
</html>