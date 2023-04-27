let modal = document.getElementById("myModal");
let modalBtn = document.getElementById("modalButton");
let span = document.getElementsByClassName("close")[0];
modalBtn.addEventListener("click", () => openModal());
span.addEventListener("click", () => closeModal());
function closeModal() {
    modal.style.display = "none";
}
function openModal() {
    modal.style.display = "block";
}