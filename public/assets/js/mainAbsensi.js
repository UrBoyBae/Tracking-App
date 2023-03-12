// DataTable
$(document).ready(function () {
    $("#tableAbsensi").DataTable({
        // scrollX: true,
        columnDefs: [
            {
                orderable: false,
                target: [1, 2, 3, 4, 5, 6],
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

