<?php include('includes/base/header.php') ?>
<div class="homeFeatured">
   <h1>Explore Sri Lanka<br>Wonder of Asia</h1>
   <br>
   <p class="subtitle">Choose your favourite travel destination</p>
   <br>
   <form action="search.php" method="get">
      <label for="keyword">Enter your search query</label>
      <input type="text" class="searchBox" name="keyword" id="keyword" placeholder="Search for destinations, attractions and hotels"/>
      <strong class="fa fa-search searchIcon" onClick="document.forms[0].submit();"></strong>
   </form>
   <a href="#shop" class="featuredLink">Shop</a> |  <a href="sitemap.php" class="featuredLink">Sitemap</a> 
</div>
<div class="wrapper">
   <div class="container">
      <div class="block" id="blkNEliya">
         <h2>Beautiful Nuwara Eliya</h2>
         <p>Nuwara Eliya is a city in the tea country hills of central Sri Lanka. The naturally landscaped Hakgala Botanical Gardens displays roses and tree ferns, and shelters monkeys and blue magpies. Nearby Seetha Amman Temple, a colorful Hindu shrine, is decorated with religious figures. Densely forested Galway's Land National Park is a sanctuary for endemic and migratory bird species, including bulbuls and flycatchers.</p>
         <a class="btn" href="nuwaraEliya.php">Visit here</a>
      </div>
      <div class="block" id="blkGalle">
         <h2>Rampart of Galle</h2>
         <p>Galle is a city on the southwest coast of Sri Lanka. It’s known for Galle Fort, the fortified old city founded by Portuguese colonists in the 16th century. Stone sea walls, expanded by the Dutch, encircle car-free streets with architecture reflecting Portuguese, Dutch and British rule. Notable buildings include the 18th-century Dutch Reformed Church. Galle Lighthouse stands on the fort’s southeast tip.</p>
         <a class="btn" href="galle.php">Visit here</a>
      </div>
      <div class="block" id="blkColombo">
         <h2>Exploring Colombo</h2>
         <p>Colombo, the capital of Sri Lanka, has a long history as a port on ancient east-west trade routes, ruled successively by the Portuguese, Dutch and British. That heritage is reflected in its its architecture, mixing colonial buildings with high-rises and shopping malls. The imposing Colombo National Museum, dedicated to Sri Lankan history, borders sprawling Viharamahadevi Park and its giant Buddha.</p>
         <a class="btn" href="colombo.php">Visit here</a>
      </div>
      <div class="block" id="blkKandy">
         <h2>Sacred city of Kandy</h2>
         <p>Kandy is a large city in central Sri Lanka. It's set on a plateau surrounded by mountains, which are home to tea plantations and biodiverse rainforest. The city's heart is scenic Kandy Lake (Bogambara Lake), which is popular for strolling. Kandy is famed for sacred Buddhist sites, including the Temple of the Tooth (Sri Dalada Maligawa) shrine, celebrated with the grand Esala Perahera annual procession.</p>
         <a class="btn" href="kandy.php">Visit here</a>
      </div>
      <div class="clearfix"></div>
      <a id="shop"></a>
      <div class="bigBlock">
         <h1>
         Travel Sri Lanka Store
         </h1>
         <p style="width:300px;">Want to purchase amazing Sri Lankan ornaments? Visit our online store and purchase as you wish. Lowest price in Island.</p>
         <a class="btn" href="shop.php">Shop Online</a>   
      </div>
   </div>
</div>
<?php include('includes/base/footer.php') ?>