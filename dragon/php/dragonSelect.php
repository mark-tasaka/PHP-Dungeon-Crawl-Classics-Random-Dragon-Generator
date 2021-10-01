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
    $a00 = array("Very young", "1", "1", "d4-2", "10", "1 x Claws (1d8 damage)");
    $a01 = array("Young", "2", "1", "d6-2", "11", "1 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)");
    $a02 = array("Sub-adult", "3", "1", "d8-1", "12", "1 x Claw (1d8 damage)<br/><br/>Bite (1d12 damage)");
    $a03 = array("Young adult", "4", "2", "d8+1", "13", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)");
    $a04 = array("Adult", "5", "2", "d8+2", "14", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)");
    $a05 = array("Old", "6", "2", "d10+2", "15", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)");
    $a06 = array("Very old", "7", "3", "d10+4", "16", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)");
    $a07 = array("Ancient", "8", "3", "d12+4", "17", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)<br/><br/>Wing buffet (2d12 damage)");
    $a08 = array("Wyrm", "9", "3", "d14+4", "18", "2 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)<br/><br/>Wing buffet (2d12 damage)");
    $a09 = array("Great wyrm", "10", "4", "d16+4", "19", "3 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)<br/><br/>Wing buffet (2d12 damage)<br/><br/>Crush (3d12 damage)");
    $a10 = array("Elder wyrm", "11", "5", "d10+10", "20", "4 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)<br/><br/>Wing buffet (2d12 damage)<br/><br/>Crush (3d12 damage)");
    $a11 = array("Immortal", "12", "6", "d12+10", "21", "4 x Claws (1d8 damage)<br/><br/>Bite (1d12 damage)<br/><br/>Tail slap (1d20 damage)<br/><br/>Wing buffet (2d12 damage)<br/><br/>Crush (3d12 damage)");

    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11);
    
    return $array1[$input];
    
}

function getDragonAge($input)
{

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

    $age -= 1;

    return $age;
}


function getDragonAgeNumber($input)
{    
    
    switch($input)
    {
        case 0:
            $age = rand(1, 5);
            break;

        case 1:
            $age = rand(6, 15);
            break;

        case 2:
            $age = rand(16, 25);
            break;
        
        case 3:
            $age = rand(26, 50);
            break;
        
        case 4:
            $age = rand(51, 100);
            break;   

        case 5:
            $age = rand(101, 200);
            break;

            case 6:
                $age = rand(201, 400);
                break;
    
            case 7:
                $age = rand(401, 600);
                break;
    
            case 8:
                $age = rand(601, 1000);
                break;
            
            case 9:
                $age = rand(1001, 2000);
                break;
            
            case 10:
                $age = rand(2001, 5000);
                break;   
    
            case 11:
                $age = rand(5001, 10000);
                break;    
    
        default:
        $age = 0;

    }

    return $age;

}

function getHitDice($input)
{
    $number = (int)$input;

    switch($number)
    {
        case 1:
            $hd = rand(1, 3);
            break;

        case 2:
            $hd = rand(1, 6);
            $hd += 2;
            break;

        case 3:
            $hd = rand(1, 8);
            $hd += 4;
            break;
        
        case 4:
            $hd = rand(1, 10);
            $hd += 6;
            break;
        
        case 5:
            $hd1 = rand(1, 6);
            $hd2 = rand(1, 6);
            $hd3 = rand(1, 6);

            $hd = $hd1 + $hd2 + $hd3;
            $hd += 10;
            break;    

        default:
        $hd = 0;

    }


    return $hd;
}

function getHitPoints ($age, $hd)
{
    $age += 1;

    $hitPoints = $age * $hd;

    return $hitPoints;
}

function getArmourClass ($age, $hd)
{
    $age += 10;

    $ac = $age + $hd;

    return $ac;
}


function getSpeed($input)
{
    $number = (int)$input;

    switch($number)
    {
        case 1:
            return "30'/60'";
            break;

        case 2:
            return "40'/80'";
            break;

        case 3:
            return "50'/100'";
            break;
        
        case 4:
            return "60'/120'";
            break;
        
        case 5:
            return "80'/160'";
            break;    

        default:
            return "99999999";

    }

}

function getAttackBonus ($hd, $size)
{
    $number = (int)$size;

    switch($number)
    {
        case 1:
            $bonus = 1;
            break;

        case 2:
            $bonus = rand(1, 3);
            break;

        case 3:
            $bonus = rand(1, 4);
            break;
        
        case 4:
            $bonus = rand(1, 6);
            break;
        
        case 5:
            $bonus = rand(1, 8);
            break;    

        default:
        $bonus = 99999;

    }

    $attackBonus = $hd + $bonus;

    return $attackBonus;

}

?>