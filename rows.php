<?php
    $cart=[
        ['name'=>'stapler', 'price'=>500,'quantity'=>12],
        ['name'=>'Notebook as', 'price'=>100,'quantity'=>10],
        ['name'=>'printer ink', 'price'=>2400,'quantity'=>1],
    ];
    // echo '<p>' '</p>'
    // echo '<pre>';
    //     print_r($cart);
    // echo '</pre>';
?>
    <table style="background: #1665dd65;">
        <thead>
            <th>intem name</th>
            <th>price</th>
            <th>quantity</th>
        </thead>
        <tbody>
            <?php foreach($cart as $line): ?>
                <?php $lineTotal+$line['price'] * $line['quantity'];
                $total+=$lineTotal
                ?>
                <tr>
                    <td> <?= print_r($line['name']) ?></td>
                    <td style="text-align: right;"> <?= number_format($line['price']) ?></td>
                    <td style="text-align: right;"> <?= number_format($line['quantity']) ?></td>
                    <td style="text-align: right;"> <?= number_format($line['total']) ?></td>
                </tr>
            <?php endforeach?>
            
        </tbody>
    </table>
