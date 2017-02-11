function footersize() {
    // Past de breedte van de footer aan aan het scherm
    var breedte = window.innerWidth;
    console.log("breedte is: " + breedte);

    
    document.getElementById("footer").style.width = breedte + "px";  
}