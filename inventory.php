<?php

session_start(); 
$connect = mysqli_connect("localhost", "vbarot1", "vbarot1", "vbarot1"); 
//include("configure.php");
if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="checkout.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
?>

<!DOCTYPE html>
<html>
<head>
	<link href="finalproj.css" type="text/css"rel = "stylesheet"/>
	<title>Inventory - ProwlShop.com</title>
</head>
<body>
	<div id = "inventory">
		<h1>Inventory Selection</h1><hr style = "width: 70%">
		<h4 style = "text-decoration: underline">prowlshop.com</h4>
	</div>
	<div id = "inventory_body">
	<?php  
		$query = "SELECT * FROM INVENTORY ORDER BY id ASC";  
		$result = mysqli_query($connect, $query);  
		if(mysqli_num_rows($result) > 0) {  
			while($row = mysqli_fetch_array($result))  
		{  
    ?>  
	<form method = "post" action = "index.php?action=add&id=<?php echo $row["id"];?>">
		<h4 class = "text-info"><?php echo $row["product"]; ?></h4>  
		<h4 class = "text-danger">$ <?php echo $row["price"]; ?></h4>  
		<input type = "text" name = "quantity" value = "1" />  
		<input type = "text" name = "quantity" class = "form-control" value = "1" />  
		<input type = "hidden" name = "hidden_product" value = "<?php echo $row["product"]; ?>" />  
		<input type = "hidden" name = "hidden_price" value = "<?php echo $row["price"]; ?>" />  
		<input type = "submit" name = "add_to_cart" style = "margin-top:5px;" value = "add" />
		
		<!--<table align = "center" cellspacing = "15">
		<tr><td class = "products" id = "1"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/backpack.png">Backpack - $5</td>
			<td class = "products" id = "2"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/notes.png">Prev. Semester Notes - $10</td>
			<td class = "products" id = "3"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/diploma.png">Diploma - $5000</td>
		</tr>
		<tr><td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
		</tr>
		<tr><td class = "products" id = "4"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/laptop.png">Laptop - $800</td>
			<td class = "products" id = "5"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/pizza.png">Pizza - $25</td>
			<td class = "products" id = "6"><img src = "http://codd.cs.gsu.edu/~mcarbajal2/final/images/money.png">Scholarship - $1000</td></tr>
		<tr><td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "input_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
		</tr>
		</table>
		<center><input type = "submit" value = "Update Cart"></center>-->
		</form>
	</div>
	<p><a href = "menu.php" align = >Back to menu</a></p>
</body>
</html>