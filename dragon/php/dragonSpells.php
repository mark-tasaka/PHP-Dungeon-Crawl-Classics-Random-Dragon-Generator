<?php

function getSpellRoll($input)
{
    switch($input)
    {
        case 0:
            $spellRoll = rand(1, 4);
            $spellRoll -=2;
            break;

        case 1:
            $spellRoll = rand(1, 6);
            $spellRoll -=2;
            break;

        case 2:
            $spellRoll = rand(1, 8);
            $spellRoll -=1;
            break;
        
        case 3:
            $spellRoll = rand(1, 8);
            $spellRoll +=1;
            break;
        
        case 4:
            $spellRoll = rand(1, 8);
            $spellRoll +=2;
            break;   

        case 5:
            $spellRoll = rand(1, 10);
            $spellRoll +=2;
            break;

            case 6:
                $spellRoll = rand(1, 10);
                $spellRoll +=4;
                break;
    
            case 7:
                $spellRoll = rand(1, 12);
                $spellRoll +=4;
                break;
    
            case 8:
                $spellRoll = rand(1, 14);
                $spellRoll +=4;
                break;
            
            case 9:
                $spellRoll = rand(1, 16);
                $spellRoll +=4;
                break;
            
            case 10:
                $spellRoll = rand(1, 10);
                $spellRoll +=10;
                break;   
    
            case 11:
                $spellRoll = rand(1, 12);
                $spellRoll +=10;
                break;    
    
        default:
        $spellRoll = 0;

    }

    return $spellRoll;

}


function getSpellActionDice($input)
{
    if($input <= 0)
    {
        $spellDice = array('', '', '', '0', '0', '0');
        return $spellDice;
    }
    else if($input === 1 || $input === 2)
    {
        $spellDice = array('1d20+2', '', '', '1', '0', '0');
        return $spellDice;
    }
    else if($input >= 3 && $input <= 6)
    {
        $spellDice = array('1d20+4', '1d20+4', '', '2', '1', '0');
        return $spellDice;
    }
    else if($input === 7)
    {
        $spellDice = array('1d24+4', '1d20+4', '1d16+4', '2', '2', '2');
        return $spellDice;
    }
    else if($input === 8)
    {
        $spellDice = array('1d12+6', '', '', '6', '0', '0');
        return $spellDice;
    }
    else if($input === 9 || $input === 10)
    {
        $spellDice = array('1d30+6', '1d30+6', '1d30+6', '3', '3', '3');
        return $spellDice;
    }
    else if($input === 11 || $input === 12)
    {
        $spellDice = array('1d30+6', '1d20+6', '', '2', '2', '0');
        return $spellDice;
    }
    else if($input === 13 || $input === 14)
    {
        $spellDice = array('1d20+8', '1d20+8', '1d20+8', '3', '2', '1');
        return $spellDice;
    }
    else if($input >= 15 && $input <= 18)
    {
        $spellDice = array('1d20+10', '1d20+10', '1d20+10', '4', '3', '2');
        return $spellDice;
    }
    else
    {
        $spellDice = array('1d20+14', '1d20+14', '1d20+14', '5', '4', '3');
        return $spellDice;
    }


}


function spellLevel1Label ($input)
{
    $number = (int)$input;

    if($number === 0)
    {
        return '';
    }
    else
    {
        return '1';
    }
}


function spellLevel2Label ($input)
{
    $number = (int)$input;

    if($number === 0)
    {
        return '';
    }
    else
    {
        return '2';
    }
}


function spellLevel3Label ($input)
{
    $number = (int)$input;

    if($number === 0)
    {
        return '';
    }
    else
    {
        return '3';
    }
}




function getLevel1Spells ($input)
{
    $spells = (int)$input;
    $dragonSpells = array();

    $spellList = array('Animal summoning', 'Cantrip', 'Charm person', 'Chill touch', 'Choking cloud', 'Colour spray', 'Comprehend languages', 'Detect magic', 'Ekim’s mystical mask', 'Enlarge', 'Feather fall', 'Find familiar', 'Flaming hands', 'Force manipulation', 'Magic missile', 'Magic shield', 'Mending', 'Read magic', 'Ropework', 'Runic alphabet (mortal)', 'Sleep', 'Spider climb', 'Ventriloquism', 'Ward portal');

    shuffle($spellList);

    if($spells === 0)
    {
        return;
    }

    for($i = 0; $i < $spells; ++$i)
    {
        $theSpell = $spellList[$i];

        array_push($dragonSpells, $theSpell);
    }

    return $dragonSpells;

}




function getLevel2Spells ($input)
{
    $spells = (int)$input;
    $dragonSpells = array();

    $spellList = array('Arcane affinity', 'Detect evil', 'Detect invisible', 'ESP', 'Fire resistance', 'Forget', 'Invisibility', 'Invisible companion', 'Knock', 'Levitate', 'Locate object', 'Magic mouth', 'Mirror image', 'Monster summoning', 'Nythuul’s porcupine coat', 'Phantasm', 'Ray of enfeeblement', 'Scare', 'Scorching ray', 'Shatter', 'Spider web', 'Strength', 'Wizard staff');

    shuffle($spellList);

    if($spells === 0)
    {
        return;
    }

    for($i = 0; $i < $spells; ++$i)
    {
        $theSpell = $spellList[$i];

        array_push($dragonSpells, $theSpell);
    }

    return $dragonSpells;

}



function getLevel3Spells ($input)
{
    $spells = (int)$input;
    $dragonSpells = array();

    $spellList = array('Binding', 'Breathe life', 'Consult spirit', 'Demon summoning', 'Dispel magic', 'Eldritch hound', 'Emirikol’s entropic maelstrom', 'Eternal champion', 'Fireball', 'Fly', 'Gust of wind', 'Haste', 'Lightning bolt', 'Make potion', 'Paralysis', ' Planar step', 'Runic alphabet (fey)', 'Slow', 'Sword magic', 'Transference', 'Turn to stone', 'Water breathing', 'Write magic');

    shuffle($spellList);

    if($spells === 0)
    {
        return;
    }

    for($i = 0; $i < $spells; ++$i)
    {
        $theSpell = $spellList[$i];

        array_push($dragonSpells, $theSpell);
    }

    return $dragonSpells;

}





?>