// Dropdown SortBy
const toggleFilter = document.querySelector("#toggle-filter");
const dropDown = document.querySelector(".sort-by");
toggleFilter.onclick = function () {
    dropDown.classList.toggle("active-dropdown");
};
