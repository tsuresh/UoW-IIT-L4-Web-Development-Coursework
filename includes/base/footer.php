     <div class="footer">
        <p><a href="index.php">Home</a> | <a href="intro.php">Team</a> | <a href="enterTOquiz.php">Quiz</a> | <a href="contact.php">Contact Us</a></p>
        <p>Written by:  <?php if(isset($footerAuthor)){ echo $footerAuthor; } else { echo '<a href="cvSuresh.php">Suresh Peiris</a>'; } ?> | Last updated: <?php if(isset($lastUpdates)){ echo $lastUpdates; } else { echo '22/07/2019'; } ?></p>
     </div>
     <!-- Go to www.addthis.com/dashboard to customize your tools --> <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-552bdff47497f2bb"></script>
     <script>
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollBtn").style.display = "block";
         } else {
            document.getElementById("scrollBtn").style.display = "none";
         }
      }
      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }
     </script>
  </body>
</html>