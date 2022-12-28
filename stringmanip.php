<?php include 'includes/header.php'?>
<body>
    <h1>PHP String Manipulation</h1>
    <?php
      //concatenation of sttrings
      $phrase1 = "student who come late";
      $phrase2 = "in class, stand with Rock";
      $name = "Ayush Kumra";
      echo $phrase1. ", named Ayush, ". $phrase2;
      echo '<br/>';
      echo '<hr/>';

      //string transformation
      echo 'Uppercase first letter: ' .ucfirst($name). '<br/>';
      echo 'Uppercase first letter of each word: ' .ucwords($name). '<br/>';
      echo 'Upper case: ' .strtoupper($name). '<br/>';
      echo 'Lowercase: ' .strtolower($name). '<br/>';
      echo '<br/>';
      echo '<hr/>';
      echo 'Repeat Strig: ' .str_repeat($name, 10). '<br/>';
      echo 'Repeat Strig - Nested Function: ' .strtolower(str_repeat($name, 10)). '<br/>';
      echo 'Get a substring :' . substr($name, 3,5). '<br/>';

      echo 'Get position of string: ' .strpos($name, 'w'). '<br/>';
      //Return NULL
      echo 'Get position of string: ' .strpos($name, "a"). '<br/>';
      echo 'Find Character "A": '.strchr($name, 'A'). '<br/>';
      echo 'Find Character "u": '.strchr($name, 'u'). '<br/>';
      echo 'Find Character "s": '.strchr($name, 's'). '<br/>';



    ?>
    <?php require 'includes/footer.php'?>
</body>
</html>