<?php include 'includes/header.php'?>
<body>
    <?php 
    
     //An if statement that will carry out an out an action based on the value of their variables

     echo '<h2>If statement</h2>'; 
     $grade = 40;
     // ==, ===, >, <, <=, >=

     if($grade >=60){
        echo '<h3 style="color: green">You have Passed</h3>';
     }
     else{
        echo '<h3 style="color: red">You have failed</h3>';
     }
     $grade = 'c';
     //if-else
     if($grade =='A'){
        echo '<h2 style="color: brown">You are superstar</h2>';
     }
     elseif($grade == 'B'){
        echo '<h2 style="color: pink">You did well</h2>';
     }
     else{
        echo'<h2 style="color: blue">You have Failed</h2>';
     }


    ?>
    <?php require 'includes/footer.php'?>
</body>
</html>