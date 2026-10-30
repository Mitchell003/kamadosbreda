const masterclassDialog = document.querySelector("#masterclass-dialog");
const openMasterclassButton = document.querySelector("#open-masterclass");
const closeMasterclassButton = document.querySelector("#close-masterclass");

openMasterclassButton.addEventListener("click", () => {
    masterclassDialog.showModal();
});

closeMasterclassButton.addEventListener("click", () => {
    masterclassDialog.close();
});

masterclassDialog.addEventListener("click", (event) => {
    if (event.target === masterclassDialog) {
        masterclassDialog.close();
    }
});