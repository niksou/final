<?php
include 'header.php';

?>
<?php
$name='';
$description='';
$price=0;
$picture='';
$update=false;
$item_id=0;
?>
<html>
<head>
    <title>My SQL Shop</title>
    <script src="htpps://code.jquerry.com/jquerry-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
<?php require_once 'process.php';?>

<?php
if(isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);

    ?>

</div>
<?php endif ?>


<div class="container">
<?php
$mysqli = new mysqli('localhost','root','','test') or die($mysqli->error);
$result = $mysqli->query ("SELECT * FROM product") or die($mysqli->error);

?>

<div class="row justify-content-center">
    <table class="table">
       <thread>
           <tr>
               <th>GUN-Name</th>
               <th>Description</th>
               <th>Price</th>
               <th>Picture</th>
               <th colspan="4">Action</th>
           </tr>
       </thread>
        <?php
            while($row=$result->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['picture'];?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['item_id'];?>"
                   class="btn btn-info">Edit</a>
                <a href ="process.php?delete=<?php echo $row['item_id'];?>"
                   class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</div>

<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>



<div class ="row justify-content-center">
<form action ="process.php" method="POST">
    <h1>Add new item</h1>
    <input type="hidden" name="item_id" value="<?php echo $item_id ?>">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"
           value="<?php echo $name;?>" placeholder="Enter gun name : ">
    </div>

    <div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control"
           value="<?php echo $description; ?>" placeholder="Enter description :">
    </div>

    <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control"
           value="<?php echo $price; ?>" placeholder="Enter item price :">
    </div>

    <div class="form-group">
    <label>Image</label>
    <input type="text" name="picture" class="form-control"
           value="<?php echo $picture; ?>" placeholder="Enter image url :">
    </div>

    <div class="form-group">
        <?php
            if($update == true):
        ?>
        <button type="submit" name="update" class="btn btn-info">Update</button>
        <?php else: ?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
        <?php endif; ?>
    </div>
</form>
</div>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
</div>
<?php include 'footer.php';?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update product</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Gun name</label>
                    <input type ="text" id="name" class="form-control">
                 </div>
                <div class="form-group">
                    <label>description</label>
                    <input type ="text" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input type ="number" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type ="text" id="picture" class="form-control">
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">update</button>
            </div>
        </div>

    </div>
</div>
</body>

</html>



<?php
$DBConInfo = [
  'server' =>'127.0.0.1',
    'username' =>'root',
    'password'=> '',
    'name' => 'test',
];







//include 'footer.php';









?>
