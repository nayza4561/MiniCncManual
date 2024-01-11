window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 54 || document.documentElement.scrollTop > 54) {
        document.getElementById("navBar").style.padding = "15px 5px"
        document.getElementById("navBar").style.backgroundColor = "rgb(100, 95, 81"
        document.getElementById("navBar").style.textShadow = "none"
        document.getElementById("threelineIcon").style.textShadow = "none"
    } else {
        document.getElementById("navBar").style.backgroundColor = "transparent"
        document.getElementById("navBar").style.padding = "0"
        document.getElementById("navBar").style.textShadow = "0 0 5px black"
        document.getElementById("threelineIcon").style.textShadow = "0 0 5px black"
    }
}