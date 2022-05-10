<?php 

// *isset checks if a value has been set, and we use tht to check if 
// *the global array $_GET has value

// *if submit button was initalized witha value
  if (isset($_GET['submit']) ) {
    echo $_GET["email"];
    echo "<br>";
    echo $_GET["title"];
    echo "<br>";
    echo $_GET["ingredients"];
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
<style type="text/css">
.brand{
  background: #cbb09c !important;
}

.brand-text {
  color: #cbb09c !important;
}
form{
  max-width: 460px;
  margin: 20px auto;
  padding: 5px;
}

</style>

  </head>
  
  <body>
    <section>
     <h4 class="center"> Add a Pizza </h4>
     <!-- Use Post to send data safely -->
     <form class="white" action="index.php" method="GET">
        <label> Email: </label>
        <input type="text" name="email">
        <label> Pizza Title: </label>
        <input type="text" name="title">
        <label> Ingredients: </label>
        <input type="text" name="ingredients">
        <div class="center">
          <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
     </form>
</section>
    <!-- <script src="leetcode.js"></script> -->
  </body>
</html>
