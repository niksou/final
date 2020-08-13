<?php
session_start();


$mysqli = new mysqli('localhost','root','','test') or die($mysqli->error);
$item_id=0;

if(isset($_POST['save'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $picture=$_POST['picture'];



    $mysqli->query("INSERT INTO product(name,description,price,picture) VALUES('$name' , '$description','$price','$picture')")
                        or die($mysqli->error);

    $_SESSION['message']= "Your data has been added!";
    $_SESSION['msg_type']= "success";

    header("location: index.php");

}


if(isset($_GET['delete'])){
    $item_id=$_GET['delete'];
    $mysqli->query("DELETE FROM product WHERE item_id=$item_id") or die($mysqli->error());
    $_SESSION['message']= "your data has been deleted!";
    $_SESSION['msg_type']= "danger";

    header("location: index.php");
}

if(isset($_GET['edit'])){
    $item_id=$_GET['edit'];
    $result= $mysqli->query("SELECT * FROM product WHERE item_id=$item_id")or die($mysqli->error());
    $update=true;
    if(count($result)==1){
        $row=$result->fetch_array();
        $name=$row['name'];
        $description=$row['description'];
        $price=$row['price'];
        $picture=$row['picture'];

    }

}

if(isset($_POST['update'])){
    $item_id=$_POST['item_id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $picture=$_POST['picture'];

    $mysqli->query("UPDATE product SET name='$name' ,description='$description', price='$price', picture='$picture' WHERE item_id=$item_id")
    or die($mysqli->error());

    $_SESSION['message']= "your data has been updated!";
    $_SESSION['msg_type']= "warning";

    header("location: index.php");
}


//
//$DBConInfo = [
//    'server' => '127.0.0.1',
//    'username' => 'root',
//    'password' => '',
//    'name' => 'test',
//];
