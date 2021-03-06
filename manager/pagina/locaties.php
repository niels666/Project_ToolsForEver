<?php
/**
 * Created by PhpStorm.
 * User: Niels en Mike
 * Date: 10-10-2016
 * Time: 11:51
 * De pagina met de verschillende locaties
 */
?>
<?php
include "../DBconnect.php";
include "schrijf/schrijflocaties.php"
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
    <h2> De filialen </h2>

    <div class="main-content-locaties">
        <div class="locaties">
            <form method="post">
                <p>
                    Filiaal naam:<br>
                    <input type="text" name="filiaal_naam" placeholder="filiaal naam">
                </p>
                <p>
                    <button>
                        <input type="submit" name="filiaal_toevoegen">
                    </button>
                </p>

            <div class="locaties_info">
                <form method="post">
                    <button type="submit" name="locaties">Filialen</button><br>
                    <?php
                    if(isset($_POST['locaties'])) {
                    // Define the columns title and name in this array map.
                    $columns = array(
                        'Filiaal ID' => 'Filiaal_id',
                        'Filiaal naam' => 'Filiaal_naam'
                    );
                    // Run the query
                    $result = mysqli_query($db, "SELECT Filiaal_id, Filiaal_naam FROM filialen");

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
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix">

    </div>

    <?php
        include "includes/footer.php";
    ?>
</div>
</body>
</html>


