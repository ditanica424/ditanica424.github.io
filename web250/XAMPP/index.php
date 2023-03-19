<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB250 &#9670; Ditanica Farley's Dynamic Falcon &#9670; Home</title>
    <link rel="stylesheet" href="Styles/brandreset.css">
    <link rel="stylesheet" href="Styles/brand.css">
</head>

<body>
    <div class="container">

        <header>
           <h1>WEB250 Ditanica Farley's Dynamic Falcon</h1>
        </header>

        <nav>
            <a href="?p=home.php">HOME</a>
            <a href="?p=introduction.php">INTRODUCTION</a>
            <a href="?p=contract.php">CONTRACT</a>
            <a href="?p=brand.php">BRAND</a>
            <a href="?p=multipage_sites/superduper_php/home.php">SUPERDUPER_PHP</a>
            <a href="?p=multipage_sites/superduper_htm/index.htm">SUPERDUPER_STATIC</a>

            
        </nav>
    
    <?php
	    $sPage = $_GET["p"];
	    //echo ("You picked the page: " . $sPage); 
	
	    if($sPage == "") {$sPage = "home.php"; }
	    include($sPage);
    ?>
    
        <?php include 'Scripts/footer.php';?>
        
    </div>
    
</body>
</html>