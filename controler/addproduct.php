<?php 

session_start();
include './../enb.php';
$errors=[];


//validate name

$author = (trim($_REQUEST["author"]));
if(empty($author)){
    $errors["author_error"]= "enter name.";
}
else{
    if(strlen($author) > 50){
        $errors["author_error"]= "name must be 50 word.";
    }
}

//title validation

$title = (trim($_REQUEST["title"]));
if(empty($title)){
    $errors["title_error"]= "enter title.";
}
else{
    if(strlen($title) > 50){
        $errors["title_error"]= "title must be 50 word.";
    }
}


//price validation

$price = $_REQUEST["price"];
if (empty($price)){
    $errors["price_error"]= "enter price.";
 } else if (!is_numeric($price)){
       $errors["price_error"]= "plz enter a number.";
 }

 $des = (trim($_REQUEST["des"]));
if(empty($des)){
    $errors["des_error"]= "enter description.";
}
else{
    if(strlen($des) > 500){
        $errors["des_error"]= "description must be 500 word.";
    }
}




// $im = $_FILES["pic"];
// $images=$im['name'];
// $ima = explode(".", $im['name']);
// $imag = strtolower(end($ima));
// $image = array('png','jpg','jpeg');
// if(!empty($im)){
//     if($im["size"] > 10485760){ //10mb
//         $errors["image_error"]= "sorry, your file is too large.";
//     }
// }else if(in_array($imag,$image)){
//     $errors["image_error"]= "just use png, jpg, jpeg.";
// }
// else{
//     $errors["image_error"]= "uplode a image file.";
// }


if (count($errors)>0){
    $_SESSION = $errors;
    header("location: ./../create.php");
}else{
    $query = "INSERT INTO addproduct(author, title, price, descrip) 
    VALUES ('$author','$title','$price','$des')";

     $result=mysqli_query($conn,$query);
     header("location: ./../create.php");
     if($result){
        $_SESSION["meg"]= "your product add successfully";
     }else{
        $_SESSION["meg"]= "somthing wrong";
     }
}