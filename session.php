<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session Test</title>
  </head>
  <body>
    <h1>ID受付</h1>
    <form action='next.php' method='post'>
      <p>id:<input type='text' name='id'></p>
      <p>pass:<input type='text' name='pass'></p>
      <input type='submit'>
    </form>
  </body>
</html>
