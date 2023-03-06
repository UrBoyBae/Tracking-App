// Merubah Border
const wrapName = document.getElementById("wrap-username");
const wrapPassword = document.getElementById("wrap-password");
const inputName = document.getElementById("username");
const inputPassword = document.getElementById("password");
inputName.oninput = inputCheck = () => {
    wrapName.style.borderColor = "#6359E9";
};
inputPassword.oninput = inputCheck = () => {
    wrapPassword.style.borderColor = "#6359E9";
};
