<?php
  session_start();
  include "server.php";
?>

<!DOCTYPE html>
<html>
<head>
<title> User homepage </title>
<script>
  var avoid_list = <?php echo(json_encode($avoid_list)); ?>
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="../style.css?v={random number/string}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
  <!-- Form to recommend products to the user -->
  <form action="index.php" method="POST" id="user">
    <div class="text text-center">
    <label class="question"> Are you looking for a skincare product or a routine? <label><br>
    <input type="radio" name="choice" value="product" required>Product </input>
    <input type="radio" name="choice" value="routine">Routine</input>
    <button type="submit" name="recommend" class="btn btn-outline-secondary btn-lg">Recommend me!</button>
    </div>
  </form>

  <div class="text-center discover">
    <a href="../search/productSearch.php" class="btn btn-outline-secondary btn-lg">Discover More</a>
  </div>

</body>
</html>
