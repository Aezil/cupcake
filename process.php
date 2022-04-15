<!--
Author: Leonzyo Zyfuentes
Date: 4/14/2022
URL: https://lzyfuentes.greenriverdev.com/328/cupcakes/
Description: This program allows user to enter name, choose cupcakes,
and display total of order
-->
<?php
    $COST = 3.50;
    $flavors = $_POST['flavor'];
    $customerName = $_POST['customerName'];

    $flavorCount = count($flavors);
    if (isset($customerName) && $flavorCount === 0) {
        echo "You need to enter your name and at least one option";
        return;
    }

    $totalCost = 0;
    $nameList = '';
    foreach ($flavors as $flavor) {
        $totalCost += $COST;
        $nameList .= "<li>$flavor</li>";
    }

    $totalStr = '$' . number_format($totalCost, 2);

    echo "
    <html>
    <body>
        <span>Thank you, $customerName, for your order!</span>
        <br>
        <span>Order Summary:</span>
        <ul>
            $nameList
        </ul>
        <span>Order Total: $totalStr</span>
    </body>
    </html>
    ";
