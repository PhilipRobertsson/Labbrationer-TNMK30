var timerON = null;
var uppdate = null;
//This part of the code initializes everything needed for the timer
function liveClock(){
	var date = new Date();
    var day = date.getDay();
	var t = date.toLocaleTimeString();
	document.getElementById("liveClock").innerHTML = t + day;
}
/*
//This part of the code uppdates the live clock
function stopLiveCock() {
    if(timerON){
        clearInterval(uppdate);
        timerON = false;
    }
}
//This part stops the live clock if the clock is active
function startLiveCock() {
if(!timerON){
    uppdate = setInterval(liveClock, 1000);
    timerON = true;
    }
}
*/


function homeLoad(){
	uppdate = setInterval(liveClock, 1000);
    //timerON = true;
}

//Ändra utseende
function changeStyle(){
    document.getElementById("stryk").style.width = "100%";
}