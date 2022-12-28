<?php include 'includes/header.php'?>
<body>
    <h1>Array</h1>
    <?php
       //a variable
       $num = 3;

       //an array
       //Only one datatype
       $numbers = array(1,2,3,4,5,6,7,8,9,10,12,14,99,55,34,25,0);
       echo $numbers[5];

       echo "<p>$numbers[9]</p>";

       $size = count($numbers);
       echo "<p>Array number is size: $size</p>";
       for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";
       }
    
    
    ?>
    <?php require 'includes/footer.php'?>
</body>
</html>