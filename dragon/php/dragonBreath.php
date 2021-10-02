<?php

function dragonBreath($input)
{
    $a00 = array('Fire', 'Ref', '', 'Line, width 10’, length 3d6 x 10’');
    $a01 = array('Cold', 'Fort', '', 'Cone, width 1d4x10’, length 1d6 x 10’');
    $a02 = array('Acid', 'Fort', '', 'Cone, width 1d6x10’, length 1d4 x 10’');
    $a03 = array('Electricity', 'Ref', '', '1-4 line forks, width 5’, total length 3d6 x 10’**');
    $a04 = array('Poison gas', 'Fort', '', 'Cloud, radius 1d3 x 10’, aimed up to 90’ away');
    $a05 = array('Sleep gas', 'Fort', '', 'Cloud, radius 1d4 x 10’, aimed up to 60’ away');
    $a06 = array('Steam', 'Fort', '', 'Cloud, radius 1d4 x 10’, aimed up to 60’ away');
    $a07 = array('Smoke', 'N/A', '', 'Cloud, radius 1d3 x 10’, aimed up to 90’ away');

    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07);
    
    return $array1[$input];

}


function getDragonBreath()
{
    $breathSelect = array(0, 1, 2, 3, 4, 5, 6, 7);

    shuffle($breathSelect);

    return $breathSelect;

}

function getDragonSaveDC($input, $hd)
{
    if($input === 7)
    {
        return '';
    }
    else
    {
        $save = 10 + $hd;
        return 'DC ' . $save . ' ';
    }


}


function getDragonBreathDamage($input, $hitpoints)
{
    if($input === 7)
    {
        return 'No damage but remains for 1d6 rounds***';
    }
    else if($input === 6)
    {
        $damage = $hitpoints;
        $damageSave = $hitpoints/4;
        $damageSave = (int)$damageSave;
        return $damage . ' points (' . $damageSave . ' dmg with save)';
    }
    else if($input === 5)
    {
        return 'Fall asleep for 1d6 hours, no effect with save';
    }
    else if($input === 4)
    {
        return 'Death or no effect with save';
    }
    else
    {
        $damage = $hitpoints;
        $damageSave = $hitpoints/2;
        $damageSave = (int)$damageSave;
        return $damage . ' points (' . $damageSave . ' dmg with save)';
    }


}




function getDragonBreathMessage($input)
{
    if($input === 3)
    {
        return '**A dragon with an electrical breath weapon can target up to 4 creatures, with the electrical blast forking from target to target.<br/>';
    }
    else if($input === 7)
    {
        return '*** Smoke breath weapons obscure the target point. The dragon can use this to prevent archers from seeing it, to clog visibility down a tunnel, to conceal an escape, and so on.<br/>';
    }
    else
    {
        return '';
    }

}




?>