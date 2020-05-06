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
class cake extends bakery
{
    public function __construct($type, $cost, $recept)
    {
        parent::__construct($type, $cost, $recept);
        //print "The cost per piece:".$cost;
        $pr = <<<hh
<div class ="main">
<img src ="r.jpg" alt ="Red velvet" width ="35%" heigth = "10%">
<p>The cost per piece: $cost </p>
</div>
hh;
print $pr;
    }
}
$cake = new cake("Cake",2000,"Mild cocoa flavor,Tangy buttermilk,Sweet vanilla,Very buttery");
$cake->cost;
//$cake->display();
?>
