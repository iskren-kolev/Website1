let modal = document.getElementById("myModal");
let modalBtn = document.getElementById("modalButton");
let span = document.getElementsByClassName("close")[0];
modalBtn.addEventListener("click", () => openModal());
span.addEventListener("click", () => closeModal());
//to close the modal when click outside ot it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function closeModal() {
    modal.style.display = "none";
}

function openModal() {
    modal.style.display = "block";
}
