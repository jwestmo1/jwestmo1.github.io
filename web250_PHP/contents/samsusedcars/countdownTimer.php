<html>
  <head>
    <title>Countdown Timer</title>
  </head>
  <body>
    <?php
      $target = mktime(10, 0, 0, 5, 12, 2022);
      $today = time();
      $difference = ($target - $today);
      $days = (int) ($difference/86400);
      print"Graduation will happen in $days days";
     ?>
  </body>
</html>
