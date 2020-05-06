<!DOCTYPE html>
<html>
<head>
    <title>Online Shop</title>
    <style>
        .main {
           display: inline-block;
            margin:auto;
        }

        select {
            width: 10%;
        //text-align: center;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2) inset, 0 -1px 0 rgba(0, 0, 0, .05) inset;
        }
        input[type = submit]{
            font-size:20px;
            border-radius: 10px;
            background-color: #239B56;
        }
        input[type = "submit"]:hover {
            box-shadow: 0 0 0 1px #4CAF50 inset, 0 1px 2px rgba(0, 0, 0, .2) inset;
        }
        img{
            margin-top:-100px;
            margin-left: 50px;
        }
        .type{
            margin-left:26px;
        }
        .type2 li{
            display: inline-block;
            font-size: 20px;
            padding: 20px;
        }
    </style>
</head>
</html>
<?php
include 'Bakkery (2).php';
class bakery{
     public $type;
     public $cost;
     public $recept;

     public function __construct($type,$cost,$recept)
     {
         $this->$type = $type;
         $this->$cost = $cost;
         $this->$recept = $recept;
        print '<div class ="main">';
        print '</div>';
     }

     public function __destruct()
     {
     }
}