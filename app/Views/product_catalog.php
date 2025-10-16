<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog - Mons Magna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mons Magna</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/orders">Orders</a>
                <a class="nav-link" href="/inventory">Inventory</a>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Product Catalog</h1>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/shoe-placeholder.jpg" class="card-img-top" alt="Shoe Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['NamaProduk'] ?></h5>
                            <p class="card-text">Type: <?= $product['JenisProduk'] ?><br>Model: <?= $product['Model'] ?><br>Size: <?= $product['Ukuran'] ?><br>Price: $<?= $product['Harga'] ?></p>
                            <a href="/orders/create?product=<?= $product['ProductID'] ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
