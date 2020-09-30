<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countdown_timer</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');


*{
    box-sizing:border-box;
}

body{
    background-image: url("https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.santabanta.com%2Fdownload%2Fsnow%2F2101159.htm&psig=AOvVaw36mrCLD4S8Oq0TCO12AFmH&ust=1600865469621000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOi3-urm_OsCFQAAAAAdAAAAABAK");
    background-size: cover;
    background-position: center center;
    display:flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: 'Poppins', sans-serif;
    margin:0;
}
h1{
    font-size:4rem;
    margin-top:5rem;
    font-weight: normal;
}
.countdown-container{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.big-text{
    font-weight: bold;
    font-size:6rem;
    line-height:1;
    margin:1rem 2rem;
}
.countdown-el {
    text-align: center;
}
.countdown-el span{
    font-size:1.5rem;
}

    </style>
</head>
<body>
    <h1>New Years Eve</h1>

    <div class="countdown-container">
        <div class="countdown-el days-c">
           <p class="big-text" id="days">0</p> 
           <span>days</span>
        </div>
        <div class="countdown-el hours-c">
            <p class="big-text" id="hours">0</p> 
            <span>hours</span>
         </div>
         <div class="countdown-el mins-c">
            <p class="big-text" id="mins">0</p> 
            <span>mins</span>
         </div>
         <div class="countdown-el seconds-c">
            <p class="big-text" id="secs">0</p> 
            <span>secs</span>
         </div>
    </div>
    <script>
        const daysEl = document.getElementById('days');
const hoursEl = document.getElementById('hours');
const minsEl = document.getElementById('mins');
const secsEl = document.getElementById('secs');

const newYears = '1 Jan 2021';

function countdown(){
    const newYearsDate = new Date(newYears);
    const currentDate = new Date();

    const totalSeconds = (newYearsDate - currentDate)/1000;

    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds/ 3600) % 24;
    const mins = Math.floor(totalSeconds / 60) %  60;
    const seconds = Math.floor(totalSeconds) % 60;
    
    daysEl.innerHTML = days;
    hoursEl.innerHTML = formatTime(hours);
    minsEl.innerHTML = formatTime(mins);
    secsEl.innerHTML = formatTime(seconds);

    
}
function formatTime(time){
    return time < 10 ? `0${time}`:time;
}

//initial call
countdown();

setInterval(countdown,1000);
    </script>
</body>
</html>