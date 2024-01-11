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