<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do-list</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/todolist-project.css">
    <style>
        h1{
    background-color: #2980b9;
    color:white;
    margin:0;
    padding: 10px 20px;
    text-transform: uppercase;
    font-size: 24px;
    font-weight: normal;

}
ul{
    list-style:none;
    margin:0;
    padding:0;
    
}
body{
    font-family: roboto;
    background: #ee9ca7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffdde1, blue); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
span{
    color : white;
    background-color: red;
    height:40px;
    margin-right:20px;
    text-align:center;
    width:0px;
    display: inline-block;
    transition: 0.2s linear;
    opacity:0;
}
li:hover span{
    width:40px;
    opacity:1.0;

}
li{
    background-color: white;
    height:40px;
    line-height: 40px;
    color:#666;

}
input{
    color:#2980b9;
    font-size: 18px;
    background-color: #f7f7f7;
    width:100%;
    padding:13px 13px 13px 20px;
    box-sizing: border-box;
    border:3px solid rgba(0,0,0,0);
    
}
input:focus{
    background-color: white;
    border:3px solid blue;
    outline: none;
}
li:nth-child(2n){
    background-color: #f7f7f7;
}
#container{
    border:2px solid gray;
    width:360px;
    margin: 100px auto;
    background-color: #f7f7f7;
    box-shadow: 0 0 3px rgba(0,0,0,1);
}

.completed{
    color:gray;
    text-decoration: line-through;
}
    </style>
</head>
<body>
    <div id="container">
        <h1>To-do List</h1>
        <input type="text" placeholder="Add New Todo">

        <ul>
            <li><span>X</span>Go to Potions class</li>
            <li><span>X</span>Buy new clothes</li>
            <li><span>X</span>Go to baazar</li>

        </ul>

    </div>
    
    
    <script>
//checkoff specific todos by clicking
$("ul").on("click","li",function(){
    $(this).toggleClass("completed");
});
    
//click on X on delete
$("ul").on("click","span",function(event){
    $(this).parent().fadeOut(500,function(){
        $(this).remove();
    });
    event.stopPropagation();

});

$("input[type='text']").keypress(function(event){
    if(event.which === 13){
        //grabbing new todo text from input
        var todotext = $(this).val();
        $(this).val("");
        //create a new li and add to ul
        $("ul").append("<li><span>X</span>" + todotext +"</li>")
    }
    
});
    </script>
</body>
</html>