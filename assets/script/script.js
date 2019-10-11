window.onload = function(){
    getCopyright();
}


let servicesList = document.getElementsByClassName("servicesDropdown")[0];
let servicesLinks = document.getElementsByClassName("navDropdown")[0];

    servicesList.addEventListener("mouseover", displayDropdown);
    servicesLinks.addEventListener("mouseover", displayDropdown);


    servicesList.addEventListener("mouseout", hideDropdown);
    servicesLinks.addEventListener("mouseout", hideDropdown);

function displayDropdown(){
    
     
    let dropdown = document.getElementsByClassName("navDropdown")[0];
    let listBg = document.getElementsByClassName("servicesDropdown")[0];
    let listTxt = document.getElementById("servicesLink");
    
    dropdown.style.display = "block";
    
    listBg.style.background = "#90CA6B"
    listTxt.style.color = "#fff"
}

function hideDropdown(){
    
    let dropdown = document.getElementsByClassName("navDropdown")[0];
    
    let listBg = document.getElementsByClassName("servicesDropdown")[0];
    
    let listTxt = document.getElementById("servicesLink");
    
    dropdown.style.display = "none";
    
    listBg.style.background = "#fff";
    listTxt.style.color = "#464646";

}

function menuDropdown(){
    
   let dropdownElement = document.getElementsByClassName("menuDropdown")[0];
    
    if(dropdownElement.style.display == "none"){
        
        dropdownElement.style.display = "block";
    }else{
        dropdownElement.style.display = "none";
    }
}


function openMenu() {
    let slider = document.getElementsByClassName("slider");
    //let sliderLinks = document.getElementById("sliderLinks");
    //sliderLinks.style.display = "block";

    let screenSize = window.screen.availWidth;

   
        slider[0].style.width = "300px";

    

}


function closeMenu() {
    let slider = document.getElementsByClassName("slider");
   // let sliderLinks = document.getElementById("sliderLinks");
    slider[0].style.width = "0";
  //  sliderLinks.style.display = "none";
}



function getCopyright(){
    
    let date = new Date;
    
    let year = date.getFullYear();
    
    document.getElementById("copyright").innerHTML =  "	&copy" + year;
}
