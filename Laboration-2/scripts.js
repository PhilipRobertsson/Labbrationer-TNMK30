//var timerON = null;
var uppdate = null;
var currentStyle = "radial-gradient(#87ab08, #c7c116, #4A412A)";
//var secretVar = null;
//This part of the code initializes everything needed for the timer
function liveClock(){
	var date = new Date();

    const weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    var day = weekday[date.getDay()];
	var t = date.toLocaleTimeString();
	document.getElementById("liveClock").innerHTML = t + " " + day;
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
    loadStyle();
    //changeStyle();
    //document.cookie = "background = " + currentStyle; 
}

//Ändra utseende
//var clicked = false;
//var currentStyle = "radial-gradient(#87ab08, #c7c116, #4A412A)";
//var currentStyle = "";
function changeStyle(){
    //currentStyle = document.body.style.backgroundImage;
    //currentStyle = document.cookie;
    console.log(currentStyle);
    /**
     * 
     * clicked = !clicked;
    if(clicked){
        document.body.style.backgroundImage = "radial-gradient(#87ab08, #c7c116, #4A412A)";
        console.log(clicked);
        //clicked = false;
    } else if(!clicked){
        document.body.style.backgroundImage = "radial-gradient(#d38312, #a6834b ,#a83279)";
        console.log(clicked);
       // clicked = true;
    }
    //clicked == !clicked;
     */
    
    if(currentStyle == "radial-gradient(#d38312, #a6834b ,#a83279)"){
        currentStyle = "radial-gradient(#87ab08, #c7c116, #4A412A)";
        document.cookie = "state=2; expires=Thu, 10 Nov 2021 12:00:00 UTC; path=/";
        //secretVar = "radial-gradient(#87ab08, #c7c116, #4A412A)";
    } else if(currentStyle == "radial-gradient(#87ab08, #c7c116, #4A412A)"){
        currentStyle = "radial-gradient(#d38312, #a6834b ,#a83279)";
        //secretVar = "radial-gradient(#d38312, #a6834b ,#a83279)";
        document.cookie = "state=1; expires=Thu, 10 Nov 2021 12:00:00 UTC; path=/";
    }
    loadStyle();
}
function loadStyle(){
    /*if(currentStyle == ""){
        document.body.style.backgroundImage = "radial-gradient(#87ab08, #c7c116, #4A412A)";
        console.log(clicked);
    } else if(clicked){
        document.body.style.backgroundImage = "radial-gradient(#d38312, #a6834b ,#a83279)";
        console.log(clicked);
    } */
    document.body.style.backgroundImage = currentStyle;
    /**
     * if(secretVar != null){
        document.getElementById("keepStyleLink1").setAttribute("href", "Labration2.html&Key=" + secretVar);
    }
    console.log(secretVar);
     */
    //document.cookie = "state=1; expires=Thu, 1 Dec 2021 12:00:00 UTC; path=/";
    let x = document.cookie;
    if(x == 1){
        currentStyle = "radial-gradient(#d38312, #a6834b ,#a83279)";
        document.body.style.backgroundImage = currentStyle;
    } else if(x == 2){
        currentStyle = "radial-gradient(#87ab08, #c7c116, #4A412A)"
        document.body.style.backgroundImage = currentStyle;
    }
}