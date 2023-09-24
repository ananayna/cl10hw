
<?php
session_start();
// echo "<pre>";
//     print_r($_SESSION);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
        <a class="navbar-brand" href="create.php">
            <h2>foody <span class="text-danger">Bangli</span></h2>
        </a>
        <button 
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#dipa"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="dipa">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="create.php">Add product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="productlist.php">product list</a>
                </li>
            </ul>
        </div>
    </nav>
   </header>
<div class="container mt-5">
    <p class="h1 text-center text-capitalize bg-success text-light">Add Products</p>
    <hr class="w-80" />

    <div class= "w-50 mx-auto mt-5">
        <form action="./controler/addproduct.php" method="POST" enctype="multipart/form-data" >
                 <h5 class="text-info"><?php
                echo isset($_SESSION['meg'])? $_SESSION['meg']:"";
                ?></h5>
            <div class="form-group">
                <label>author name</label>
                <input type="text" class="form-control" placeholder="full name" name="author" />
                <p class="text-danger"><?php
                echo isset($_SESSION['author_error'])? $_SESSION['author_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>product name</label>
                <input type="text" class="form-control" placeholder="title" name="title" />
                <p class="text-danger"><?php
                echo isset($_SESSION['title_error'])? $_SESSION['title_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>price</label>
                <input type="number" class="form-control" placeholder="Product price" name="price"  />
                <p class="text-danger"><?php
                echo isset($_SESSION['price_error'])? $_SESSION['price_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>description</label>
                <textarea type="text" class="form-control" placeholder="description" name="des"></textarea>
                <p class="text-danger"><?php
                echo isset($_SESSION['des_error'])? $_SESSION['des_error']:"";
                ?></p>
            </div>
            <!-- <div class="form-group">
                <label for="file"></label>
                <input type="file" class="form-control"  name="pic"  />
                <p class="text-danger">
                <?php
                //echo isset($_SESSION['image_error'])? $_SESSION['image_error']:"";
                ?>
                </p>
            </div> -->
            <br>
            <button type="submit" class="btn btn-primary cl">Uplode</button>
        </form>
    </div>
</div>
<?php
  session_unset();
  ?>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>