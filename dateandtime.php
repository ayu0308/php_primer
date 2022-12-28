<?php include 'includes/header.php'?>
<body>
    <h1>Time And Date</h1>

    <?php
      $datenow = getdate();
      echo "Today's Date: <br/>";
      echo $datenow['mday']. '<br/>';
      echo $datenow['mon']. '<br/>';
      echo $datenow['year']. '<br/>';

      echo "Today's Date: " .$datenow['mday']. '/'. $datenow['mon']. '/' . $datenow['year'].'<br/>';

      echo time();

    ?>
    <?php require 'includes/footer.php'?>
</body>
</html>