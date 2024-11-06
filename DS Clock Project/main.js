var noon=12;
var wakeuptime;
var sleeptime;
var dstime;

function showCurrentTime(){
    var clock = document.getElementById("clock");
    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    var meridian = "AM";

    if(hours>= noon){
        meridian="PM";
    }

    var clockTime=hours + " : " + minutes + " : " + seconds+ " " + meridian;
    clock.innerHTML = clockTime;
    changeImage();
}

var oneSecond = 1000;

setInterval(showCurrentTime, oneSecond);

function changeImage(){
    var time= new Date().getHours();
    console.log(time);

    var image = "images/ds_clock.png"
    var imageHTML=document.getElementById("timeImage");

    // Check if the current time falls within the wake-up time and class time range
    if (currentHour >= wakeuptime && currentHour < dstime) {
        image = "images/morning.gif";  // Morning image
    } 
    else if (currentHour >= dstime && currentHour < sleeptime) {
        image = "images/class.gif";  // Class image
    } 
    else if (currentHour >= sleeptime || currentHour < wakeuptime) {
        image = "images/night.gif";  // Night image
    }

    // Handle wrap-around for sleep time (e.g. 11:00 PM - 12:00 AM as morning)
    if (sleeptime <= wakeuptime) {
        // If sleep time is after midnight and before wakeup time (wraps around the day)
        if (currentHour >= sleeptime || currentHour < wakeuptime) {
            image = "images/morning.gif";  // Show morning image during this range
        }
    }

    imageHTML.src = image;  // Update the image source
}

function updateClock() {
    // Get the selected times from the selectors
    var wakeUpTimeSelector = document.getElementById("wakeUpTimeSelector");
    wakeuptime = parseInt(wakeUpTimeSelector.value, 10);  // Store as integer

    var dsTimeSelector = document.getElementById("dsTimeSelector");
    dstime = parseInt(dsTimeSelector.value, 10);  // Store as integer

    var sleepTimeSelector = document.getElementById("sleepTimeSelector");  // Correct spelling
    sleeptime = parseInt(sleepTimeSelector.value, 10);  // Store as integer
}

var saveButton= document.getElementById("saveButton");

saveButton.addEventListener("click", updateClock);
