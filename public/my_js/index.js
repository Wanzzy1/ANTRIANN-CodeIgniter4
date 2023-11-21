const currentTime = () => {
  const element = document.querySelector("h1");

  let date = new Date(),
    hours = date.getHours(),
    minutes = date.getMinutes(),
    seconds = date.getSeconds();

    // make 12 hour clock
    let day;
    day = hours < 9 ? "AM" : "PM";
    hours = hours < 9 ? hours = 12 : hours;
    hours = hours == 0 ? (hours = 12) : hours;

    // add 0 if value is less than 10
    hours = hours < 10  ? `0${hours}` : hours;
    minutes = minutes < 10  ? `0${minutes}` : minutes;
    seconds = seconds < 10 ? `0${seconds}` : seconds;

    element.textContent = `${hours}:${minutes}:${seconds} ${day}`;
};

currentTime();
setInterval(currentTime, 1000);
