<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mons Magna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mons Magna</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/products">Catalog</a>
                <a class="nav-link" href="/orders">Orders</a>
                <a class="nav-link" href="/inventory">Inventory</a>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Welcome to Mons Magna Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Catalog</h5>
                        <p class="card-text">View and manage our design catalog.</p>
                        <a href="/products" class="btn btn-primary">Go to Catalog</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Manage customer orders.</p>
                        <a href="/orders" class="btn btn-primary">View Orders</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inventory</h5>
                        <p class="card-text">Check material stock levels.</p>
                        <a href="/inventory" class="btn btn-primary">View Inventory</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
