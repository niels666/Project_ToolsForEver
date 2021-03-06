<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 10-10-2016
 * Time: 11:48
 * De pagina voor de globale weergave van ToolsForEver
 */
?>
<?php
include "../DBconnect.php";
?>
<html>
<head>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <?php
        include "includes/header.php";
    ?>
    <h2> Fabrieken </h2>

    <div class="main-content-fabrieken">
        <div class="fabrieken">
                <div class="fabriek_info">
                <?php
                    $columns = array(
                        'Fabriek ID' => 'fabriek_id',
                        'Fabriek naam' => 'fabriek_naam',
                        'Telefoon nummer' => 'telefoon_nummer'
                    );
                    // Run the query
                    $result = mysqli_query($db, "SELECT fabriek_id, fabriek_naam, telefoon_nummer FROM fabrieken");

                ?>

                <div id="result">

                <?php

                    // Output table header
                    echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                    foreach ($columns as $name => $col_name) {
                        echo "<th>$name</th>";
                    }
                    echo "</tr>";

                    // Output rows
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($columns as $name => $col_name) {
                            echo "<td style=\"text-align:center;\">" . $row[$col_name] . "</td>";
                        }
                        echo "</tr>";
                    }
                    // Close table
                    echo "</table>";
                ?>
                </div>


            </div>
        </div>
        </div>
</div>

    <div class="clearfix">

    </div>

    <?php
        include "includes/footer.php";
    ?>
</body>
</html>


