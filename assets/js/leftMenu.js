// --------------- leftMenu ------------------

const btn = document.getElementById("leftMenubtn")
const leftMenu = document.getElementById("leftMenu")
const closeMenu = document.getElementById("closeMenu")
const resBox = document.getElementsByClassName("responsiveBox")[0]

function slideMenu() {
    if (btn.hidden == true) {
        btn.hidden = false
        leftMenu.style.height = "0"
        resBox.style.margin = "10% auto"
    } else if (btn.hidden == false) {
        btn.hidden = true
        leftMenu.style.height = "330px"
        resBox.style.marginLeft = "360px"
    }
}

// ----------------- Content ---------------------

const sec1 = document.getElementById("sec1")
const sec2 = document.getElementsByClassName("leftMenulist")[2]
const sec3 = document.getElementsByClassName("leftMenulist")[3]
const sec4 = document.getElementsByClassName("leftMenulist")[4]
const sec5 = document.getElementsByClassName("leftMenulist")[5]
const sec6 = document.getElementsByClassName("leftMenulist")[6]
const head1 = document.getElementById("head1")
const head2 = document.getElementById("head2")
const head3 = document.getElementById("head3")
const head4 = document.getElementById("head4")
const head5 = document.getElementById("head5")
const head6 = document.getElementById("head6")
sec1.onclick = () => {
    head1.hidden = false
    head2.hidden = true
    head3.hidden = true
    head4.hidden = true
    head5.hidden = true
    head6.hidden = true
}
sec2.onclick = () => {
    head1.hidden = true
    head2.hidden = false
    head3.hidden = true
    head4.hidden = true
    head5.hidden = true
    head6.hidden = true
}
sec3.onclick = () => {
    head1.hidden = true
    head2.hidden = true
    head3.hidden = false
    head4.hidden = true
    head5.hidden = true
    head6.hidden = true
}
sec4.onclick = () => {
    head1.hidden = true
    head2.hidden = true
    head3.hidden = true
    head4.hidden = false
    head5.hidden = true
    head6.hidden = true
}
sec5.onclick = () => {
    head1.hidden = true
    head2.hidden = true
    head3.hidden = true
    head4.hidden = true
    head5.hidden = false
    head6.hidden = true
}
sec6.onclick = () => {
    head1.hidden = true
    head2.hidden = true
    head3.hidden = true
    head4.hidden = true
    head5.hidden = true
    head6.hidden = false
}