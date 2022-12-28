<?php include 'includes/header.php'?>
<body>
 <h1>For loop</h1>

  <?php
     //for loop
     for($count = 0; $count < 10; $count++){
        echo'<p>Hello World</p>';
        '<br/>';
     }
     for($count = 0; $count < 10; $count++){
        echo"<p>The count is: $count</p>";
     }
     ?>

<?php require 'includes/footer.php'?>

</body>
</html>