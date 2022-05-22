document.addEventListener('DOMContentLoaded', () =>  {

    let Sub1_block = document.querySelector(".Sub1_block")
    let Sub2_block = document.querySelector(".Sub2_block")
    let Sub3_block = document.querySelector(".Sub3_block")

    Sub1_block.addEventListener("click", () => {
        Sub1_block.style.backgroundColor = "#F7F7F7"
        Sub2_block.style.backgroundColor = "white"
        Sub3_block.style.backgroundColor = "white"
    })

    Sub2_block.addEventListener("click", () => {
        Sub2_block.style.backgroundColor = "#F7F7F7"
        Sub1_block.style.backgroundColor = "white"
        Sub3_block.style.backgroundColor = "white"
    })

    Sub3_block.addEventListener("click", () => {
        Sub3_block.style.backgroundColor = "#F7F7F7"
        Sub2_block.style.backgroundColor = "white"
        Sub1_block.style.backgroundColor = "white"
    })

    let block_assoc1 = document.querySelector(".block_assoc1")
    let Assoc1 = document.querySelector("#Assoc1")

    let block_assoc2 = document.querySelector(".block_assoc2")
    let Assoc2 = document.querySelector("#Assoc2")

    let block_assoc3 = document.querySelector(".block_assoc3")
    let Assoc3 = document.querySelector("#Assoc3")

    let block_assoc4 = document.querySelector(".block_assoc4")
    let Assoc4 = document.querySelector("#Assoc4")

    let block_assoc5 = document.querySelector(".block_assoc5")
    let Assoc5 = document.querySelector("#Assoc5")

    let block_assoc6 = document.querySelector(".block_assoc6")
    let Assoc6 = document.querySelector("#Assoc6")

    let block_assoc7 = document.querySelector(".block_assoc7")
    let Assoc7 = document.querySelector("#Assoc7")

    let block_assoc8 = document.querySelector(".block_assoc8")
    let Assoc8 = document.querySelector("#Assoc8")

    block_assoc1.addEventListener("click", () => {
        if (Assoc1.checked) {
            block_assoc1.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc1.style.backgroundColor = "white"
        }
    })

    block_assoc2.addEventListener("click", () => {
        if (Assoc2.checked) {
            block_assoc2.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc2.style.backgroundColor = "white"
        }
    })

    block_assoc3.addEventListener("click", () => {
        if (Assoc3.checked) {
            block_assoc3.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc3.style.backgroundColor = "white"
        }
    })

    block_assoc4.addEventListener("click", () => {
        if (Assoc4.checked) {
            block_assoc4.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc4.style.backgroundColor = "white"
        }
    })

    block_assoc5.addEventListener("click", () => {
        if (Assoc5.checked) {
            block_assoc5.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc5.style.backgroundColor = "white"
        }
    })

    block_assoc6.addEventListener("click", () => {
        if (Assoc6.checked) {
            block_assoc6.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc6.style.backgroundColor = "white"
        }
    })

    block_assoc7.addEventListener("click", () => {
        if (Assoc7.checked) {
            block_assoc7.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc7.style.backgroundColor = "white"
        }
    })

    block_assoc8.addEventListener("click", () => {
        if (Assoc8.checked) {
            block_assoc8.style.backgroundColor = "#F7F7F7"
        } else {
            block_assoc8.style.backgroundColor = "white"
        }
    })

})