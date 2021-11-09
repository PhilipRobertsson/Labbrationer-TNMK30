var timerON = null;
var uppdate = null;
//This part of the code initializes everything needed for the timer
function liveClock(){
	var d = new Date();
	var t = d.toLocaleTimeString();
	document.getElementById("liveClock").innerHTML = t;
}
//This part of the code uppdates the live clock
function stopLiveCock() {
    if(timerOn){
        clearInterval(uppdate);
        timerOn = false;
    }
}
//This part stops the live clock if the clock is active
function startLiveCock() {
if(!timerOn){
    uppdate = setInterval(liveClock, 1000);
    timerOn = true;
    }
}


function homeLoad(){
    timerOn = true;
	uppdate = setInterval(liveClock, 1000);
}

//Ändra utseende
function changeStyle(){
    document.getElementsByClassName("headerDiv").styles.backgroundColor = "#0000FF";
}