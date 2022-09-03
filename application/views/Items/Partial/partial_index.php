<table>
            <thead>
                <tr>
                    <td>Item name</td>
                    <td>Number of stock</td>
                    <td>Price</td>
                    <td>Date Added</td>
                </tr>
            </thead>
            <tbody>
<?php   if(isset($items)){ ?>
<?php       foreach($items as $item){ ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['stock'] ?></td>
                    <td>$<?= $item['price'] ?></td>
                    <td><?= date_format(date_create($item['created_at']),"Y-m-d") ?></td>
                </tr>
<?php       } ?>
<?php   } ?>
            </tbody>
        </table>