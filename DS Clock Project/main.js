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
}

function showCurrentTime() {
    var clock = document.getElementById("clock");
    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    // Convert hours from 24-hour to 12-hour format
    var meridian = "AM";
    if (hours >= 12) {
        meridian = "PM";
        if (hours > 12) {
            hours -= 12;
        }
    } else if (hours === 0) {
        hours = 12; // Midnight case
    }

    // Format minutes and seconds to always have two digits
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    // Display clock time
    var clockTime = hours + ":" + minutes + ":" + seconds + " " + meridian;
    clock.innerHTML = clockTime;

    changeImage(); // Call image change function
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

var oneSecond = 1000;
setInterval(showCurrentTime, oneSecond);

function changeImage() {
    var currentTime = new Date();

    var image = document.getElementById("timeImage");

    // Check if the current time falls within the wake-up time and class time range
    if (currentTime >= sleeptime && currentTime <= wakeuptime ) {          // current time equal to or between wakeuptime and dstime change image to ds time
        image = "images/class.gif";  // Morning image                                                               // if current time equal or between ds time to sleeptime change image to class time
                                                                                 //if current time equal or betwwen sleeptime to wakeuptime change image to sleep time
    } else if (currentTime <= sleeptime) {
        image = "images/class.gif";  // Class image
    } else {
        image = "images/night.gif";  // Night image
    }
}



var saveButton = document.getElementById("saveButton");
saveButton.addEventListener("click", updateClock);

// Call initializeTimes on page load to set initial values
window.onload = initializeTimes;
