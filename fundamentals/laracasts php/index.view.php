<html>
   <head>
   <title>Laracasts PHP</title>
    <style>
        header {
            background: #fff000;
            padding: 2em;
            text-align: center;
        }
    </style>
   </head>

   <body>    
                
      <!-- Display Arrays -->
       <ul>

           <!-- First syntax -->
            <?php
                foreach($names as $name){
                   echo '<li>'.$name.'</li>';          
                }
            ?>
                    
            <!-- Second syntax: alternative short hand -->
            <?php foreach($names as $name) : ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>  


            <!-- Associative Arrays -->
            <!-- Direct -->
            <?php foreach($person as $feature) : ?>
                <li><?= $feature?></li>
            <?php endforeach ?>    

            <!-- Key value pair -->
            <?php foreach($person as $key => $feature) : ?>
                <li><strong><?= $key; ?></strong><?= $feature;  ?></li>
            <?php endforeach ?>    
    
        </ul>

   </body>
</html>