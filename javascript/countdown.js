let remainingTime = 120;
let displayElement = document.createElement('div');

if (!document.body.contains(displayElement)) {
    document.body.appendChild(displayElement);
}
function updateDisplay(){
    let mins = Math.floor(remainingTime/60);
    let secs = remainingTime%60;
    displayElement.textContent=(`${mins} mins ${secs} secs`);
}
function updateTimer(){
    remainingTime--;
    updateDisplay();
    if (remainingTime===0){
        clearInterval(intervalID);
    }
}
let intervalID = setInterval(updateTimer, 1000);
