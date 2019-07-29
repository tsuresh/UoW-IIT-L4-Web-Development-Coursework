<html lang="en">
    <head>
        <title>Map for the sites</title>
        <link rel="stylesheet" type="text/css" href="css/sitemap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
            <img src="img/logo_light.png" class="logo"/>
            <div class="navBar">
            <?php include('includes/base/navbar.php') ?>
            </div>
        <svg height="2000px" width="1400px">
            
            
            <!-- <path d="M 150 220 L 150 530 Z" /> -->
            <path d="M 150 270 L 150 1700 Z" />
            
            <ellipse cx="160" cy="220" rx="150" ry="50" />
            
            <text  x="100" y="150" class="title" > Home
                <animateMotion path="M 0 0 L 15 80" dur="1s" fill="freeze" />
            </text>


            <!-- meet the team -->
            <path d="M 150 400 L 300 400 Z" />
            <a href="team.php">
           <rect x="300" y="365"  height="70" width="200" id="first" class="meetTheTeam"/>
           <text  x="320" y="405" class="pages" > Meet the team
           </text>
            </a>
           
            <path d="M 370 438 L 370 790 Z" /> 
            <!-- Suresh cv -->
            <path d="M 370 490 L 600 490 Z" />
            <a href="cvSuresh.php">
           <rect x="600" y="455"  height="70" width="200" id="first" class="teamMates"/>
           <text  x="640" y="495" class="pages">Suresh CV</text>
            </a>

            <!-- Malsha cv -->
            <path d="M 370 590 L 600 590 Z" />
            <a href="cvMalsha.php">
                <rect x="600" y="555"  height="70" width="200" id="first" class="teamMates"/>
                <text  x="640" y="595" class="pages">Malsha CV</text>
            </a>

            <!-- Niluja cv -->
            <path d="M 370 690 L 600 690 Z" />
            <a href="cvNiluja.php">
                <rect x="600" y="655"  height="70" width="200" id="first" class="teamMates"/>
                <text  x="640" y="695" class="pages">Niluja CV</text>
            </a>

            <!-- Shian cv -->
            <path d="M 370 790 L 600 790 Z" />
            <a href="cvShian.php">
                <rect x="600" y="755"  height="70" width="200" id="first" class="teamMates"/>
                <text  x="640" y="795" class="pages">Shian CV</text>
            </a>

            <!-- quiz -->
            <path d="M 150 900 L 300 900 Z" />
            <a href="enterTOquiz.php">
                <rect x="300" y="865"  height="70" width="200" id="second" class="meetTheTeam"/>
                <text  x="370" y="910" class="pages" > Quiz</text>
            </a>

           <!--  Contact us -->
            <path d="M 150 1000 L 300 1000 Z" />
            <a href="contact.php">
                <rect x="300" y="965"  height="70" width="200" id="third" class="meetTheTeam"/>
                <text  x="345" y="1010" class="pages" > Contact us</text>
            </a>

            <!-- Locations -->
            <path d="M 150 1100 L 300 1100 Z" />
            <a href="home.php">
                <rect x="300" y="1065"  height="70" width="200" id="fourth" class="meetTheTeam"/>
                <text  x="355" y="1105" class="pages" > Locations</text>
            </a>
            <path d="M 370 1138 L 370 1500 Z" /> 

            <!-- Nuwara Eliya -->
            <path d="M 370 1200 L 600 1200 Z" />
            <a href="nuwaraEliya.php">
                <rect x="600" y="1160"  height="70" width="200" id="fourth" class="teamMates"/>
                <text  x="640" y="1200" class="pages">Nuwara Eliya</text>
            </a>

            <!-- Galle -->
            <path d="M 370 1300 L 600 1300 Z" />
            <a href="galle.php">
                <rect x="600" y="1260"  height="70" width="200" id="fourth" class="teamMates"/>
                <text  x="640" y="1300" class="pages">Galle</text>
            </a>

            <!-- Colombo -->
            <path d="M 370 1400 L 600 1400 Z" />
            <a href="colombo.php">
                <rect x="600" y="1360"  height="70" width="200" id="fourth" class="teamMates"/>
                <text  x="640" y="1400" class="pages">Colombo</text>
            </a>

            <!-- Kandy -->
            <path d="M 370 1500 L 600 1500 Z" />
            <a href="kandy.php">
                <rect x="600" y="1460"  height="70" width="200" id="fourth" class="teamMates"/>
                <text  x="640" y="1500" class="pages">Kandy</text>
            </a>

            <!-- Shop -->
            <path d="M 150 1600 L 300 1600 Z" />
            <a href="home.php#shop">
                <rect x="300" y="1565"  height="70" width="200" id="fifth" class="meetTheTeam"/>
                <text  x="355" y="1605" class="pages" > Shop</text>
            </a>

            <!-- Images -->
            <path d="M 150 1700 L 300 1700 Z" />
            <a href="gallery.php">
                <rect x="300" y="1665"  height="70" width="200" id="sixth" class="meetTheTeam"/>
                <text  x="355" y="1705" class="pages" > Images</text>
            </a>


        </svg>
        <footer>
            <hr>
            <p >created by : <span class="footerName"><a href="cvShian.php"><u>Shian Fernando</u></a></span> last modified date : 20/7/19</p>
        </footer>
    </body>
</html>
