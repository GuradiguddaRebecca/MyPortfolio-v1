<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
    background-color: #232323;
    margin:0;
    font-family:"Montserrat";

}

.square {
    width: 30%;
    background-color: purple;
    padding-bottom: 30%;
    float: left;
    margin: 1.66%;
    border-radius: 15% ;
    transition:background 0.6s;
    -webkit-transition:background 0.6s;
    -moz-transition: background 0.6s;
}

#container{
    max-width: 600px;
    margin:20px auto;
}

h1{
    color:white;
    line-height: 1.1;
    font-weight:normal;
    text-align: center;
    background: steelblue;
    margin:0;
    text-transform: uppercase;
    padding:20px 0;
}
#colorDisplay{
    font-size: 200%;
}
#message{
    display:inline-block;
}
#stripe{
    background: white;
    height:30px;
    text-align:center;
    color:black;
}
.selected{
   color:white;
   background: steelblue;

}
button{
    border:none;
    background: none;
    text-transform: uppercase;
    height:100%;
    font-weight: 700;
    color: steelblue;
    letter-spacing: 1px;
    font-size:inherit;
    transition:all 2.0s;
    -webkit-transition:background 0.3s;
    -moz-transition: background 0.3s;
    outline: none;
}
button:hover{
    color:white;
    background: steelblue;
}    
    </style>
</head>
<body>
    <h1>
        The Great 
        <br>
        <span id="colorDisplay">RGB</span>
        <br>
         Color Game
    </h1>
    
    <div id="stripe">
        <button id="reset">New Colors</button>
        <span id="message"></span>
        <button class= "mode">Easy</button>
        <button class="mode selected">Hard</button>
    </div>
    
    <div id="container">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>
    <script>
        var numSquares = 6;
var colors = [];
var pickedColor;
var squares = document.querySelectorAll(".square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");
var h1 = document.querySelector("h1");
var resetButton = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");


init();

function init(){
	setupModeButtons();
	setupSquares();
	reset();
}

function setupModeButtons(){
	for(var i = 0; i < modeButtons.length; i++){
		modeButtons[i].addEventListener("click", function(){
			modeButtons[0].classList.remove("selected");
			modeButtons[1].classList.remove("selected");
			this.classList.add("selected");
			this.textContent === "Easy" ? numSquares = 3: numSquares = 6;
			reset();
		});
	}
}

function setupSquares(){
	for(var i = 0; i < squares.length; i++){
	//add click listeners to squares
		squares[i].addEventListener("click", function(){
			//grab color of clicked square
			var clickedColor = this.style.background;
			//compare color to pickedColor
			if(clickedColor === pickedColor){
				messageDisplay.textContent = "Correct!";
				resetButton.textContent = "Play Again?"
				changeColors(clickedColor);
				h1.style.background = clickedColor;
			} else {
				this.style.background = "#232323";
				messageDisplay.textContent = "Try Again"
			}
		});
	}
}



function reset(){
	colors = generateRandomColors(numSquares);
	//pick a new random color from array
	pickedColor = pickColor();
	//change colorDisplay to match picked Color
	colorDisplay.textContent = pickedColor;
	resetButton.textContent = "New Colors"
	messageDisplay.textContent = "";
	//change colors of squares
	for(var i = 0; i < squares.length; i++){
		if(colors[i]){
			squares[i].style.display = "block"
			squares[i].style.background = colors[i];
		} else {
			squares[i].style.display = "none";
		}
	}
	h1.style.background = "steelblue";
}

resetButton.addEventListener("click", function(){
	reset();
})

function changeColors(color){
	//loop through all squares
	for(var i = 0; i < squares.length; i++){
		//change each color to match given color
		squares[i].style.background = color;
	}
}

function pickColor(){
	var random = Math.floor(Math.random() * colors.length);
	return colors[random];
}

function generateRandomColors(num){
	//make an array
	var arr = []
	//repeat num times
	for(var i = 0; i < num; i++){
		//get random color and push into arr
		arr.push(randomColor())
	}
	//return that array
	return arr;
}

function randomColor(){
	//pick a "red" from 0 - 255
	var r = Math.floor(Math.random() * 256);
	//pick a "green" from  0 -255
	var g = Math.floor(Math.random() * 256);
	//pick a "blue" from  0 -255
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g + ", " + b + ")";
}
   
    </script>
</body>
</html>