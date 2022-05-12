document.addEventListener('DOMContentLoaded', () =>  {

    let profile_button = document.querySelector("#profile")
    let user_panel = document.querySelector(".user_panel")

    profile_button.addEventListener("click", () => {
        if (user_panel.style.display == "none") {
            user_panel.style.display = "flex"
        } else {
            user_panel.style.display = "none"
        }
    })

})