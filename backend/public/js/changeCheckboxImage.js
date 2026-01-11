const checkbox = document.getElementById("sort-checkbox");
const checkedElement = document.getElementById("checked");
const uncheckedElement = document.getElementById("unchecked");

update_checkbox();

checkbox.addEventListener("click", function () {
    update_checkbox();
});

function update_checkbox() {
    if (checkbox.checked) {
        checkedElement.hidden = false;
        uncheckedElement.hidden = true;
    } else {
        checkedElement.hidden = true;
        uncheckedElement.hidden = false;
    }
}
