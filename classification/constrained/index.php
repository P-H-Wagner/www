<!DOCTYPE html>
<html>

<head>
    <style>
        .figure-container {
            display: flex;
            flex-wrap: wrap;
        }
        .figure-container figure {
            width: 22%; /* Adjust width as needed */
            margin: 1%; /* Add some margin for spacing */
            box-sizing: border-box;
        }
        .figure-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>


<body>
    <h1> Neural Network Plots - constrained data </h1>

<div class="figure-container">
    <?php
        $files = glob('/eos/user/p/pahwagne/www/classification/constrained/trainplots/*.png');
        foreach($files as $file) {
            if($file !== "." && $file !== "..") {
                $filename = basename($file); # get filename only
                echo "<figure>";
                echo "<img src=/classification/constrained/trainplots/$filename>";
                echo "<figcaption>$filename</figcaption>";
                echo "</figure>";
            }
        }

    ?>
</div>

<a href="/classification/constrained/score0_bt_05/"> Cut on tau score > 0.5 </a><br>
<a href="/classification/constrained/score2_st_01/"> Cut on comb score < 0.1 </a><br>

</body>
</html>

