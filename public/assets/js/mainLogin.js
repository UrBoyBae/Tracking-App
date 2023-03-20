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
