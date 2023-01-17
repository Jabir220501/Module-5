<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Bingo</title>
    <link rel="stylesheet" href="style.css">
</head>
            <?php
            $colors = [
                ["color" => "red", "translation" => "rood", "text-color" => "black"],
                ["color" => "blue", "translation" => "blauw", "text-color" => "black"],
                ["color" => "green", "translation" => "groen", "text-color" => "black"],
                ["color" => "orange", "translation" => "oranje", "text-color" => "black"],
                ["color" => "purple", "translation" => "paars", "text-color" => "black"],
                ["color" => "black", "translation" => "zwart", "text-color" => "white"],
                ["color" => "white", "translation" => "wit", "text-color" => "black"],
                ["color" => "gray", "translation" => "grijs", "text-color" => "white"],
                ["color" => "brown", "translation" => "bruin", "text-color" => "white"],
                ["color" => "pink", "translation" => "roze", "text-color" => "white"],
                ["color" => "indigo", "translation" => "indigo", "text-color" => "white"],
                ["color" => "turquoise", "translation" => "turquoise", "text-color" => "white"],
                ["color" => "beige", "translation" => "beige", "text-color" => "black"]
            ];
            shuffle($colors);
            echo("<script>let colors='");
            var_dump($colors);
            echo("</script>");
            
            ?>
            

<body>
    <div class="card">
        <div class="bingo">
            <div class="text">
                <span style="color:<?php echo $colors[1]["color"]?>">B</span>
                <span style="color:<?php echo $colors[2]["color"]?>">I</span>
                <span style="color:<?php echo $colors[3]["color"]?>">N</span>
                <span style="color:<?php echo $colors[4]["color"]?>">G</span>
                <span style="color:<?php echo $colors[5]["color"]?>">O</span>
            </div>


            <div class="wrapper">
                <div class="column 1">
                    <div style="background-color: <?php echo $colors[1]["color"] ?>">
                        <span style="color:<?php echo $colors[1]["text-color"] ?>">
                            <?php echo $colors[1]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[2]["color"] ?>">
                        <span style="color:<?php echo $colors[2]["text-color"] ?>">
                            <?php echo $colors[2]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[3]["color"] ?>">
                        <span style="color:<?php echo $colors[3]["text-color"] ?>">
                            <?php echo $colors[3]["translation"] ?>
                        </span>
                    </div>


                </div>
                <div class="column 2">
                    <div style="background-color: <?php echo $colors[4]["color"] ?>">
                        <span style="color:<?php echo $colors[4]["text-color"] ?>">
                            <?php echo $colors[4]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[5]["color"] ?>">
                        <span style="color:<?php echo $colors[5]["text-color"] ?>">
                            <?php echo $colors[5]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[6]["color"] ?>">
                        <span style="color:<?php echo $colors[6]["text-color"] ?>">
                            <?php echo $colors[6]["translation"] ?>
                        </span>
                    </div>
                </div>
                <div class="column 3">
                    <div style="background-color: <?php echo $colors[7]["color"] ?>">
                        <span style="color:<?php echo $colors[7]["text-color"] ?>">
                            <?php echo $colors[7]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[8]["color"] ?>">
                        <span style="color:<?php echo $colors[8]["text-color"] ?>">
                            <?php echo $colors[8]["translation"] ?>
                        </span>
                    </div>

                    <div style="background-color: <?php echo $colors[9]["color"] ?>">
                        <span style="color:<?php echo $colors[9]["text-color"] ?>">
                            <?php echo $colors[9]["translation"] ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="shuffle_btn">
                <button><a href="index.php">shuffle</a></button>
            </div>
        </div>
</body>

</html>