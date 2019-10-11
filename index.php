<?php include_once('includes/header.php'); ?>
 <div class="homeHeroBanner">
        
        <h1 class="heroHeading">Welcome to <br> EngelMassage </h1>
    
        <div class="btnWrapper">
    <button type="button" id="chckPricBtn" onclick="location.href='prices.php'">Check prices</button>
    <button type="button" id="bookAppBtn" onclick="location.href='contact.php'">Book appointment</button>
            </div>
    </div>
    
    
    <div class="introduction">
        
        <div class="intro-grid1">
            <p class="introduction-headline">Hej,</p>
            <p class="introduction-subheadline">My name is <span class="grnTxt">Karina Engelbrecht</span></p>
    
            <ul id="introductionList">
        
                <li class="introduction-list-element"><i class="fas fa-check"></i>I am a trained medical exeminer and a RAB-registered massage therapist</li>
                <li class="introduction-list-element"><i class="fas fa-check"></i> I specialize in K-laser therapy, deep tissue massage and cupping therapy in Pandrup, Nordjylland</li>
                <li class="introduction-list-element"><i class="fas fa-check"></i> The treatments are 100% drug and medicine free</li>
            </ul>
        </div>
        
        <div class="intro-grid2">
            <img class="img-karina" src="assets/img/Karina/small/3I0A6535.jpg" alt="Karina Engelbrecht massage therapist">
        </div>
    </div>
   
    
    <div class="servicesSection">
    
    <h2>Services</h2>
        <p>for pain relief</p>
        
        <div class="servicesGrid">
        
        <div class="kLaserGrid" onclick="location.href='klaser.php'"></div>
            <div class="kLaserGridHeading" onclick="location.href='klaser.php'">
                <h3>K Laser</h3>
            </div>
        <div class="deepTGrid" onclick="location.href='deepTissue.php'"></div>
            <div class="deepTGridHeading" onclick="location.href='deepTissue.php'" ><h3>Deep tissue Massage</h3></div>
        <div class="cuppingGrid" onclick="location.href='cuppingTherapy.php'"></div>
            <div class="cuppingGridHeading" onclick="location.href='cuppingTherapy.php'"><h3>Cupping Therapy</h3></div>
        
        </div>
    
    </div>
    
<?php include_once('includes/footer.php'); ?>

