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

// DataTable
$(document).ready(function () {
    $("#tableCuti").DataTable({
        // scrollX: true,
        columnDefs: [
            {
                orderable: false,
                target: [1, 5, 6, 7, 8],
            },
        ],
    });
});

// Notification
var triggerNotif = document.querySelector('div#my-trigger-notif');
triggerNotif.onclick = () => {
    var dataModal = triggerNotif.getAttribute('data-modal');
    document.getElementById(dataModal).classList.toggle('my-notif-active');
}

// Status Badge
const titleBadge = document.querySelectorAll("span#my-title-badge");
const statusBadge = document.querySelectorAll("div#my-status-badge");
for(var i = 0; i < titleBadge.length; i++){
    if(titleBadge[i].innerHTML === "Disetujui"){
        statusBadge[i].classList.add("my-accept-badge");
    } else if(titleBadge[i].innerHTML === "Ditolak") {
        statusBadge[i].classList.add("my-decline-badge");
    } else if(titleBadge[i].innerHTML === "Diterima") {
        statusBadge[i].classList.add("my-send-badge");
    }
}

// All Modal Close
var closeModal = document.querySelectorAll("div#my-close-modal");
closeModal.forEach(function(buttonClose) {
    buttonClose.onclick = function () {
        buttonClose.closest(".my-bg-modal").classList.remove("my-modal-active");
    };
});

// Modal View
var triggerModalView = document.querySelectorAll("div#my-trigger-viewBtn");
triggerModalView.forEach(function(buttonView) {
    buttonView.onclick = function() {
        var dataModalView = buttonView.getAttribute("data-modal-view");
        document.getElementById(dataModalView).classList.add("my-modal-active");
    }
});

// Model Delete 
var triggerModalDelete = document.querySelectorAll("div#my-trigger-deleteBtn");
triggerModalDelete.forEach(function(buttonDelete) {
    buttonDelete.onclick = function() {
        var dataModalDelete = buttonDelete.getAttribute("data-modal-delete");
        document.getElementById(dataModalDelete).classList.add("my-modal-active");
    }
})

