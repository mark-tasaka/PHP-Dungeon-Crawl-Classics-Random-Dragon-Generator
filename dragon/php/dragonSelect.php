<?php

function dragonSize ($input)
{
    $number = (int)$input;

    switch($number)
    {
        case 1:
            return "Cat-sized";
            break;

        case 2:
            return "Small";
            break;

        case 3:
            return "Average-sized";
            break;
        
        case 4:
            return "Large-sized";
            break;
        
        case 5:
            return "God-like";
            break;    

        default:
            return "99999999";

    }
}

function dragonAppearance()
{
    $appearance = array( "Amethyst", "Black", "Blue", "Brass", "Bronze", "Brown", "Cloudy", "Copper", "Crystal", "Emerald", "Faerie-like", "Fish-like", "Gold", "Green", "Lion-like", "Mercury", "Misty", "Multi-chromatic", "Platinum", "Purple", "Red", "Salamander-like", "Sapphire", "Shadow", "Silver", "Steel", "Topaz", "Turtle-like", "White", "Yellow");

    shuffle($appearance);

    return $appearance[0];
}


function getDragonAgeArray($input)
{
    $a00 = array("Very young (1-5 years)", "1", "1", "d4-2", "10", "1 claw");
    $a01 = array("Young (6-15 years)", "2", "1", "d6-2", "11", "1 claw, bite");
    $a02 = array("Sub-adult (16-25 years)", "3", "1", "d8-1", "12", "1 claw, bite");
    $a03 = array("Young adult (26-50 years)", "4", "2", "d8+1", "13", "2 claws, bite");
    $a04 = array("Adult (51-100 years)", "5", "2", "d8+2", "14", "2 claws, bite");
    $a05 = array("Old (101-200 years)", "6", "2", "d10+2", "15", "2 claws, bite, tail slap");
    $a06 = array("Very old (201-400 years)", "7", "3", "d10+4", "16", "2 claws, bite, tail slap");
    $a07 = array("Ancient (401-600 years)", "8", "3", "d12+4", "17", "2 claws, bite, tail slap, wing buffet");
    $a08 = array("Wyrm (601-1,000 years)", "9", "3", "d14+4", "18", "2 claws, bite, tail slap, wing buffet");
    $a09 = array("Great wyrm (1,001-2,000 years)", "10", "4", "d16+4", "19", "3 claws, bite, tail slap, wing buffet, crush");
    $a10 = array("Elder wyrm (2,000-5,000 years)", "11", "5", "d10+10", "20", "4 claws, bite, tail slap, wing buffet, crush");
    $a11 = array("Immortal (5,001+ years)", "12", "6", "d12+10", "21", "4 claws, bite, tail slap, wing buffet, crush");

    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11);
    
    return $array1[$input];
    
}

function getDragonAge($input)
{
    $dragonArray = array();

    switch($input)
    {
        case 1:
            $age = rand(1, 4);
            break;

        case 2:
            $age = rand(1, 6);
            break;

        case 3:
            $number1 = rand(1, 4);
            $number2 = rand(1, 4);
            $age = $number1 + $number2;
            break;
        
        case 4:
            $number3 = rand(1, 4);
            $number4 = rand(1, 4);
            $number5 = rand(1, 4);
            $age = $number3 + $number4 + $number5;
            break;
        
        case 5:
            $age = rand(5, 12);
            break;    

        default:
        $age = 0;

    }

    $dragonArray = getDragonAgeArray($age);

    return $dragonArray;
}


?>