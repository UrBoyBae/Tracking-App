// Notification
var triggerNotif = document.querySelector('div#my-trigger-notif');
triggerNotif.onclick = () => {
    var dataModal = triggerNotif.getAttribute('data-modal');
    document.getElementById(dataModal).classList.toggle('my-notif-active');
}