
let forUpdateForm = document.querySelector("#forUpdateForm")
let forForm = document.querySelector("#forForm")
let validationPublish = document.querySelector("#validationPublish")
let validationUpdate = document.querySelector("#validationUpdate")
 
function closeCreate() {
    forForm.classList.remove("modalCreateUp");
    forForm.classList.add("modalCreateDown");
}

function openCreate() {
    forForm.classList.remove("modalCreateDown");
    forForm.classList.add("modalCreateUp");    
}

function closeUpdate() {
    forUpdateForm.classList.remove("modalCreateUp");
    forUpdateForm.classList.add("modalCreateDown");
}

function openUpdate() {
    forUpdateForm.classList.remove("modalCreateDown");
    forUpdateForm.classList.add("modalCreateUp"); 
    let updateForm = querySelector("#forUpdateForm")
    updateForm.action = `/update/${infovideoId}`;   
}

function closeYesno() {
    validationPublish.classList.remove("verificationON");
    validationPublish.classList.add("verificationOFF");
}

function openYesno() {
    validationPublish.classList.remove("verificationOFF");
    validationPublish.classList.add("verificationON");    
}

function closeYesorno() {
    validationUpdate.classList.remove("verificationON");
    validationUpdate.classList.add("verificationOFF");
}

function openYesorno() {
    validationUpdate.classList.remove("verificationOFF");
    validationUpdate.classList.add("verificationON");    
}

let condition = false;
let selectElement = document.querySelector("#selectStop");
let toggleCheckbox = document.querySelector("#toggleCheckbox");


function toggleSelect() {
    if (toggleCheckbox.checked) {
        selectElement.disabled = false;
    } else {
        selectElement.disabled = true;
    }
}

toggleCheckbox.addEventListener("change", toggleSelect);

toggleSelect();

function resetCheckbox() {
    toggleCheckbox.checked = false;
    toggleSelect();
}



