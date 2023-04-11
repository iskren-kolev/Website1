let remainingTime = 5;
let displayElement = document.createElement("div");
let timerSection = document.getElementById("timer_section");

let displayButton = document.createElement("button");
displayButton.textContent="Reset";
let displayPicture=document.createElement("img");
displayPicture.src=src="./sources/pic_of_me.jpg";

function showTimer(){
    if (!timerSection.contains(displayElement)) {
        timerSection.appendChild(displayElement);
    }
}
showTimer();

function updateDisplay(){
    let mins = Math.floor(remainingTime/60);
    let secs = remainingTime%60;
    displayElement.textContent=(`${mins} mins ${secs} secs`);
}
function updateTimer(){
    showTimer();
    remainingTime--;
    updateDisplay();
    if (remainingTime===0){
        displayElement.remove();
        timerSection.appendChild(displayPicture);
        timerSection.appendChild(displayButton);
        clearInterval(intervalID);
    }
}
function buttonClicked(){
    remainingTime = 5;
    displayButton.remove();
    displayPicture.remove();
    intervalID = setInterval(updateTimer, 1000);
}
displayButton.addEventListener("click", buttonClicked);

let intervalID = setInterval(updateTimer, 1000);

