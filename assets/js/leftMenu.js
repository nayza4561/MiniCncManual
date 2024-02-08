const btn = document.getElementById("leftMenubtn")
const leftMenu = document.getElementById("leftMenu")
const closeMenu = document.getElementById("closeMenu")

function slideMenu() {
    if (btn.hidden == true) {
        btn.hidden = false
        leftMenu.style.height = "0"
    } else if (btn.hidden == false) {
        btn.hidden = true
        leftMenu.style.height = "330px"
    }
}