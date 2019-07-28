<!DOCTYPE html>
<html lang=“en”>

<head>
    <meta name="description" content="Roles of the memmbers">
    <meta name="keywords" content="display a content in a div when on image hover">
    <meta name="author" content="Malsha Piumini">
    <meta http-equiv="refresh" content="30">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Poppins&display=swap" rel="stylesheet">
    <link href="css/informationStyles.css" rel="stylesheet" type="text/css">
    <title>
        Student Information
    </title>
    <style>

    </style>
</head>

<body>

        <h6>
            <nav>
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="index.php">Meet the team</a>
                    </li>
                    <li>
                        <a href="enterTOquiz.php">Quiz</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </h6>

    <h1>Meet The Members

        
    </h1>
    <div>
        <div class="div_one">
            <div class="overlay">
                <div class="text">STUDENT 01<br>Niluja Parameswaran</div>
            </div>
            <img class="one" id="nilu" src="img/nilu.jpg" alt="nilu" width="250px" height="250px"
                style=" margin-top: 25px;">

        </div>
        <div class="div_one">
            <div class="overlay">
                <div class="text">STUDENT 02<br>Suresh Peries</div>
            </div>
            <img class="one" src="img/suresh2.jpg" id="suresh" alt="suresh" width="250px" height="250px"
                style=" margin-top: 25px;">

        </div>
        <div class="div_one">
            <div class="overlay">
                <div class="text">STUDENT 03<br>Malsha Piumini</div>
            </div>
            <img class="one" src="img/malsha2.jpg" alt="Malsha" width="250px" height="250px" style="margin-top: 25px;">

        </div>
        <div class="div_one">
            <div class="overlay">
                <div class="text">STUDENT 04<br>Shian Fernando</div>
            </div>
            <img class="one" src="img/shian.jpg" alt="shian" width="250px" height="250px" style=" margin-top: 25px;">
        </div>
    </div>
    <footer>
        <div class="footer">
            <p><a href="home.php">Home</a> | <a href="index.php">Team</a> | <a href="enterTOquiz.php">Quiz</a> | <a href="contact.php">Contact Us</a></p>
            <p>Written by: <a href="cvMalsha.php">Malsha Piumini</a> | Last updated: 22/07/2019</p>
         </div>
    </footer>
    <script>
      var myVar = setInterval(redirect, 4000);
      function redirect() {
         window.location = "home.php";
      }
      </script>
</body>

</html>