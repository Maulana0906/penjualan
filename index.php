<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .card {
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }
        h1{
            font-size: 35px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="data_barang.php">
            <div class="card bg-primary">
                <h1>Barang</h1>
            </div>
        </a>
        <a href="pembayaran.php">
            <div class="card bg-primary">
                <h1>Pembayaran</h1>
            </div>
        </a>
        <a href="pembeli.php">
            <div class="card bg-primary">
                <h1>Pembeli</h1>
            </div>
        </a>
        <a href="supplier.php">
            <div class="card bg-primary">
                <h1>Supplier</h1>
            </div>
        </a>
        <a href="transaksi.php">
            <div class="card bg-primary">
                <h1>Transaksi</h1>
            </div>
        </a>
    </div>
</body>

</html>