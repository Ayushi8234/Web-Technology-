<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>4x4 Boxes with PHP</title>
  <style>
    /* grid container */
    .container {
      display: flex;
      flex-direction: column;
      gap: 8px;              /* space between rows */
      max-width: 420px;
      margin: 20px auto;
    }
    /* one row of 4 boxes */
    .row {
      display: flex;
      gap: 8px;              /* space between boxes */
      justify-content: center;
    }
    /* box style */
    .box {
      width: 90px;
      height: 90px;
      border: 2px solid #333;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-family: Arial, sans-serif;
      background: #e21b1bff;
      box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <?php
    // create 4 rows
    for ($r = 0; $r < 4; $r++) {
        echo '<div class="row">';
        // each row has 4 boxes
        for ($c = 0; $c < 4; $c++) {
            $num = $r * 4 + $c + 1; // number boxes 1..16
            echo "<div class=\"box\">{$num}</div>";
        }
        echo '</div>';
    }
  ?>
</div>

</body>
</html>
