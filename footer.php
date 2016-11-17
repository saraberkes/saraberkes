<footer>
  <div class="container">
  <div class="socialMenu"><?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'social'
    )); ?></div>

    <h6>&copy; <?php echo date('Y'); ?> Sara Berkes. Designed in Sketch & Developed on WordPress</h6>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-52914317-3"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<script src="https://use.typekit.net/rar5uzi.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_footer(); ?>
</body>
</html>