<!DOCTYPE html>
<html>
  <head>
    <title>PHP Test</title>
  </head>

  <body>

    <?php echo '<p>Hello World</p>'; ?>
    
    <!-- <?php echo $_SERVER['HTTP_USER_AGENT']; ?> -->
    <?php
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'FireFox')) {
      ?>
      <h3>str_contains()がtrueを返しました</h3>
      <center>あなたはFireFoxを使用しています。</center>
    <?php
    } else {
    ?>
      <h3>str_contains()がfalseを返しました</h3>
      <center>あなたはFireFoxを使用していません。</center>
    <?php
    }
    ?>

  <form action="action.php" method="post">
    <label for="name">名前:</label>
    <input name="name" id="name" type="text">

    <label for="age">年齢:</label>
    <input name="age" id="age" type="number">

    <button type="submit">Submit</button>
  </form>

  </body>
</html>