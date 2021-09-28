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

?>