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
    <h2> Globale weergave </h2>

    <div class="main-content">
        <!--
        Zorg voor een query die alle informatie uit de database haalt.
        Dit met verschillende knoppen onderbouwen zodat er overzicht is.
        !-->
        <div class="filialen">
            <form method="post">
            <button type="submit" name="filialen">Filialen</button>
                <br>
                <?php
                if(isset($_POST['filialen'])) {
                    // Define the columns title and name in this array map.
                    $columns = array (
                        'Filiaal id' => 'Filiaal_id',
                        'Filiaal naam' => 'Filiaal_naam'
                    );
                    // Run the query
                    $result= mysqli_query($db,"SELECT Filiaal_id, Filiaal_naam FROM filialen");

                    // Output table header
                    echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                    foreach ($columns as $name => $col_name) {
                        echo "<th>$name</th>";
                    }
                    echo "</tr>";

                    // Output rows
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($columns as $name => $col_name) {
                            echo "<td style=\"text-align:center;\">". $row[$col_name] . "</td>";
                        }
                        echo "</tr>";
                    }
                    // Close table
                    echo "</table>";
                }
                ?>
            </form>
        </div>
        <div class="fabrieken">
            <form method="post">
                <button type="submit" name="fabrieken">Fabrieken</button>
                <br>
                <?php
                if(isset($_POST['fabrieken'])) {
                    // Define the columns title and name in this array map.
                    $columns = array (
                        'Fabriek id' => 'fabriek_id',
                        'Fabriek naam' => 'fabriek_naam',
                        'Telefoon nummer' => 'telefoon_nummer'
                    );
                    // Run the query
                    $result= mysqli_query($db,"SELECT fabriek_id, fabriek_naam, telefoon_nummer FROM fabrieken");

                    // Output table header
                    echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                    foreach ($columns as $name => $col_name) {
                        echo "<th>$name</th>";
                    }
                    echo "</tr>";

                    // Output rows
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($columns as $name => $col_name) {
                            echo "<td style=\"text-align:center;\">". $row[$col_name] . "</td>";
                        }
                        echo "</tr>";
                    }
                    // Close table
                    echo "</table>";
                }
                ?>
            </form>
        </div>
        <div class="producten">
            <form method="post">
                <button type="submit" name="producten">Producten</button>
                <br>
                <?php
                if(isset($_POST['producten'])) {
                    // Define the columns title and name in this array map.
                        $columns = array(
                            'Product id' => 'product_id',
                            'Product naam' => 'product_naam',
                            'Product voorraad' => 'product_voorraad',
                            'Product prijs exclusief BTW' => 'product_prijs_excl',
                            'Product prijs inclusief BTW' => 'product_prijs_incl'
                        );
                        // Run the query
                        $result= mysqli_query($db,"SELECT product_id, product_naam, product_voorraad, product_prijs_excl, product_prijs_incl FROM product_info");

                        // Output table header
                        echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                        foreach ($columns as $name => $col_name) {
                        echo "<th>$name</th>";
                }
                echo "</tr>";

                // Output rows
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    foreach ($columns as $name => $col_name) {
                    echo "<td style=\"text-align:center;\">". $row[$col_name] . "</td>";
            }
            echo "</tr>";
        }
        // Close table
    echo "</table>";
}
?>
            </form>
        </div>
        <div class="orders">
            <form method="post">
                <button type="submit" name="orders">Orders</button>
                <br>
                <?php
                if(isset($_POST['orders'])) {
                    // Define the columns title and name in this array map.
                    $columns = array(
                        'Order id' => 'Order_id',
                        'Filiaal naam' => 'filiaal_naam',
                        'Product naam' => 'product_naam',
                        'Order aantal' => 'order_aantal',
                        'Order prijs' => 'order_prijs'
                    );

                    // Run the query
                    $result= mysqli_query($db,"SELECT Order_id, filiaal_naam, product_naam, order_aantal, order_prijs FROM order_info");

                    // Output table header
                    echo "<table border=\"1px solid black\" width=\"80%\"><tr>";
                    foreach ($columns as $name => $col_name) {
                        echo "<th>$name</th>";
                    }
                    echo "</tr>";

                    // Output rows
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        foreach ($columns as $name => $col_name) {
                            echo "<td style=\"text-align:center;\">". $row[$col_name] . "</td>";
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

    <div class="clearfix">

    </div>

    <?php
        include "includes/footer.php";
    ?>
</div>
</body>
</html>





