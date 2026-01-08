document.querySelector("form").addEventListener("submit", function (e) {
    const inputs = this.querySelectorAll("input, select");
    inputs.forEach((input) => {
        if (!input.value || input.value === "") {
            input.disabled = true;
        }
    });
});

document.getElementById("myCheckboxJS").addEventListener("click", function () {
    const label = document.getElementById("checkboxLabel");
    const checkedElement = document.getElementById("checked");
    const uncheckedElement = document.getElementById("unchecked");
    if (this.checked) {
        checkedElement.hidden = false;
        uncheckedElement.hidden = true;
    } else {
        checkedElement.hidden = true;
        uncheckedElement.hidden = false;
    }
});
