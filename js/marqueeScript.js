const timeout = 200
const baseMarquee = document.getElementById('baseMarquee')
let count = 50, t = 1

function turnAround() {
    baseMarquee.style.left = count + 'px'

    if (t < 50) {
        count += 20
        baseMarquee.style.backgroundColor="yellow"
    } else {
        count -= 20
        baseMarquee.style.backgroundColor="brown"
    }

    if (t > 100) {
        t = 0
        count = 50
    }

    t++

    setTimeout(turnAround, timeout)
}
