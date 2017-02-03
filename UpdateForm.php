<html>
<head>
<link href="styles.css"  type="text/css" rel="stylesheet">
</head>
<body>


<form  action="Update.php" method="post" >

    UPDATE FORM</br>
    
    <?php
      $id=$_REQUEST['q'];
      echo "<input type=\"text\" name=\"id\" value=$id></br>";
    ?>
    
    <input type="text" name="fname" placeholder="FIRST NAME"></br>

    <input type="text" name="lname" placeholder="LAST NAME"></br>
  
    <button type="submit">UPDATE</button>
</form>


<?php include("READ.php"); ?>

</body>
</html>