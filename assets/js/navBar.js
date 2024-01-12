// ----------- style when scrolling ------------

document.body.onload = () => {
    window.onscroll = () => {
        scrollFunction()
    }
}
    
function scrollFunction() {
    if (document.body.scrollTop > 54 || document.documentElement.scrollTop > 54) {
        document.getElementById("navBar").style.padding = "15px 5px"
        document.getElementById("navBar").style.backgroundColor = "rgb(100, 95, 81"
        document.getElementById("navBar").style.textShadow = "none"
        document.getElementById("threelineIcon").style.textShadow = "none"
    } else {
        let threeLineicon = document.getElementById("threelineIcon")
        let threeLine = document.getElementById("threeLine")
        document.getElementById("navBar").style.backgroundColor = "transparent"
        document.getElementById("navBar").style.padding = "0"
        document.getElementById("navBar").style.textShadow = "0 0 5px black"
        threeLine.style.textShadow = "0 0 5px black"
        threeLine.onmouseover = () => {
            threeLineicon.style.textShadow = "none"
            // threeLine.style.fontWeight = "bold"
        }
    }
}

// -------------- navbar threeLinebar ---------------

const navMenu = document.getElementById("navMenu")
const threeLine = document.getElementById("threeLine")

document.body.onresize = () => {
    let width = window.innerWidth
    if (width <= 500) {
        navMenu.style.display = "none"
        threeLine.style.display = "block"
    } else {
        navMenu.style.display = "block"     
        threeLine.style.display = "none"
    }
}