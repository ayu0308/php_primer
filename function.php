<?php include 'includes/header.php'?>
<body>
    <h1>Function</h1>
    <?php
      //defining a function
      function writeMessage(){
        echo "You are really a nice person, Have a nice time! <br/>";
      }

      /* Calling a function*/
      writeMessage();
      echo "<hr/>";

      writeMessage();

      //Function with parameters
      function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo " The sum of $num1 and $num2 is: $sum <br/>";
      }

      addFunction(10, 20);

    ?>
    <?php require 'includes/footer.php'?>
</body>
</html>