<!DOCTYPE html>
<html>
<head>
    <title>Color Changing Boxes</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 420px;
            margin: 20px auto;
        }
        .row {
            display: flex;
            gap: 10px;
        }
        .box {
            width: 90px;
            height: 90px;
            border: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>
<body>

<div class="container">
    <?php 
        for ($r = 0; $r < 4; $r++) {
            echo "<div class='row'>";
            for ($c = 0; $c < 4; $c++) {
                $num = $r * 4 + $c + 1;
                echo "<div class='box' onmouseover='changeColor(this)' onmouseout='resetColor(this)'>$num</div>";
            }
            echo "</div>";
        }
    ?>
</div>

<script>
    // Random color generator
    function randomColor() {
        return "#" + Math.floor(Math.random()*16777215).toString(16);
    }

    // Change color when mouse enters
    function changeColor(box) {
        box.style.backgroundColor = randomColor();
    }

    // Reset color when mouse exits (optional)
    function resetColor(box) {
        box.style.backgroundColor = "white";
    }
</script>

</body>
</html>
