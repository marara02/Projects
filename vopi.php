<!DOCTYPE html>
<html>
<head>
    <title>Online Shop</title>
    <style>
        img{
            margin-top:-100px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
</body>
</html>
<?php
include "bakery.php";
include "Bakery.html";
class vopi extends bakery{
    public function More(){
            $p = <<<HEREDOC
<div class ="a">
<img src ="v.jpg" alt ="Red velvet" width ="35%" heigth = "10%">
</div>
HEREDOC;
        print $p;
    }
}
$v = new vopi("Voopie",3000,"Chocolate,Mild cocoa flavor,Tangy buttermilk,Sweet vanilla");
$v->More();
