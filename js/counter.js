"use strict"

// buttons

const plus = document.getElementById('plus')
const minus = document.getElementById('minus')
const plus5 = document.getElementById('plus5')
const minus5 = document.getElementById('minus5')
const reset = document.getElementById('reset')

// text area

const counter = document.getElementById('counter')

// value

let val = parseInt(counter.value)

// listeners

plus.onclick = () => {
    val++
    counter.value = val
}

minus.onclick = () => {
    val--
    counter.value = val
}

plus5.onclick = () => {
    val += 5
    counter.value = val
}

minus5.onclick = () => {
    val -= 5
    counter.value = val
}

reset.onclick = () => {
    val = 0
    counter.value = val
}
