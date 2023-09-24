<?php
include './enb.php';
$query ="SELECT * FROM addproduct";
$result = mysqli_query($conn,$query);
$add = mysqli_fetch_all($result, 1);

?>

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
    <p class="h1 text-center text-capitalize bg-info text-danger">Product List</p>
    <hr class="w-80" />
    <section id="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="dtable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl. no</th>
                                    <th>Author Name</th>
                                    <th>Product Name</th>
                                    <th>price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($add as $key=> $adds){ 
                                ?>
                                 <tr>
                                    <td scope="row"><?= ++$key?></td>
                                    <td scope="row"><?= $adds['author']?></td>
                                    <td scope="row"><?= $adds['title']?></td>
                                    <td scope="row"><?= $adds['price']?> /-</td>
                                    <td scope="row"><?= strlen($adds['descrip']) > 20 ?substr($adds['descrip'],0,20)."...":$adds['descrip']; ?></td>
                                    <td><div class="btn_group-sm">
                                        <a class="btn btn-info">view</a>
                                        <a class="btn btn-warning">edit</a>
                                        <a href="./controler/deletepd.php?id= <?= $adds['id']?>" class="btn btn-danger">delete</a>
                                    </td>
                                    </div>
                                </tr>
                                <?php
                                }
                                ?>
                              
                            <tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </section>
   </body>