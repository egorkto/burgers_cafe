document.querySelector("form").addEventListener("submit", function (e) {
    const inputs = this.querySelectorAll("input, select");
    inputs.forEach((input) => {
        if (!input.value || input.value === "") {
            input.disabled = true;
        }
    });
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
