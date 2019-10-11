<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EngelMassage</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
<nav>
          <!--   <img src="../assets/img/logo.png" id="logo" onclick="window.location='index'">-->

    <ul id="navList">
        <img src="../assets/img/logo.png" id="logo" onclick="window.location='index'">
        <li><a href="index" target="_self">Home</a></li>
        <li class="servicesDropdown"><a href="#" id="servicesLink">Services</a></li>
		<div class="navDropdown">
			<li><a href="klaser" target="_self">K Laser</a></li>
			<li><a href="deepTissue" target="_self">Deep Tissue Massage</a></li>
			<li><a href="cuppingTherapy" target="_self">Cupping Therapy</a></li>
		
		</div>
        <li><a href="prices" target="_self">Prices</a></li>
        <li><a href="contact" target="_self">Contact</a></li>
        <li><a href="about" target="_self">About</a></li>  
        <li><a href="https://www.facebook.com/KarinaEngelbrecht/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>  
        </ul>
    <i class="fa fa-bars" onclick="openMenu()"></i>
        
        <div class="slider">
    <i class="fa fa-times" id="closeMenuIcon" onclick="closeMenu()"></i>
            

            <ul id="menuList">
        <li><a href="index" target="_self">Home</a></li>
        <li><a onclick="menuDropdown()">Services <i class="fas fa-chevron-down"></i></a></li>
			<div class="menuDropdown" style="display:none">
			<li><a href="klaser" target="_self">K Laser</a></li>
			<li><a href="deepTissue" target="_self">Deep Tissue Massage</a></li>
			<li><a href="cuppingTherapy" target="_self">Cupping Therapy</a></li>
		</div>
		
        <li><a href="prices" target="_self">Prices</a></li>
        <li><a href="contact" target="_self">Contact</a></li>
        <li><a href="about" target="_self">About</a></li>  
        <li><a href="https://www.facebook.com/KarinaEngelbrecht/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>  
        </ul>
    
    </div>
        
    </nav>
	
	