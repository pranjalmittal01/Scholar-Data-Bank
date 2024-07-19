// this is the javascript of eye button in login page
let password = document.getElementById("password");
let eye = document.getElementById("eye");

let is_show = true;
eye.addEventListener('click', function () {
    if (is_show) {
        password.setAttribute("type", "text");
        eye.innerHTML = 'visibility';
        // document.getElementById("eye").style.color = '#7a797e';
        // fa.innerHTML = 'visibility';
        // state = false;
    }
    else {
        password.setAttribute("type", "password");
        eye.innerHTML = 'visibility_off';
        // document.getElementById("eye").style.color = '#5887ef';
        // fa.innerHTML = 'visibility_off';
        // state = true;
    }
    is_show = !is_show;
})
