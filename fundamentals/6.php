<html>
   <body>
   
      <?php include("xxmenu.php"); ?>
      <p>This is an example to show how to include wrong PHP file!</p>

      echo '<br>';

      <?php require("xxmenu.php"); ?>
      <p>This is an example to show how to include wrong PHP file!</p>
      
   </body>
</html>