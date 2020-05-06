<?php
include 'bakery.php';

class Bread extends bakery
{
    public function bbb(){
        $br = <<<HEREDOC
<div class ="a">
<img src ="bread.jpg" alt ="Cookie" width ="35%" heigth = "26%">
</div>
HEREDOC;
        print $br;
    }
    public function choose(){
        $b = <<<Hr
<aside class ="type">
<ul class ="type2">
<form action='' method='POST'>
<li><input type ="submit" name ="first" value ="Roll"></li>
<li><input type ="submit" name ="second" value="Lozenge"</input></li>
<li><input type ="submit" name ="third" value="Buns"</input></li>
</ul>
</form>
</aside>
Hr;
        print $b;
    }
}
$bread = new Bread("Flour products",100,"Flour and milk,sugar");
$bread->bbb();
$bread->choose();