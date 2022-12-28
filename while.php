<?php include 'includes/header.php'?>
<body>
    <h1>While Loop</h1>
    <?php
      $grade = 0;
      while($grade < 10){
        echo'<P>I AM LESS THAN 10!</P>';
        $grade++;
      }
     echo 'exit loop';
     ?>

<h1>Do While Loop</h1>
  <?php
  $grade =0;
  do{
    echo'<P>I AM LESS THAN 10!</P>';
    $grade++;
  }while($grade <10);
  ?>
  <?php require 'includes/footer.php'?>

</body>
</html>