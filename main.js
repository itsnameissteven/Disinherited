var michael = document.querySelector(".michael")
var chris = document.querySelector(".chris")
var patrick = document.querySelector(".patrick")
var steven = document.querySelector(".steven")
var inner = document.querySelectorAll(".inner-text")

chris.addEventListener("mouseover", blur0)
michael.addEventListener("mouseover", blur1)
patrick.addEventListener("mouseover", blur2)
steven.addEventListener("mouseover", blur3)



function blur0() {
    chris.classList.add("blur")
    inner[0].classList.add("fade-in")
}

function blur1() {
    michael.classList.add("blur")
    inner[1].classList.add("fade-in")
}

function blur2() {
    patrick.classList.add("blur")
    inner[2].classList.add("fade-in")
}

function blur3() {
    steven.classList.add("blur")
    inner[3].classList.add("fade-in")
}

 