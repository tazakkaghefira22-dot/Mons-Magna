<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order - Mons Magna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mons Magna</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-link" href="/products">Catalog</a>
                <a class="nav-link" href="/inventory">Inventory</a>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Place Custom Order</h1>
        <form action="/orders/store" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Phone</label>
                <input type="text" class="form-control" id="notelp" name="notelp" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Select Product</label>
                <select class="form-control" id="product" name="product" required>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product['ProductID'] ?>"><?= $product['NamaProduk'] ?> - $<?= $product['Harga'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jenis_bahan" class="form-label">Material Type</label>
                <input type="text" class="form-control" id="jenis_bahan" name="jenis_bahan">
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">Color</label>
                <input type="text" class="form-control" id="warna" name="warna">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Size</label>
                <input type="number" class="form-control" id="ukuran" name="ukuran">
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Notes</label>
                <textarea class="form-control" id="catatan" name="catatan"></textarea>
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Price</label>
                <input type="number" step="0.01" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
