document.addEventListener('DOMContentLoaded', () =>  {

    let input_password = document.querySelector('#input_password')
    let hide_show_password = document.querySelector('.hide_show_password')

    hide_show_password.addEventListener('click', () => {
        if (input_password.type == "password") {
            input_password.type = "text"
        } else {
            input_password.type = "password"
        }
    })

})