<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "menu");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> Food</title>
<link href="style.css" rel="stylesheet" type="text/css" />
  <?php include 'nav.php'; ?>

</head>
<body>
    <center>
<div class="container" style="width:60%;">
    
	<h2 align="center">BEST FOOD EVER!</h2>
    <?php
    error_reporting( error_reporting() & ~E_NOTICE );
	$query = "SELECT * FROM food ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
            <div class="col-md-4">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="<?php echo $row["pic"]; ?>" class="img-responsive">
            <h3 class="text-info"><?php echo $row["name"]; ?></h3>
            <h5 class="text-info"><?php echo $row["description"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1"><br>
                                            <?php  if($_SESSION['username']=="admin"){echo"<tr>
				  <a style='color:black;' href='EditIteme.php?item_id=".$row["id"]."' >Edit</a>
				  <a style='color:black;' href='DeleteItem.php?item_id=".$row["id"]."' >Delete</a> ";}
                ;?>
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="button" value="Add to Cart" >
            </div>
            </form>
            </div>
            <?php
		}
	}
	?>
    </div>
    </center>
 </body>
</html>
