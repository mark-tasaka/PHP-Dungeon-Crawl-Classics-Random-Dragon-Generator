<!DOCTYPE html>
<html>
<head>
<title>DCC Dragon</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Dragon Generator..">
	<meta name="keywords" content="Dungeon Crawl Classics,PHP,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/icon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/dragon.css">
    
    
    
    
</head>
<body>

<?php

include 'php/dragonSelect.php';
include 'php/dragonSpells.php';
include 'php/dragonBreath.php';
include 'php/dragonPowers.php';


if(isset($_POST["theDragonSize"]))
{
    $dragonSize = $_POST["theDragonSize"];

}

$theDragonSize = dragonSize ($dragonSize);
$dragonAppearance = dragonAppearance();

$alignment = getDragonAlignment();

$dragonAge = getDragonAge($dragonSize);

$dragonAgeArray = array();
$dragonAgeArray = getDragonAgeArray($dragonAge);

$dragonAgeDesc = $dragonAgeArray[0];
$dragonAgeYears = getDragonAgeNumber($dragonAge);

$dragonDailyBreath = $dragonAgeArray[2];

$dragonAttackTypes = $dragonAgeArray[5];

$dragonHD = getHitDice($dragonSize);

$martialPowerArrayNumber = array();
$martialPowerArrayNumber = getMartialPowersNumbers($dragonHD);

$martialACBonus = getACBonusMartial($martialPowerArrayNumber);
$martialRefBonus = getReflexBonusMartial($martialPowerArrayNumber);
$martialSecondBreathBonus = getAddBreathMartial($martialPowerArrayNumber);


$dragonHitPoints = getHitPoints ($dragonAge, $dragonHD);

$dragonAC = getArmourClass ($dragonAge, $dragonHD);

$dragonAC += $martialACBonus;

$dragonSpeed = getSpeed($dragonSize);

$dragonAttackBonus = getAttackBonus ($dragonHD, $dragonSize);

$dragonBreathArrayNumbers = array();
$dragonBreathArrayNumbers = getDragonBreath();

$dragonBreathNumber = $dragonBreathArrayNumbers[0];
$dragonBreathArray = array();
$dragonBreathArray = dragonBreath($dragonBreathNumber);
$dragonBreathSave = getDragonSaveDC($dragonBreathNumber, $dragonHD);
$dragonBreathDamage = getDragonBreathDamage($dragonBreathNumber, $dragonHitPoints);
$dragonBreathMessage = getDragonBreathMessage($dragonBreathNumber);

$dragonBreathNumber2 = $dragonBreathArrayNumbers[1];
$dragonBreathArray2 = array();
$dragonBreathArray2 = dragonBreath($dragonBreathNumber2);
$dragonBreathSave2 = getDragonSaveDC($dragonBreathNumber2, $dragonHD);
$dragonBreathDamage2 = getDragonBreathDamage($dragonBreathNumber2, $dragonHitPoints);
$dragonBreathMessage2 = getDragonBreathMessage($dragonBreathNumber2);


$dragonFort = $dragonHD;
$dragonWill = $dragonHD;
$dragonRef = $dragonHD;

$dragonRef += $martialRefBonus;

$spellRoll = getSpellRoll($dragonAge);

$spellArray = array();
$spellArray = getSpellActionDice($spellRoll);

$spellCheckLevel1 = $spellArray[0];
$spellCheckLevel2 = $spellArray[1];
$spellCheckLevel3 = $spellArray[2];

$numberLevel1Spells = $spellArray[3];
$numberLevel2Spells = $spellArray[4];
$numberLevel3Spells = $spellArray[5];

$spellLabelLevel1 = spellLevel1Label($numberLevel1Spells);
$spellLabelLevel2 = spellLevel2Label($numberLevel2Spells);
$spellLabelLevel3 = spellLevel3Label($numberLevel3Spells);

$spellListLevel1 = array();
$spellListLevel1 = getLevel1Spells($numberLevel1Spells);

$spellListLevel2 = array();
$spellListLevel2 = getLevel2Spells($numberLevel2Spells);

$spellListLevel3 = array();
$spellListLevel3 = getLevel3Spells($numberLevel3Spells);



?>



<img id="sheet"/>

   
<span id="dragonType">
<?php

echo $theDragonSize . ' ' . $dragonAppearance . ' Dragon';

