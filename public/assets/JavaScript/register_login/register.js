document.addEventListener('DOMContentLoaded', () => {

    let input_password = document.querySelector('#input_password')
    let input_password_verif = document.querySelector('#input_password_verif')
    let hide_show_password = document.querySelector('.hide_show_password')
    let hide_show_password_verif = document.querySelector('.hide_show_password_verif')

    hide_show_password.addEventListener('click', () => {
        if (input_password.type == "password") {
            input_password.type = "text"
        } else {
            input_password.type = "password"
        }
    })

    hide_show_password_verif.addEventListener('click', () => {
        if (input_password_verif.type == "password") {
            input_password_verif.type = "text"
        } else {
            input_password_verif.type = "password"
        }
    })

})