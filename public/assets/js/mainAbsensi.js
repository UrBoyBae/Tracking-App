// DataTable
$(document).ready(function () {
    $("#tableAbsensi").DataTable({
        // scrollX: true,
        columnDefs: [
            {
                orderable: false,
                target: [1, 3, 4, 5, 6],
            },
        ],
    });
});

// Dropdown Sortby
var triggerDropdown = document.querySelector("div#my-trigger-sortBtn");
triggerDropdown.onclick = function () {
    var targetDataDropdown = triggerDropdown.getAttribute("data-sortby");
    document.getElementById(targetDataDropdown).classList.toggle("my-dropdown-active");
    triggerDropdown.classList.toggle("my-sortBtn-active");
};

// Status Badge
const titleBadge = document.querySelectorAll("span#my-title-badge");
const statusBadge = document.querySelectorAll("div#my-status-badge");
for(var i = 0; i < titleBadge.length; i++){
    if(titleBadge[i].innerHTML === "Tepat Waktu"){
        statusBadge[i].classList.add("my-ontime-badge");
    } else {
        statusBadge[i].classList.add("my-late-badge");
    }
}

// Modal View
var triggerModalView = document.querySelectorAll("div#my-trigger-viewBtn");
triggerModalView.forEach(function(buttonView) {
    buttonView.onclick = function() {
        var dataModalView = buttonView.getAttribute("data-modal-view");
        document.getElementById(dataModalView).classList.add("my-modal-active");
    }
});

// All Modal Close
var closeModal = document.querySelectorAll("div#my-close-modal");
closeModal.forEach(function(buttonClose) {
    buttonClose.onclick = function () {
        buttonClose.closest(".my-bg-modal").classList.remove("my-modal-active");
    };
});

