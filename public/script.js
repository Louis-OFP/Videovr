

let forForm = document.querySelector("#forForm")
let validationPublish = document.querySelector("#validationPublish")
 
function closeCreate() {
    forForm.classList.remove("modalCreateUp");
    forForm.classList.add("modalCreateDown");
}

function openCreate() {
    forForm.classList.remove("modalCreateDown");
    forForm.classList.add("modalCreateUp");    
}

function closeYesno() {
    validationPublish.classList.remove("verificationON");
    validationPublish.classList.add("verificationOFF");
}

function openYesno() {
    validationPublish.classList.remove("verificationOFF");
    validationPublish.classList.add("verificationON");    
}


