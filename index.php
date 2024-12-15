<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce</title>
  <link href="style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.19/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!-- navbar start -->
  <div class="container">
    <?php
    include 'navbar.php';
    ?>
  </div>
  <!-- navbar end -->
   

  <!-- main content -->
  <div class="container">
  <div class="card bg-base-100 image-full w-96 shadow-xl">
    <figure>
      <img
        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
        alt="Shoes" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">Shoes!</h2>
      <p>If a dog chews shoes whose shoes does he choose?</p>
      <div class="card-actions justify-end">
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>
  </div>
  <!-- content end -->

  <!-- footer -->
   <div class="container">
    <?php
    include 'footer.php';
    ?>
   </div>
  <!-- footer end -->
</body>
</html>