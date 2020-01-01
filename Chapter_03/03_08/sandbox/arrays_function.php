<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
  <title>Arrays function</title>
</head>

<body>
  <?php $numbers = [12, 45, 14, 9, 66, 15];
  echo max($numbers) . '<br>';
  echo min($numbers) . '<br>';
  echo count($numbers) . '<br>';
  sort($numbers) . '<br>';
  echo '<pre>';
  print_r($numbers);
  echo '</pre>';
  ?>
</body>

</html>