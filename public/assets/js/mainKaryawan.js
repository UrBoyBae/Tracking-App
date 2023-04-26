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
    $("#tableKaryawan").DataTable({
        // scrollX: true,
        columnDefs: [
            {
                orderable: false,
                target: [1, 2, 3, 4, 5, 6],
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

// All Modal Close
var closeModal = document.querySelectorAll("div#my-close-modal");
closeModal.forEach(function(buttonClose) {
    buttonClose.onclick = function () {
        buttonClose.closest(".my-bg-modal").classList.remove("my-modal-active");
    };
});

// Modal Add
var triggerModalAdd = document.querySelector("div#my-trigger-addBtn");
triggerModalAdd.onclick = function () {
    document.getElementById("my-bg-modal-add").classList.add("my-modal-active");
};

// Modal Add
var triggerModalReset = document.querySelector("div#my-trigger-resetBtn");
triggerModalReset.onclick = function () {
    document.getElementById("my-bg-modal-reset").classList.add("my-modal-active");
};

// Modal Edit
var triggerModalEdit = document.querySelectorAll("div#my-trigger-editBtn");
triggerModalEdit.forEach(function(buttonEdit) {
    buttonEdit.onclick = function() {
        var dataModalEdit = buttonEdit.getAttribute("data-modal-edit");
        document.getElementById(dataModalEdit).classList.add("my-modal-active");
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
