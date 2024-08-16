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
    <h1> Constrained Fitter Plots - old Hb </h1>
    <p> Applied Filter: (mu_pt &gt; 8),(k1_pt &gt; 1),(k2_pt &gt; 1),(pi_pt &gt; 1),(lxy_ds &lt; 1),(mu_id_medium &equals; 1),(mu_rel_iso_03 &lt; 0.3),(fv_prob &gt; 0.1),(dsMu_mass < bs_mass),(k1_charge*k2_charge < 0), (pi_charge*mu_charge<0) + dsMu mass is in signal region (3 sigma) around nominal ds mass (except the ds mass plot) </p>

<div class="figure-container">
    <p> Stacked Plots </p>
    <?php
        $files = glob('/eos/user/p/pahwagne/www/constrained/stackedplots/*_constrained.png');
        foreach($files as $file) {
            if($file !== "." && $file !== "..") {
                $filename = basename($file); # get filename only
                echo "<figure>";
                echo "<img src=/constrained/stackedplots/$filename>";
                echo "<figcaption>$filename</figcaption>";
                echo "</figure>";
            }
        }

    ?>
</div>


<div class="figure-container">
    <p> Normalized Plots </p>
    <?php
        $files = glob('/eos/user/p/pahwagne/www/constrained/normplots/*_constrained.png');
        foreach($files as $file) {
            if($file !== "." && $file !== "..") {
                $filename = basename($file); # get filename only
                echo "<figure>";
                echo "<img src=/constrained/normplots/$filename>";
                echo "<figcaption>$filename</figcaption>";
                echo "</figure>";
            }
        }
    ?>
</div>


</body>
</html>

