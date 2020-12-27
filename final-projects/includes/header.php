<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<link href="css/styles1.css" type="text/css" rel="stylesheet">

</head>
    
<body class="<?php echo $body;?>">
    
<header>
    <div class="inner-header">
        <img id="logo" src="images/logo.png" alt="logo">
<nav>
<ul>
    <?php echo makeLinks($nav) ;?>
    
    <?php
                                
     if(isset($_SESSION['UserName'])) { ?>
<li class="log successful">Welcome, <strong><?php echo $_SESSION['UserName']; ?></strong>! You're now logged in.<a href="index.php?logout='1'"> Log out!</a></li>
<!-- </div>-->
<?php
    } else { ?>
                            
     <li class="error successful"><strong>Sorry! You must log in first.</strong></li> 
        
    <?php } ?>
    
</ul>
</nav>
</div><!--end inner header-->
</header> 
    
<div id="wrapper">