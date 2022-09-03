<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Varela+Round&display=swap" rel="stylesheet">
        <!-- External CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <title>Search Filter</title>
        <script src="<?= base_url() ?>assets/scripts/script.js"></script>
    </head>
    <body>
        <form action="/items/search" method="post" class="filter">
            <input type="text" name="name" placeholder="search by name">
            <input type="number" name="min" placeholder="$min" step="0.01"> -
            <input type="number" name="max" placeholder="$max" step="0.01">
            <select name="price_order">
                <option>Low to High Price</option>
                <option>High to Low Price</option>
            </select>
            
        </form>

        <div id="table"></div>
    </body>
</html>