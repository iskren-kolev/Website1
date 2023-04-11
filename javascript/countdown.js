let remainingTime = 8;
let timerSection = document.getElementById("timerSection");
let timerImage = document.getElementById("timerImage");
let resetButton = document.getElementById("resetButton")

function updateDisplay(){
    let mins = Math.floor(remainingTime/60);
    let secs = remainingTime%60;
    timerSection.innerHTML=(`${mins} mins ${secs} secs`);
}
function updateTimer(){
    remainingTime--;
    updateDisplay();
    if (remainingTime===0){
        clearInterval(intervalID);
        timerImage.style.display="flex";
    }
}
function buttonClicked(){
    timerImage.style.display="none";
    clearInterval(intervalID);
    remainingTime = 8;
    intervalID = setInterval(updateTimer, 1000);
}
resetButton.addEventListener("click", buttonClicked);

let intervalID = setInterval(updateTimer, 1000);

