<?php require_once "handlers/general.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "select * from products where product_id = '$id'";
$result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
$row = mysqli_fetch_array($result);

$name = $row['name'];
$price = $row['price'];
$description = $row['description'];
$category = $row['category'];
$brand = $row['brand'];
$qty = $row['qty'];


 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="container">
        <div class="top_bar cen">
            <h4>Edit Product Info</h4>
            <div class="icon">.
            </div>
        </div>

        <div class="product_info">
            <form action='handlers/update/update_product.php?id=<?php echo $id ?>' method='post'>
                <div class="info">
                    <label>
                        Name
                    </label>
                    <input type='text' name='name' placeholder='<?php echo $name ?>'>
                </div>
                <div class="info">
                    <label>
                        Price
                    </label>
                    <input type='text' name='price' placeholder='<?php echo "GHC".$price ?>'>
                </div>
                <div class="info">
                    <label>
                        Description
                    </label>
                    <input type='text' name='description' placeholder='<?php echo $description ?>'>
                </div>
                <div class="info">
                    <label>
                        Category
                    </label>
                    <input type='text' name='category' placeholder='<?php echo $category ?>'>
                </div>
                <div class="info">
                    <label>
                        Brand
                    </label>
                    <input type='text' name='brand' placeholder='<?php echo $brand ?>'>
                </div>
                <div class="info">
                    <label>
                        Quantity
                    </label>
                    <input type='text' name='qty' placeholder='<?php echo $qty ?>'>
                </div>
                <div class="info">
                    <label>
                        Add To Iconics
                    </label>
                    <select name='iconic' class='iconic'>
                        <option></option>
                        <option>No</option>
                        <option>Yes</option>


                    </select>
                 </div>
                <div class="info">
                    <label>
                        Image 1
                    </label>
                    <input type='file' name='image_one'>
                </div>
                <div class="info">
                    <label>
                        Image 2
                    </label>
                    <input type='file' name='image_two'>
                </div>
                <div class="submit">
                    <input type='submit' name="update" value='Update'>
                </div>
            </form>
        </div>
       
        
      
    </div>
    <script>
        function test(id){
            document.getElementById("hours").innerHTML = id;
        }
    </script>
    
</body>
</html>