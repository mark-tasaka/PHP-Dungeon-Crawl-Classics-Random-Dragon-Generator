<?php

function getDragonMartialPowersName ($input)
{
    $martialPowers = array(
        'Additional breath weapon.',
        'Amphibious.',
        'Armoured hide.',
        'Barbed tail.',
        'Burrow.',
        'Damage reduction.',
        'Dive bomb attack.',
        'Fast reflexes.',
        'Frightful presence. ',
        'Hurl rocks.',
        'Hypnotic stare.',
        'Immunity.',
        'Infravision 100 feet',
        'Magic resistance.',
        'Petrifying gaze.',
        'Retinue.',
        'Rusting hide',
        'Snatch attack.',
        'Throw spines.',
        'Weapon-resistant hide.'
    );

    return $martialPowers[$input];

}


function getDragonMartialPowersDesc ($input, $hd)
{
    $martialPowers = array(
        '',
        'The dragon can breathe water and swim effortlessly.',
        '+4 AC bonus.',
        'The dragon receives an additional attack equivalent to a tail slap, which also causes poison damage.',
        'The dragon can “swim” through sand and dirt at its normal speed.',
        '',
        'When fighting from the air, the dragon’s first round of claw and bite attacks receive an 
        additional +4 attack bonus and +d8 damage.',
        'The dragon’s Ref save is increased by an additional +4.',
        '',
        'The attack requires one action die and is treated as missile fire at the same attack bonus. The hurled stone does 1d12 damage.',
        '',
        '',
        '',
        'All spells cast against dragon subject to 50% chance of failure before saves are rolled.',
        '',
        '',
        'The dragon’s hide causes rust in all normal metal objects. Weapons used to attack the dragon crumble to rust upon touch (although magic weapons are immune).',
        '',
        'In lieu of a claw attack, the dragon can make a missile barbed spine attack (100’ range) with the same attack bonus and damage as the claw attack up to 4 times per day.',
        'The dragon’s armor is so thick that it takes half damage from mundane weapons. Magical weapons do normal damage.'
    );

    if($input === 5)
    {
        $number = rand(1, 4);

        if($number === 1)
        {
            return $number . ' point of damage reduction.';
        }
        else
        {
            return $number . ' points of damage reduction.';
        }
    }
    else if($input === 8)
    {
        $save = $hd + 10;
        return 'All who look upon it must make a DC ' . $save . ' Will save or flee in terror (duration 1d4 turns or until reach a safe distance).';
    }
    else if($input === 10)
    {
        $save = $hd + 10;
        return 'A creature that meets the dragon’s gaze must make a DC ' . $save . ' Will save or stand stupefied as long as the dragon holds its gaze.';
    }
    else if($input === 11)
    {
        $immunityArray = array('poison', 'fire', 'cold', 'electricity', 'arrows and bolts', 'curses', 'paralysis', 'sleep', 'gas', 'suffocation', 'force attacks', 'sonic attacks');

        shuffle($immunityArray);

        $immunity = $immunityArray[0];

        return 'The dragon is immune to: ' . $immunity;
    }
    else if($input === 14)
    {
        $save = $hd + 10;
        return 'A creature that meets the dragon’s gaze must make a DC ' . $save . ' Will save or be permanently changed to stone.';
    }
    else if($input === 15)
    {
        $retinue = rand(5, 8);
        $retinueHD = rand(3, 6);
        return 'A retinue of ' . $retinue . ' loyal followers of ' . $retinueHD . ' HD each, armed with swords and chainmail.';
    }
    else if($input === 17)
    {
        $save = $hd + 10;
        return ' On a successful claw attack, the dragon snatches a target.  Victim suffers 1d6 damage per round. A DC ' . $save . ' Strength check is required to break free.';
    }
    else
    {
        return $martialPowers[$input];
    }

}


function getMartialPowersNumbers ($hd)
{
    $numberMartialPowers = $hd/4;
    $numberMartialPowers = (int)$numberMartialPowers;

    $martialPowers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19);
    $dragonMarialPowers = array();

    shuffle($martialPowers);

    for($i = 0; $i < $numberMartialPowers; ++$i)
    {
        array_push($dragonMarialPowers, $martialPowers[$i]);
    }

    return $dragonMarialPowers;
}


function getACBonusMartial($input)
{
    $bonus = 0;

    foreach($input as $in)
    {
        if($in === 2)
        {
            $bonus = 4;
        }
    }

    return $bonus;
}


function getReflexBonusMartial($input)
{
    $bonus = 0;

    foreach($input as $in)
    {
        if($in === 7)
        {
            $bonus = 4;
        }
    }

    return $bonus;
}


function getAddBreathMartial($input)
{
    $bonus = 0;

    foreach($input as $in)
    {
        if($in === 0)
        {
            $bonus = 1;
        }
    }

    return $bonus;
}


?>