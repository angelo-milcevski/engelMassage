window.onload = function(){
    getCopyright();
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
