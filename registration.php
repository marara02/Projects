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
    <link rel="stylesheet" type="text/css" href="registration.css">

</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>
        <div class="dropdown">
            <div id = "list">
                <button class="dropbtn"><img class="img" src ="line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-content">
                <a href="#"><img src ="cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
                <a href="#"><img src ="meal.png" alt ="meal" width ="15px" height ="15px">Meals</a>
                <a href="#"><img src ="fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
                <a href="#"><img src ="fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
                <a href="#"><img src ="vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
                <a href="#"><img src ="drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
            </div>
        </div>
        <div class="dropdown">
            <div id = "list">
                <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="phone.png" width="25" height="25" class="contactimg"> Conatcts</p></button></div>
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
<body>
<hr style="color: black;">
<div class="main">
    <form name="form" class="form" onSubmit="return validate();" ">
        <div class="f">
            <h1 style="color: #138D75;">Registration form</h1>
            <input class="input" type="name" id="num" name="num" placeholder="Full Name">
            <input class="input"  type="Email" id="holder" name="name" placeholder="Email">
            <input class="input" type="password" name="pass1" placeholder="Password" id="pass1" minlength="8">
            <input class="input" type="password" name="pass2" placeholder="Resset Password" id="pass2" minlength="8">
            <input class="inputsub"type="submit" name="submit" id="sub" value="Submit">
        </div>
    </form>
</div>
<footer class="footer" style="">
    <br>
    <p>follow us on instagram:@onlineshop</p>
</footer>
</body>
</html>