<html lang=“en”>

<head>
        <meta name="description" content="Enter to Quiz web page"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <meta name="keywords" content="Enter to quiz page by HTML,CSS" > 
        <meta name="author" content="Malsha Piumini">
        <link href="css/enterTOquiz.css" rel="stylesheet" type="text/css">
       
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <title>
        PLAY QUIZ
    </title>
</head>

<body>
    <div id="bg" class="container">
    <?php include('includes/base/navbar.php') ?>
        <div id="image" class="image">
                <a href="FinalQuiz.php">
                        <img src="img/my.png" height="400px" width="320px" id="imgQ" class="imgQ" >
                    </a>
           
            <div class="overlay">
                <div class="text">CLICK ON <b>"PLAY QUIZ"</b> TO START</div>

            </div>
        </div>
       
        <footer>
            <div class="footer">
                <p><a href="home.php">Home</a> | <a href="team.php">Team</a> | <a href="enterTOquiz.php">Quiz</a> | <a href="contact.php">Contact Us</a></p>
                <p>Written by: <a href="cvMalsha.php">Malsha Piumini</a> | Last updated: 22/07/2019</p>
             </div>
            </footer>
    </div>
   
</body>

</html>