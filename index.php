<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>TRAVEL SRILANKA</h2>

<div class="row">
    <div class="column" style="background-color:#aaa;">
  <img src="img/niluu.jpg" alt="nilu" style="width:100%">
    <h2>Niluja Parameswaran</h2>
    <p>Student 1</p>
  </div>
  <div class="column" style="background-color:#aaa;">
  <img src="img/suresh.jpg" alt="suresh" style="width:100%">
    <h2>Suresh Peiris</h2>
    <p>Student 2</p>
  </div>
  <div class="column" style="background-color:#bbb;">
  <img src="img/malsha.jpg" alt="malsha" style="width:100%">
    <h2>Malsha Piumini</h2>
    <p>Student 3</p>
  </div>
  <div class="column" style="background-color:#ccc;">
  <img src="img/shian.jpg" alt="shian" style="width:100%">
    <h2>Shian Fernando</h2>
    <p>Student 4</p>
  </div>
  
</div>
<script>
    var myVar = setInterval(redirect, 4000);
    function redirect() {
        window.location = "home.php";
    }
</script>

</body>
</html>
