<?php 
require_once __DIR__ . '/db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2</title>
</head>
<body>
    
<main class="container">
    <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="col-4">
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="card-image">
                                <img src="<?php echo $product->getImageUrl() ?>" alt="" class="img-fluid">
                            </div>
                        <h5 class="card-title">
                            <?php echo $product->getName() ?>
                        </h5>
                        <p class="card-text">della: <?php echo $product->getBrand() ?></p>
                        <p class="card-text">prezzo: <?php echo $product->getPrice() ?></p>
                        <p class="card-text">Categoria: <?php echo $product->getCategory()->getName(); ?></p>
                        </div>
                    </div>
                    
                </article>
            <?php } ?>
    </div>
    </main>

</body>
</html>