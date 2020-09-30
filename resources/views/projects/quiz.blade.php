<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz App</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');


*{
    box-sizing:border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    margin:0;
    min-height: 100vh;
    display:flex;
    align-items:center;
    justify-content: center;
    background: #283048;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #859398, #283048);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #859398, #283048); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.quiz-container{
    background-color: #fff;
    width:600px;
    border-radius:10px;
    max-width: 100%;
    overflow: hidden;
    box-shadow:0 0 10px 2px rgba(100,100,100,1);
}

.quiz-header{
    padding:4rem;
}
h2{
    text-align: center;
    padding:1rem;
    margin:0;
}
ul{
    list-style-type: none;
    padding: 0;
}
ul li{
    margin:1rem 0;
    font-size:1.2rem;
   
}

ul li label{
    cursor: pointer;
}

button{
    background-color: blue;
    display:block;
    width:100%;
    padding:1.3rem;
    color:white;
    border:none;
    font-size:1.1rem;
    font-family: inherit;
    cursor: pointer;
}
button:hover{
    background-color: darkblue;
}

button:focus{
    outline:none;
}
    </style>
</head>
<body>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question text</h2>
        <ul>
            <li>
                <input type="radio" id="a" name="answer" class="answer">
                <label id="a_text" for="">Question</label>
            </li>
            <li>
                <input type="radio" id="b" name="answer" class="answer">
                <label id="b_text" for="">Question</label>
            </li>
            <li>
                <input type="radio" id="c" name="answer" class="answer">
                <label id="c_text" for="">Question</label>
            </li>
            <li>
                <input type="radio" id="a\d" name="answer" class="answer">
                <label id="d_text" for="">Question</label>
            </li>
        </ul>
        
        </div>
        <button id="submit">Submit</button>
    </div>
    <script>
        const quizData = [
    {
        question:'Which is the biggest country?',
        a:'America',
        b:'Russia',
        c:'China',
        d:'India',
        correct:'b'
    },{
        question:'Number of continents?',
        a:'1',
        b:'4',
        c:'7',
        d:'10',
        correct:'c'
    },{
        question:'Who is the Prime minister of India?',
        a:'Sonia Gandhi',
        b:'Modi',
        c:'Rahul Gandhi',
        d:'Manmohan singh',
        correct:'b'
    },{
        question:'Who is the cheif minister of Telangana?',
        a:'KCR',
        b:'Chandra babu',
        c:'Revanth Reddy',
        d:'Jaypal reddy',
        correct:'a'
    },{
        question:'What is the popular programming language of 2020',
        a:'Python',
        b:'Java',
        c:'Java script',
        d:'C++',
        correct:'b'
    }
];

const answersEls = document.querySelectorAll(".answer");
const quiz = document.getElementById("quiz");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz(){
    deselectAnswers();
    const currentQuizData = quizData[currentQuiz];

    question.innerHTML = currentQuizData.question;
    a_text.innerHTML = currentQuizData.a;
    b_text.innerHTML = currentQuizData.b;
    c_text.innerHTML = currentQuizData.c;
    d_text.innerHTML = currentQuizData.d;
}
function getSelected(){
    let answer = undefined;

    answersEls.forEach((answerEl) => {
        if(answerEl.checked){
            answer = answerEl.id;
        }
    });

    return answer;
}

function deselectAnswers(){
    answersEls.forEach((answerEl) => {
        answerEl.checked = false;
    });
}

submitBtn.addEventListener('click', () =>{
    //check to see the answer
    const answer = getSelected();

    if(answer){
        if(answer === quizData[currentQuiz].correct ){
            score ++;
        }

        currentQuiz++;
        if (currentQuiz < quizData.length){
            loadQuiz();
        }else{
            quiz.innerHTML =`<h2>You answered correctly at ${score}/${quizData.length}questions.</h2> <button onclick="location.reload()">Reload</button>`
        } 
    } 

});
    </script>
</body>
</html>
