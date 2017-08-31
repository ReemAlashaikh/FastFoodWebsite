<?php include 'nav.php' ; ?>
<?php include 'shop.php' ; ?>
  <div style="text-align: center"class="main">
<link href="style.css" rel="stylesheet" type="text/css" />
    <div style="clear:both"></div>
    <h2 align ="center"> My Cart</h2>
    <table align="center" border ='1'>
    <tr>
    <th width="40%"> Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
        
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <tr>
            <td colspan="5" align="right"><center>Total: $ <?php echo number_format($total, 2); ?></center></td>
        </tr></table>
      <button class="button"><a href ="checkout.php" >Checkout </a></button></div>
        <?php
	}
    
	?>
