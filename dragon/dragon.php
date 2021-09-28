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


if(isset($_POST["theDragonSize"]))
{
    $dragonSize = $_POST["theDragonSize"];

}

$theDragonSize = dragonSize ($dragonSize);
$dragonAppearance = dragonAppearance();



?>



<img id="title"/>

   
<span id="dragonType">
<?php

echo $theDragonSize . ' ' . $dragonAppearance . ' Dragon';


?>
</span>
           


<script>
      
      /*
  let imgData = "images/title.png";
     
       $("#title").attr("src", imgData);
       */
     

 </script>

</body>
</html>