?>
</span>


<span id="alignment">
<?php

echo $alignment;

?>
</span>
           
   
<span id="dragonAge">
<?php

echo $dragonAgeDesc . ' (' . $dragonAgeYears . ' years)';

?>
</span>


<span id="dragonAttackBonus">
<?php

echo '1d20+' . $dragonAttackBonus;

?>
</span>


<span id="dragonAttackTypes">
<?php

echo $dragonAttackTypes;

?>
</span>


<span id="dragonBreath">
<?php

echo 'Breath: ' . $dragonBreathArray[0] . ' &nbsp;&nbsp;&nbsp; Save: '. $dragonBreathSave .  $dragonBreathArray[1] . ' &nbsp;&nbsp;&nbsp; Damage: '. $dragonBreathDamage  . ' &nbsp;&nbsp;&nbsp; Shape: ' . $dragonBreathArray[3];

if($martialSecondBreathBonus === 1)
{
	
	echo '<br/><br/>Breath: ' . $dragonBreathArray2[0] . ' &nbsp;&nbsp;&nbsp; Save: '. $dragonBreathSave2 .  $dragonBreathArray2[1] . ' &nbsp;&nbsp;&nbsp; Damage: '. $dragonBreathDamage2  . ' &nbsp;&nbsp;&nbsp; Shape: ' . $dragonBreathArray2[3];
}

?>
</span>


<span id="dragonBreathMessage">
<?php

echo $dragonBreathMessage . $dragonBreathMessage2;

?>
</span>




<span id="spellLabelLevel1">
<?php

echo $spellLabelLevel1;

?>
</span>

<span id="spellLabelLevel2">
<?php

echo $spellLabelLevel2;

?>
</span>


<span id="spellLabelLevel3">
<?php

echo $spellLabelLevel3;

?>
</span>


<span id="spellCheckLevel1">
<?php

echo $spellCheckLevel1;

?>
</span>

<span id="spellCheckLevel2">
<?php

echo $spellCheckLevel2;

?>
</span>


<span id="spellCheckLevel3">
<?php

echo $spellCheckLevel3;

?>
</span>


<span id="spellListLevel1">
<?php

$count = $numberLevel1Spells;

if($count != 0)
{
	
	foreach($spellListLevel1 as $spell)
	{
		echo $spell;

		if($count != 1)
		{
			echo ', ';
		}

		--$count;

}

}



?>
</span>


<span id="spellListLevel2">
<?php

$count = $numberLevel2Spells;

if($count != 0)
{
	
	foreach($spellListLevel2 as $spell)
	{
		echo $spell;

		if($count != 1)
		{
			echo ', ';
		}

		--$count;

	}
}


?>
</span>


<span id="spellListLevel3">
<?php

$count = $numberLevel3Spells;

if($count != 0)
{
		
	foreach($spellListLevel3 as $spell)
	{
		echo $spell;

		if($count != 1)
		{
			echo ', ';
		}

		--$count;

	}
}

?>
</span>


<span id="dragonHD">
<?php

echo $dragonHD . 'd12';

?>
</span>



<span id="dragonHitPoints">
<?php

echo $dragonHitPoints;

?>
</span>



<span id="dragonAC">
<?php

echo $dragonAC;

?>
</span>

<span id="dragonFort">
<?php

echo '+' . $dragonFort;

?>
</span>


<span id="dragonWill">
<?php

echo '+' . $dragonWill;

?>
</span>


<span id="dragonRef">
<?php

echo '+' . $dragonRef;

?>
</span>


<span id="dragonSpeed">
<?php

echo $dragonSpeed;

?>
</span>

<span id="spellRoll">
<?php

echo $spellRoll;

?>
</span>



<span id="dragonDailyBreath">
<?php

echo $dragonDailyBreath;

?>
</span>




<span id="dragonMartialPowers">
<?php

	foreach($martialPowerArrayNumber as $martialPower)
	{
		$martialName = getDragonMartialPowersName($martialPower);
		$martialDesc = getDragonMartialPowersDesc ($martialPower, $dragonHD);

		echo '<span class="martialNameBold">' . $martialName . '</span> ' . $martialDesc . '<br/><br/>';

	}

?>
</span>



<script>
      
  let imgData = "images/dragon.png";
     
       $("#sheet").attr("src", imgData);
       
     

 </script>

</body>
</html>