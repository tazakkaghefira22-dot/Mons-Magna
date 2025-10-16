<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Mons Magna</title>
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
                <a class="nav-link" href="/orders">Orders</a>
                <a class="nav-link" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Inventory Dashboard</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Material Name</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th>Min Stock</th>
                    <th>Unit Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materials as $material): ?>
                    <tr>
                        <td><?= $material['NamaBahan'] ?></td>
                        <td><?= $material['Kategori'] ?></td>
                        <td class="<?= $material['StokBahan'] <= $material['MinimumStok'] ? 'text-danger' : '' ?>"><?= $material['StokBahan'] ?></td>
                        <td><?= $material['MinimumStok'] ?></td>
                        <td>$<?= $material['HargaSatuan'] ?></td>
                        <td>
                            <button class="btn btn-sm btn-warning" onclick="editStock(<?= $material['MaterialID'] ?>)">Update Stock</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
