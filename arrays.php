<?php
    $categories = ['paper', 'writing', 'equitment'];
    echo '<p> First: ' .$categories[0]. '</p>';
    echo '<p> Last: ' .$categories[2]. '</p>';
    // echo '<p> How many: ' .$categories[3]. '</p>';

    $product=['paper','writing','equitpment'];
    echo '<p> First: ' .$product[0]. ' </p>';
    echo '<p> Last: ' .$product[2]. ' </p>';
    // adding value into arrays
    $product[]='funiture added';
    $product[]='clothing brand added';
    // sorting array
    sort($product);
    echo '<p> sorted array' .implode(',',$product). '</p>';
    echo '<hr>';


    ?>

    <ul style="list-style-type: none;background: #97343452;">
        <?php foreach($product as $prd): ?>
            <li style="padding: 10px;"><?= $prd; ?></li>
        <?php endforeach; ?>
    </ul>