<html>
    <head>
        <title>
            location and description
        </title>
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
    </head>
    <body>
    <div id="logo"><img src="img/logo_light.png" class="logo"/></div>
    
    <div class="navBar">
        <?php include('includes/base/navbar.php') ?>
    </div>
    <div id="essContainer">
        <form>
            <div id="topColourChanger">
            <ladel class="label">Select the background Colour </ladel>
            <select id="backGroundColourOptions" onclick="ChangeBgColour()">
                <option value="#3d7cb2">Dark Blue</option>
                <option value="#5596e6">Light Blue</option>
                <option value="#41d6c3">Greeny Blue</option>
                <option value="#8c9ba5">Grey</option>
                <option value="#cfe3e5">light Grey</option>
            </select>
            </div>

            <div id="topColourChanger"> 
            <ladel class="label">Select the font Colour </ladel>
            <select id="fontColourOptions" onclick="ChangeFontColour()">
                <option value="blue">Dark Blue</option>
                <option value="green">Green</option>
                <option value="#633303">Brown</option>
                <option value="#8c1d1d">Dark Red</option>
                <option value="purple">Purple</option>
            </select>
            </div> 
        
            <h1 class="formHeadingFormatting"><span class="text">select any picture and get to no what actually it is...</span> </h1>
            <div id="container">
                <div class="inlineTwo">
                        <img src="img/Pidurangala.jpg" id="thumbnailImagesSecondSet" onmouseover="pidurangala()" onmouseout="removeContent()">
                </div>
                <div class="inlineOne">
                    <img src="img/Knuckles.jpg" id="thumbnailImages" onmouseover="knuckles()" onmouseout="removeContent()"> 
                </div>

                <div class="inlineOne">
                    <img src="img/GalleFort.jpg" id="thumbnailImages" onmouseover="galleFort()" onmouseout="removeContent()"> 
                </div>
                <div class="inlineOne">
                    <img src="img/Kumana.jpg" id="thumbnailImages" onmouseover="kumana()" onmouseout="removeContent()"> 
                </div>
                <div class="inlineTwo">
                    <img src="img/SpiceGarden.jpg" id="thumbnailImagesSecondSet" onmouseover="spiceGarden()" onmouseout="removeContent()"> 
                </div>
            </div>
                <div id="descriptionAndImageArea">
                </div>
            
        </form>
    </div>
    <footer>
        <hr>
        <p>created by : <span class="footerName"><a href="cv.html"><u>Shian Fernando</u></a></span> last modified date : 20/7/19</p>
    </footer>
        <script>
            function ChangeBgColour(){
            var selectedColour=document.getElementById("backGroundColourOptions")[document.getElementById("backGroundColourOptions").selectedIndex].value;
                if(selectedColour==="#3d7cb2"){
                    document.body.style.backgroundColor="#3d7cb2";
                }else if(selectedColour==="#5596e6"){
                    document.body.style.backgroundColor="#5596e6";
                }else if(selectedColour==="#41d6c3"){
                    document.body.style.backgroundColor="#41d6c3";
                }else if(selectedColour==="#8c9ba5"){
                    document.body.style.backgroundColor="#8c9ba5";
                }else if(selectedColour==="#cfe3e5"){
                    document.body.style.backgroundColor="#cfe3e5";
                }
            }

            function ChangeFontColour(){
            var selectedColour=document.getElementById("fontColourOptions")[document.getElementById("fontColourOptions").selectedIndex].value;
                if(selectedColour==="blue"){
                    document.body.style.color=selectedColour;
                }else if(selectedColour==="green"){
                    document.body.style.color=selectedColour;
                }else if(selectedColour==="#633303"){
                    document.body.style.color=selectedColour;
                }else if(selectedColour==="#8c1d1d"){
                    document.body.style.color=selectedColour;
                }else if(selectedColour==="purple"){
                    document.body.style.color=selectedColour;
                }
            }

            function pidurangala(){
                window.scrollTo(100,380);
                var pidurangala=document.createElement("img");
                pidurangala.id="enlargePhoto";
                pidurangala.src="img/Pidurangala.jpg";
                var locationName=document.createElement("div");
                locationName.id="name";
                locationName.innerHTML="Pidurangala";
                document.getElementById("descriptionAndImageArea").appendChild(locationName);
                document.getElementById("descriptionAndImageArea").appendChild(pidurangala);
                document.getElementById("descriptionAndImageArea").innerHTML+="<p>Pidurangala is an enormous rock located a few kilometres north of Sigiriya. The two rocks have an interlinked history: whilst King Kasyapa was building Sigiriya Rock Fortress in the 5th century, he moved monks living around Sigiriya to a new monastery on Pidurangala Rock. An ancient cave temple still houses objects from various vintages that reflect Buddhist, Hindu and western beliefs, and the stupa to the left of the temple entrance is believed to mark the spot where King Kasyapa was cremated. Pidurangala is a more challenging climb than Sigiriya, so should not be attempted by those with poor physical fitness. There is no clear path to the top: steep, uneven steps give way to an expanse of boulders and crevices that climbers must navigate in order to reach the summit. From the top, there are glorious vistas of the surrounding landscape and an incredible view of the majestic Sigiriya Rock.</P>"
            }
            function spiceGarden(){
                window.scrollTo(100,380);
                var spiceGarden=document.createElement("img");
                spiceGarden.id="enlargePhoto";
                spiceGarden.src="img/SpiceGarden.jpg";
                var locationName=document.createElement("div");
                locationName.id="name";
                locationName.innerHTML="Spice Garden";
                document.getElementById("descriptionAndImageArea").appendChild(locationName);
                document.getElementById("descriptionAndImageArea").appendChild(spiceGarden);
                document.getElementById("descriptionAndImageArea").innerHTML+="<p>Enjoy the Sri Lanka’s world renowned spices at their source. Visit a spice garden, where smells of cinnamons, pepper, cardamom, nutmeg and mace overwhelm the senses and the visitors are provided an insight into an age old industry of spice production, which attracted many a European and Asian merchants to the ports of ancient Sri Lanka.</p>"
            }
            function galleFort(){
                window.scrollTo(100,380);
                var galleFort=document.createElement("img");
                galleFort.id="enlargePhoto";
                galleFort.src="img/GalleFort.jpg";
                var locationName=document.createElement("div");
                locationName.id="name";
                locationName.innerHTML="Galle Fort";
                document.getElementById("descriptionAndImageArea").appendChild(locationName);
                document.getElementById("descriptionAndImageArea").appendChild(galleFort);
                document.getElementById("descriptionAndImageArea").innerHTML+="<p>Galle Fort , in the Bay of Galle on the southwest coast of Sri Lanka, was built first in 1588 by the Portuguese, then extensively fortified by the Dutchduring the 17th century from 1649 onwards. It is a historical, archaeological and architectural heritage monument, which even after more than 423 years maintains a polished appearance, due to extensive reconstruction work done by Archaeological Department of Sri Lanka. </p>";
            }
            function kumana(){
                window.scrollTo(100,380);
                var kumana=document.createElement("img");
                kumana.id="enlargePhoto";
                kumana.src="img/Kumana.jpg";
                var locationName=document.createElement("div");
                locationName.id="name";
                locationName.innerHTML="Kumana";
                document.getElementById("descriptionAndImageArea").appendChild(locationName);
                document.getElementById("descriptionAndImageArea").appendChild(kumana);
                document.getElementById("descriptionAndImageArea").innerHTML+="<p>Kumana National Park in Sri Lanka is renowned for its avifauna, particularly its large flocks of migratory waterfowl and wading birds. The park is 391 kilometres southeast of Colombo on Sri Lanka's southeastern coast. Kumana is contiguous with Yala National Park.Kumbukkan Oya forms the southern boundary of the national park. Some 20 lagoons and tanks support the extensive birdlife of the national park. The lagoons are shallow with depths less than 2 metres (6.6 ft). Kumana villu is subject to occasional inundation with seawater. The elevation of the area ranges from sea level to 90 metres (300 ft). The mean annual temperature is 27.30 °C (81.14 °F) and the area receives 1,300 millimetres (51.18 in) of annual rainfall.</p>";
            }
            function knuckles(){
                window.scrollTo(100,380);
                var knuckles=document.createElement("img");
                knuckles.id="enlargePhoto";
                knuckles.src="img/Knuckles.jpg";
                var locationName=document.createElement("div");
                locationName.id="name";
                locationName.innerHTML="Knuckles Mountain Range";
                document.getElementById("descriptionAndImageArea").appendChild(locationName);
                document.getElementById("descriptionAndImageArea").appendChild(knuckles);
                document.getElementById("descriptionAndImageArea").innerHTML+="<p>The Knuckles Mountain Range lies in central Sri Lanka, in the Districts of Matale and Kandy. The range takes its name from a series of recumbent folds and peaks in the west of the massif which resemble the knuckles of clenched fist when viewed from certain locations in the Kandy District.</p>";
            }
            function removeContent(){
                document.getElementById("descriptionAndImageArea").innerHTML="";
            }
        
        </script>
    </body>
</html>