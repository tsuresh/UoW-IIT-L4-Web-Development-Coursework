<!DOCTYPE html>
<html lang=“en”>

<head>
        <meta name="description" content="Quiz"> 
        <meta name="keywords" content="Quiz by using javaScript,css,Html" > 
        <meta name="author" content="Malsha Piumini">
       
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link href="css/finalQuiz.css" rel="stylesheet" type="text/css">
    <title>
        QUIZ
    </title>
    <script>
        var index = 0, test, questionNum, question, answer, choices, choiceA, choiceB, choiceC, choiceD, correct = 0, points = 0;
        var questions = [
            ["01. What is the capital of Sri Lanka?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "B"],
            ["02. Temple of the tooth Relic is located in ?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "C"],
            ["03. What is the city located in south west shoreline of Sri Lanka?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "A"],
            ["04. Uawatuna is situated in?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "A"],
            ["05. Bogambara Lake is the heart of?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "C"],
            ["06. In which city you able to see the esala perahara?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "D"],
            ["07. What is the city that established by Portuguese ?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "A"],
            ["08. Where you can see the Vihara Maha Devi park", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "B"],
            ["09. In which city you can see the Seetha Amman Temple?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "C"],
            ["10. Hakgala Botenical Garden is situated in?", "Galle", "Colombo", "Kandy", "Nuwara Eliya", "D"]
        ];
        if (index == 0) {
            alert("Once you press continue you can't acess to the previous question")
        }

        function _(a) {//by this no need to use whole statement again and again
            return document.getElementById(a);
        }

        function iterateQuestions() {
            test = _("test");
            if (index >= questions.length) {
                alert("You completed the quiz.Press OK to view score")
                final();
                index = 0;
                correct = 0;
                return false;
            }
            _("questionNum").innerHTML = "<h2>Question " + (index + 1) + " of " + questions.length + "</h2>";
            question = questions[index][0];
            choiceA = questions[index][1];
            choiceB = questions[index][2];
            choiceC = questions[index][3];
            choiceD = questions[index][4];
            test.innerHTML = "<p id='Q'>" + question + "</p>";
            test.innerHTML += "<input type='radio' name='choices' value='A' style='width:5px; height:5px;'>" + choiceA + "<br>";
            test.innerHTML += "<input type='radio' name='choices' value='B'>" + choiceB + "<br>";
            test.innerHTML += "<input type='radio' name='choices' value='C'>" + choiceC + "<br>";
            test.innerHTML += "<input type='radio' name='choices' value='D'>" + choiceD + "<br><br>";
            test.innerHTML += "<button class='button' onclick ='checkAnswer()'>Continue</button>";

        }
        var checkRadio;
        var checkArr = new Array(10);
        function checkAnswer() {
            choices = document.getElementsByName("choices");
            for (var i = 0; i < choices.length; i++) {
                if (choices[i].checked) {
                    answer = choices[i].value;

                } else {
                    
                }

            }
            if(questionNum<10){
                if (answer == questions[index][5]) {
                checkRadio = "correct";
                displayAnswer.innerHTML +="0"+ (index + 1) + ".) " + "<b>"+ answer+"</b>" + " " + "<img  src='img/right.png' width='30px' height='30px' class='ans1'>"+"<br><hr>";
                correct++;
                points = points + 2;
               
            } else if(answer==null) {
                checkRadio = "Incorrect";
                displayAnswer.innerHTML += "0"+(index + 1) + ".)"  + " " + "<img  src='img/wrong.png' width='30px' height='30px' class='ans'>" + "   Answer is : " + questions[index][5] + "<br><hr>";
                points = points - 1;}

             else if(answer != questions[index][5]) {
                checkRadio = "Incorrect";
                displayAnswer.innerHTML +="0"+ (index + 1) + "). " +"<b>"+ answer+"</b>" + " " + "<img  src='img/wrong.png' width='30px' height='30px' class='ans'>"   + "   Answer is : " + questions[index][5] + "<br><hr>";
                points = points - 1;
                answer=null;
            }
            }else if(questionNum=10){
                if (answer == questions[index][5]) {
                checkRadio = "correct";
                displayAnswer.innerHTML += (index + 1) + ".) " + "<b>"+ answer+"</b>" + " " + "<img  src='img/right.png' width='30px' height='30px' class='ans1'>"+"<br><hr>";
                correct++;
                points = points + 2;
               
            } else if(answer==null) {
                checkRadio = "Incorrect";
                displayAnswer.innerHTML += (index + 1) + ".)"  + " " + "<img  src='img/wrong.png' width='30px' height='30px' class='ans'>" + "   Answer is : " + questions[index][5] + "<br><hr>";
                points = points - 1;}

             else if(answer != questions[index][5]) {
                checkRadio = "Incorrect";
                displayAnswer.innerHTML += (index + 1) + "). " +"<b>"+ answer+"</b>" + " " + "<img  src='img/wrong.png' width='30px' height='30px' class='ans'>"   + "   Answer is : " + questions[index][5] + "<br><hr>";
                points = points - 1;
                answer=null;
            }
            }
            
          
            index++;
            iterateQuestions();
        }
        window.addEventListener("load", iterateQuestions, false);
        var totalSeconds = 180;
        var minutes = parseInt(totalSeconds / 60);
        var seconds = parseInt(totalSeconds % 60);
        var quizTimer;

        function timechecker() {
            document.getElementById("timer_heading2").innerHTML = minutes + ' min : ' + seconds + ' secs ';

            if (totalSeconds <= 0) {
                setTimeout('final()', 1);
                alert("TIME IS UP..!!! Press OK to view your score");
            } else {
                totalSeconds = totalSeconds - 1;
                minutes = parseInt(totalSeconds / 60);
                seconds = parseInt(totalSeconds % 60);
                quizTimer = setTimeout("timechecker()", 1000);
            }
        }
        quizTimer = setTimeout("timechecker()", 1000);
        function final() {
            clearTimeout(quizTimer);
            if (points < 5) {
                _("test").style.border = 'none';
                _("test").style.height = 'auto';
                _("test").style.backgroundColor = 'rgba(217, 136, 128   ,0.6)';
                _("test").style.color = 'Black';

            }
            _("timer").style.display = 'none';
            test.innerHTML = "<p id='dis'><b>Correct Answers : " + correct + "/ " + questions.length + "</b></p>" + "<p id = 'scroll'>POINTS : [ "
                + " " + points + "  /" + 20 +
                "]<br><br><b>Scroll down to see your performence</b></p>";
            _("displayAnswer").innerHTML += "<b>You Completed the quiz within <br>" + minutes + " min : " + seconds + " secs </b>";

            _("questionNum").innerHTML = "<h1>Test Completed</h1>";
            var divAns = _("displayAnswer");
            divAns.style.display = "block";
            footer.style.display = "block";
        }
        function performence() {
            var divAns = document._("displayAnswer");
            divAns.style.display = "block";
        }
    </script>

    <meta charset="UTF-8">
</head>

<body>
    <h2 id="questionNum"></h2>
    <div id="timer">
        <div id="timer_heading" class="time">Time Left: </div>
        <div id="timer_heading2" class="time"> </div>
    </div>
    <!--<div id="changeColour"></div>-->
    <div id="test" class="container"> </div>

    <div id="displayAnswer" style="display: none; ">
    </div>
    <footer id="footer">
        <hr>
        CREATED BY : <a href="cvMalsha.php">Malsha
            Piumini</a>
        Last Modified date : 7/7/2019
    </footer>
</body>

</html>