<?php
    $product='staple';
    $price=500;
    $quantity=3 +$price;
    $in_stock=true;
    $total=$quantity*$price;
    echo '<h1> The price is: ' .$product. '</h1>';
    echo "<p> The price is $price Rwf";
    echo '<p> we have ' .$quantity. ' item in the stock for ' .$price. 'rwf each</p> <br>';
    echo "<p> we have " .$quantity. " item in the stock for " .$price. "rwf each</p>";

    echo '<p> the talt number is ' .number_format($total). 'rwf </p>';
    echo '<p> the totol number is  number_format($total) rwf </p>';
    if($quantity>0){
        $in_stock=true;
    }
    else{
        $in_stock=false;
    }


    if ($in_stock){
        echo "<p> $product is available </p>";
    }
?>