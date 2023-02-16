const titleBadge = document.querySelectorAll("span#title-badge");
const statusBadge = document.querySelectorAll("div#status-badge");

for (var i = 0; i < titleBadge.length; i++) {
    if (titleBadge[i].textContent == "Tepat Waktu") {
        statusBadge[i].classList.add("status-ontime-badge");
    } else {
        statusBadge[i].classList.add("status-late-badge");
    }
}
