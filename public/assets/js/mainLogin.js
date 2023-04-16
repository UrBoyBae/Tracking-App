// Theme
var getTheme = localStorage.getItem('theme');
var backdrop = document.getElementById('backdrop');
var wrapBackdrop = document.getElementById('wrapBackdrop');

if (getTheme && getTheme == 'dark') {
    backdrop.setAttribute("src", "assets/images/backdrop.jpg");
    document.body.classList.toggle('my-dark-theme');
} else {
    backdrop.setAttribute("src", "assets/images/backdrop-light.jpg");
}

// Merubah Border
const wrapName = document.getElementById("wrap-username");
const wrapPassword = document.getElementById("wrap-password");
const inputName = document.getElementById("username");
const inputPassword = document.getElementById("password");
const iconName = document.getElementById("user-icon");
const iconPassword = document.getElementById("pass-icon");
inputName.oninput = inputCheck = () => {
    wrapName.style.borderColor = "#6359E9";
    inputName.style.color = "#6359E9";
    iconName.style.color = "#6359E9";
};
inputPassword.oninput = inputCheck = () => {
    wrapPassword.style.borderColor = "#6359E9";
    inputPassword.style.color = "#6359E9";
    iconPassword.style.color = "#6359E9";
};
