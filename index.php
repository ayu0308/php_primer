    <?php 
    $title = "Index";
    include 'includes/header.php'
    ?>
    <!------ Basic Html---->
    <h1>Hello HTML</h1>
    <br/>

    <?php 
    echo "Hello PHP";
    echo "<br/>";
    echo "Hello 2nd Line";
    echo "<br/>";
    ?>

    <?php 
     //variable in php
     $name = "Ayush Kumar";
     $age = 22;
     //echo variable
     echo $name;
     echo "<h1>My name is : $name </h1>";
     echo "<h1>My age is : $age </h1>";
     
    ?>

    <?php require 'includes/footer.php'?>



</body>
</html>