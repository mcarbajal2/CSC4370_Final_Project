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
		<form>
		<table align = "center" cellspacing = "15">
		<tr><td class = "products" id = "textbooks"><img src = "textbooks.png">Textbooks - $600</td>
			<td class = "products" id = "notes"><img src = "notes.png">Prev. Semester Notes - $15</td>
			<td class = "products"><img src = "diploma.png">Diploma - $40000</td></tr>
		<tr><td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td></tr>
		<tr><td class = "products"><img src = "laptop.png">Laptop - $1000</td>
			<td class = "products"><img src = "pizza.png">Pizza - $20</td>
			<td class = "products" id = "scholarship"><img src = "money.png">Scholarship - $0</td></tr>
		<tr><td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td>
			<td class = "select_options"><select><option value = "val1">Val1</option><option value = "val2">Val2</option></select></td></tr>
		</table>
		<center><input type = "submit" value = "Update Cart"></center>
		</form>
	</div>
	<p><a href = "menu.php" align = >Back to menu</a></p>
</body>
</html>