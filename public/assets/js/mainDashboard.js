// Notification
var triggerNotif = document.querySelector('div#my-trigger-notif');
triggerNotif.onclick = () => {
    var dataModal = triggerNotif.getAttribute('data-modal');
    document.getElementById(dataModal).classList.toggle('my-notif-active');
}

// Theme
var getTheme = localStorage.getItem('theme');
var themeToggle = document.getElementById('theme');

if (getTheme && getTheme == 'dark') {
    themeToggle.checked = true;
    document.body.classList.toggle('my-dark-theme');
}

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('my-dark-theme');
    if(document.body.classList.contains('my-dark-theme')){
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
})