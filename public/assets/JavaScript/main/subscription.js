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

})