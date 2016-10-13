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
        include "../../includes/header.php";
    ?>

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
                // BUG fixen.
                if(isset($_POST['filialen'])) {
                    // Define the columns title and name in this array map.
                    $columns = array(
                        'Filiaal id' => 'filiaal_id',
                        'Filiaal naam' => 'filiaal_naam'
                    );
                    // Run the query
                    $result= mysqli_query($db,"SELECT filiaal_id, filiaal_naam FROM filiaal");

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
                        'Product id' => 'Product_id',
                        'Product Naam' => 'product_naam',
                        'Order aantal' => 'order_aantal',
                        'Order prijs' => 'order_prijs'
                    );

                    // Run the query
                    $result= mysqli_query($db,"SELECT Order_id, Product_id, product_naam, order_aantal, order_prijs FROM order_info");

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
        include "../../includes/footer.php";
    ?>
</div>
</body>
</html>





