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
        'Infravision.',
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
        '100 feet.',
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



function getUniquePowersNumbers ($hd)
{
    $numberMartialPowers = $hd/3;
    $numberPowers = (int)$numberMartialPowers;

    $uniquePowers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32);
    $dragonUniquePowers = array();

    shuffle($uniquePowers);

    for($i = 0; $i < $numberPowers; ++$i)
    {
        array_push($dragonUniquePowers, $uniquePowers[$i]);
    }

    return $dragonUniquePowers;
}



function getDragonUniquePowersName ($input)
{
    $uniquePowers = array(
        'Bless (1/day).',
        'Cause earthquake (1/day).',
        'Change shape (1/day).',
        'Charm (1/hour).',
        'Charm reptiles (1/hour).',
        'Clear passage (at will).',
        'Control fire (3/hour).',
        'Corrupt water (at will).',
        'Curse (1/day).',
        'Darkness (at will).',
        'Detection (at will).',
        'Dust cloud (1/turn).',
        'Earth to mud (1/hour).',
        'Earth to stone (1/day).',
        'Gust of wind (1/day).',
        'Heat metal (3/hour).',
        'Ice walking (at will).',
        'Light (at will).',
        'Locate object (1/day).',
        'Luck giver (1/day).',
        'Neutralize poison (1/day).',
        'Plant growth (1/hour).',
        'Reverse gravity (1/day).',
        'Speak with animals (1/hour).',
        'Spider climb (at will).',
        'Summon allies (1/turn).',
        'Telepathic (1/hour).',
        'Teleport (1/hour).',
        'Turn invisible (1/hour).',
        'Ventriloquism (at will).',
        'Wall of fog (1/hour).',
        'Water walk (at will).',
        'Powerful Magical Artifact.'
    );

    return $uniquePowers[$input];

}



