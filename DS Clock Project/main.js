var noon = 12;
var wakeuptime = 6;  // Default values
var dstime = 15;  // Default values
var sleeptime = 22;  // Default values
function showCurrentTime() {
    var clock = document.getElementById("clock");
    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    var meridian = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12; // Convert to 12-hour format

    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    var clockTime = hours + " : " + minutes + " : " + seconds + " " + meridian;
    clock.innerHTML = clockTime;
    changeImage();  // Ensure image updates based on current time
}

setInterval(showCurrentTime, 1000);

function changeImage() {
    var time = new Date().getHours();

    var image = "images/ds_clock.png";
    var imageHTML = document.getElementById("timeImage");

    // Check if the current time falls within the wake-up time and class time range
    if ((wakeuptime <= dstime && time >= wakeuptime && time < dstime) ||
        (wakeuptime > dstime && (time >= wakeuptime || time < dstime))) {
        image = "images/morning.gif";  // Morning image
    } else if ((dstime <= sleeptime && time >= dstime && time < sleeptime) ||
               (dstime > sleeptime && (time >= dstime || time < sleeptime))) {
        image = "images/class.gif";  // Class image
    } else {
        image = "images/night.gif";  // Night image
    }

    imageHTML.src = image;  // Update the image source
}


function updateClock() {
    // Get the selected times from the selectors
    var wakeUpTimeSelector = document.getElementById("wakeUpTimeSelector");
    var dsTimeSelector = document.getElementById("DSTimeSelector");
    var sleepTimeSelector = document.getElementById("sleepTimeSelector");

    wakeuptime = parseInt(wakeUpTimeSelector.value, 10);  // Store as integer
    dstime = parseInt(dsTimeSelector.value, 10);  // Store as integer
    sleeptime = parseInt(sleepTimeSelector.value, 10);  // Store as integer

    changeImage();  // Update the image immediately after changing time settings
}

var saveButton = document.getElementById("saveButton");
saveButton.addEventListener("click", updateClock);

