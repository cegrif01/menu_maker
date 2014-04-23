<html>

	<h1>Make Your Menu Here</h1>
	
	<form action = "bootstrapper.php" method="POST">
		
		<div id="menu-item-0">
			<label>Menu Item</label>
			<input name = "menu[0][item]" type = "text"></input>

			<label>Menu Description</label>
			<input name = "menu[0][menu_description]" type = "text"></input>

			<label>Menu Price</label>
			<input name = "menu[0][price]" type = "text"></input>
		</div>
		<br />
		<div id="menu-item-1">
			<label>Menu Item</label>
			<input name = "menu[1][item]" type = "text"></input>

			<label>Menu Description</label>
			<input name = "menu[1][menu_description]" type = "text"></input>

			<label>Menu Price</label>
			<input name = "menu[1][price]" type = "text"></input>
		</div>

		<div>
			<input type="checkbox" name="export_option[0]" value="csv">Csv File<br>
			<input type="checkbox" name="export_option[1]" value="html">HTML File
		</div>

		<button type="submit">Make Menu</button>
	</form>
</html>
