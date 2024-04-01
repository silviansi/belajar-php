<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Store | Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
// Array Product
$products = [
    [
        'id' => 1,
        'name' => 'Otodidak Desain dan Pemrograman Website',
        'price' => 150000,
        'description' => 'Buku yang cocok untuk belajar desain dan pemrograman secara otodidak',
        'image' => 'product1.jpg',
    ],
    [
        'id' => 2,
        'name' => '7 in 1 Pemrograman Web untuk Pemula',
        'price' => 200000,
        'description' => 'Buku pemrograman web yang cocok untuk pemula',
        'image' => 'product2.jpg',
    ],
    [
        'id' => 3,
        'name' => 'Buku Mahir Pemrograman Web',
        'price' => 180000,
        'description' => 'Buku yang cocok untuk belajar lebih mendalam mengenai pemrograman web',
        'image' => 'product3.jpg',
    ],
    [
        'id' => 4,
        'name' => 'Pemrograman Internet',
        'price' => 150000,
        'description' => 'Buku yang cocok untuk belajar pemrograman internet',
        'image' => 'product4.png',
    ],
    [
        'id' => 5,
        'name' => 'Pemrograman Web dengan Framework Laravel',
        'price' => 200000,
        'description' => 'Buku yang cocok untuk belajar pemrograman web dengan framework laravel',
        'image' => 'product5.png',
    ],
    [
        'id' => 6,
        'name' => 'Buku Sakti Pemrograman Web seri PHP',
        'price' => 180000,
        'description' => 'Buku yang cocok untuk belajar pemrograman web dengan PHP',
        'image' => 'product6.jpg',
    ],
];

?>

<!-- HTML code -->
<div class="container-fluid product">
  <div class="row">
    <?php foreach ($products as $product) : ?>
      <div class="col-md-4 pb-4">
        <div class="card product-card h-100">
          <div class="card-img-container">
            <img src="assets/images/<?= htmlspecialchars($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
            <div class="card-img-overlay">
              <button type="button" class="btn btn-primary">Add to Cart</button>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold"><?= htmlspecialchars($product['name']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
            <p class="card-text"><strong>Harga:</strong> Rp. <?= htmlspecialchars($product['price']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>