function getDragonUniquePowersNameDesc ($input, $hd, $ref)
{
    $uniquePowers = array(
        'The dragon can grant a boon to one creature equivalent to a +1 bonus to all rolls for 24 hours. More powerful dragons may be able to bless more creatures or for longer periods; some use this ability to emulate godhood.',
        'The dragon can create an earthquake centered on a point within 500’. Earth shakes for several seconds. All nearby creatures take 1d3 buffeting damage. Creatures within 50’ of the epicenter are tossed into the earth for a fall of 1d8 x 10’ (with falling damage of 1d6 per 10’ fallen).',
        'Change shape (1/day).',
        'Charm (1/hour).',
        'Charm reptiles (1/hour).',
        'The dragon can pass through vegetation without leaving any trace.',
        'Control fire (3/hour).',
        'Corrupt water (at will).',
        'The dragon can curse one creature with a -1 penalty to all rolls for 24 hours.',
        'The dragon can cloak an area of 30’ radius into absolute darkness. Target any spot within 100’.',
        'Detection (at will).',
        'Dust cloud (1/turn).',
        'The dragon can transform an area of earth into sticky mud. The area transformed can be up to 50’ x 50’ in size. The mud, up to 3’ deep, slows movement to half speed for all within.',
        'The dragon can transform an area of earth into solid stone. The area transformed, up to 100’ x 20’ x 5’, is permanently changed into stone.',
        'Gust of wind (1/day).',
        'The dragon can heat one metal object to painful levels. This ability inflicts 1d8 damage per round to characters holding heated objects or 1d10 damage per round to characters wearing heated armour.',
        'The dragon can walk across icy surfaces as if they were normal ground.',
        'The dragon can bring full light of daylight into an area of 30’ radius. Target any spot within 100’.',
        'Locate object (1/day).',
        'The dragon can grant a permanent bonus of +1 Luck to one creature every 24 hours. The same creature cannot receive this bonus more than once per month.',
        'The dragon can cancel the effects of any one poison by touching the affected creature.',
        'All plants within 100’ grow to twice their current size in 1d4 rounds; targets within growth are entangled (half speed, -2 to attacks).',
        'The dragon can reverse gravity in an area 100’ surrounding itself. The dragon itself is not affected, but all other creatures “fall” upward, suffering falling damage of 1d6 per 10’ fallen if they hit a ceiling. If they are under open skies, they rise to 100’ in the air before stopping and bobbing in place.',
        'The dragon can designate one animal and communicate effectively in that animal’s native tongue for the remainder of the hour. The animal still cannot communicate beyond the limits of its intelligence and physical abilities.',
        'The dragon can climb any surface as if it were a spider.',
        'Summon allies (1/turn).',
        'The dragon can read the surface thoughts of one creature within line of sight.',
        'Teleport (1/hour).',
        'The dragon can become invisible for up to 1 turn.',
        'The dragon can throw its voice to any point within 200’.',
        'The dragon can summon a wall of fog at will. The wall is up to 100’ x 20’ x 100’. Within the fog, targets suffer -4 to all attacks and move at half speed.',
        'The dragon can walk across surface of water as if it were ground.',
        'The dragon possesses – and uses – a powerful magical artifact of a design up to the judge.'
    );

    if($input === 2)
    {
        $form = array('man', 'lion', 'woman', 'lizard', 'stallion', 'bee');

        shuffle($form);
        return 'The dragon can transform into another creature, assuming all physical traits of that creature. Creature type: ' . $form[0];
    }
    else if($input === 3)
    {
        $save = $hd + 10;
        return 'The dragon can charm one living creature. Target considers the dragon its closest friend for 1d4 days or until attacked or betrayed by the dragon. DC ' . $save . ' Will Save to resist.';
    }
    else if($input === 4)
    {
        $save = $hd + 10;
        return 'All reptiles within 100’ become friendly to the dragon. DC ' . $save . ' Will Save to resist.';
    }
    else if($input === 6)
    {
        return 'The dragon can take control of mundane flames, such as torches and lanterns, and cause them to dance, extinguish, or expand; can create line of flame up to 40’ long per round. 1d6 damage initially, and 1d6 damage each round engulfed.  DC ' . $ref . ' Ref Save to extinguish.';
    }
    else if($input === 7)
    {
        $save = $hd + 10;
        return 'The dragon can turn all water within 100’ poisonous.  DC ' . $save . ' Fort Save to avoid suffering 1d4 points of damage per sip.';
    }
    else if($input === 10)
    {
        $form = array('gold', 'silver', 'precious metals', 'gems', 'iron', 'steel', 'plants', 'living creatures', 'men', 'dwarves');
        
        shuffle($form);

        return 'The dragon can detect object of one type within 100’ at will. Level of precision depends on age and ranges from very specific (i.e., exact size and quantity of object) to vague (directional only). Object of detection: ' . $form[0];
    }
    else if($input === 11)
    {
        $save = $hd + 10;
        return 'The dragon can summon a dust cloud that is 10’ wide at base and up to 50’ tall. Targets within suffocate (DC ' . $save . ' Fort Save or 1d4 Stamina loss per round). Cloud remains while dragon concentrates; when concentration ends, cloud disperses in 1d4 rounds, retaining full strength until dispersed.';
    }
    else if($input === 14)
    {
        $save = $hd + 10;
        return 'The dragon can generate powerful hurricane-strength wind, blowing in a single direction originating from the dragon in cone shape up to 100’ wide at termination. Creatures must make DC ' . $save . ' Strength check or be blown backward a distance equal to the dragon’s HD x 10 in feet, taking 1d4 damage for every 10 feet blown.';
    }
    else if($input === 18)
    {
        $form = array('up to 100’ on this plane.', 'up to 1 mile on this plane.', 'up to 10 miles on this plane.', 'up to 100 miles on this plane.', 'any distance, as long as the object is on this plane.', 'any distance, including other planes.');
        
        shuffle($form);

        return 'The dragon can locate an object known to itself. It receives an unerring sense of direction toward the object and the approximate distance. The range of this ability is: ' . $form[0];
    }
    else if($input === 25)
    {
        $d4 = rand(1, 4);
        $d2 = rand(1, 2);
        $d3 = rand(1, 3);
        $oneD6Plus2 = rand(3, 8);
        $twoD6 = rand(2, 12);
        $d10 = rand(1, 10);

        $d8 = rand(1, 8);

        switch($d8)
        {
            case 1:
                return 'Insect swarm arrives in ' . $d4 . ' rounds.';
                break;
                
            case 2:
                return $d2 . ' Large Snakes arrive in ' . $d4 . ' rounds.';
                break;
                                
            case 3:
                return $d3 . ' Large crocodiles arrive in ' . $d4 . ' rounds.';
                break;
                                                
            case 4:
                return $oneD6Plus2 . ' Wolves arrive in ' . $d4 . ' rounds.';
                break;
                                                                
            case 5:
                return $twoD6 . ' Humanoids arrive in ' . $d4 . ' rounds.';
                break;
                                                                                
            case 6:
                return $d4 . ' Lions arrive in ' . $d4 . ' rounds.';
                break;
                                                                                
            case 7:
                return $d4 . ' Type 1 Demons arrive in ' . $d4 . ' rounds.';
                break;
                                                                                                
            case 8:
                return $d10 . ' Zombies arrive in ' . $d4 . ' rounds.';
                break;

            default:
            return '99999999999999';
        }
    }
    else if($input === 27)
    {
        $form = array('up to 100’.', 'up to 1 mile.', 'up to 10 miles.', 'up to 100 miles.');
        
        shuffle($form);

        return 'The dragon can transport itself plus up to three other creatures instantaneously. Target location must be a place the dragon has seen before; 10% of dragons can teleport to another plane. Distance covered: ' . $form[0];
    }
    else
    {        
        return $uniquePowers[$input];
    }


}





?>