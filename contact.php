<?php include('includes/base/header.php') ?>
<div class="homeFeatured">
   <h1>Contact Us</h1>
   <br>
   <p class="subtitle">Contact the team in order to<br>get to know the best deals around Sri Lanka<p>
   <form action="javascript:validate();" method="get" style="margin-top:0;">
      <input type="text" class="textField" name="name" placeholder="Enter your name" id="txtName"/>
      <br>
      <input type="email" class="textField" name="name" placeholder="Enter your email" id="txtEmail"/>
      <br>
      <textarea class="textField" rows="8" placeholder="Enter the comment" id="txtComment"></textarea>
      <br>
      <select class="textField" style="height: 56px; width: 438px;" id="selRating">
        <option value="">None</option>
        <option value="poor">Poor</option>
        <option value="fair">Fair</option>
        <option value="good">Good</option>
        <option value="excellent">Excellent</option>
        <option value="exceptional">Exceptional</option>
      </select>
      <br>
      <input class="btnSubmit" type="submit" value="Contact us"/>
   </form>
</div>
<style>
body {
    background-position:0 0 !important;
}
</style>
<script>
function validate(){
    let name = document.getElementById("txtName").value || "";
    let email = document.getElementById("txtEmail").value || "";
    let comment = document.getElementById("txtComment").value || "";
    let rating = document.getElementById("selRating").value || "";
    if(name == "" || rating == ""){
        return alert("Your name and rating is required");
    } else {
        if(email != ""){
            if(!validateEmail(email)){
                return alert("Given email address is invalid!");
            }
        }
        if(comment != ""){
            return alert(`Dear ${name}, Thank you very much for your feedback. You have rated our site as ${rating} and your comment was ${comment}.`);
        } else {
            return alert(`Dear ${name}, Thank you very much for your feedback. You have rated our site as ${rating}.`);
        }
    }
}
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
</script>
<?php include('includes/base/footer.php') ?>