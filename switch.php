<?php include 'includes/header.php'?>
<body>
    <h1>Switch statement</h1>

    <?php
      $grade = 'A';
      switch($grade){
        case 'A':
            echo '<h2 style="color: brown">You are Superstar</h2>';
            break;
        case 'B':  
            echo '<h2>You did well</h2>';
            break;  
        default:
            echo '<h2>You have Failed...</h2>';
            break;
                 

      }


    
    ?>
    <?php require 'includes/footer.php'?>




</body>
</html>