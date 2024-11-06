var noon = 12;
var wakeuptime, dstime, sleeptime;  // No default values here

function initializeTimes() {
    // Get initial values from selectors
    var wakeUpTimeSelector = document.getElementById("wakeUpTimeSelector");
    wakeuptime = parseInt(wakeUpTimeSelector.value, 10);

    var dsTimeSelector = document.getElementById("dsTimeSelector");
    dstime = parseInt(dsTimeSelector.value, 10);

    var sleepTimeSelector = document.getElementById("sleepTimeSelector");
    sleeptime = parseInt(sleepTimeSelector.value, 10);

    // Update the image based on initial times
    changeImage();
}

function showCurrentTime() {
    var clock = document.getElementById("clock");
    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    var meridian = "AM";

    if (hours >= noon) {
        meridian = "PM";
    }

    var clockTime = hours + " : " + minutes + " : " + seconds + " " + meridian;
    clock.innerHTML = clockTime;
    changeImage();
}

var oneSecond = 1000;
setInterval(showCurrentTime, oneSecond);

function changeImage() {
    var time = new Date().getHours();
    console.log(time);

    var image = "images/ds_clock.png";
    var imageHTML = document.getElementById("timeImage");

    // Check if the current time falls within the wake-up time and class time range
    if ((wakeuptime <= dstime && time >= wakeuptime && time < dstime) ||
        (wakeuptime > dstime && (time >= wakeuptime || time < dstime))) {
        image = "images/morning.gif";  // Morning image
    } 
    else if ((dstime <= sleeptime && time >= dstime && time < sleeptime) ||
             (dstime > sleeptime && (time >= dstime || time < sleeptime))) {
        image = "images/class.gif";  // Class image
    } 
    else {
        image = "images/night.gif";  // Night image
    }

    imageHTML.src = image;  // Update the image source
}

function updateClock() {
    // Get the selected times from the selectors
    var wakeUpTimeSelector = document.getElementById("wakeUpTimeSelector");
    wakeuptime = parseInt(wakeUpTimeSelector.value, 10);

    var dsTimeSelector = document.getElementById("dsTimeSelector");
    dstime = parseInt(dsTimeSelector.value, 10);

    var sleepTimeSelector = document.getElementById("sleepTimeSelector");
    sleeptime = parseInt(sleepTimeSelector.value, 10);

    changeImage();  // Update the image immediately after changing time settings
}

var saveButton = document.getElementById("saveButton");
saveButton.addEventListener("click", updateClock);

// Call initializeTimes on page load to set initial values
window.onload = initializeTimes;
