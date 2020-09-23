<div class="edit" style="margin-top: 56px;">
	<a href="<?php echo URL; ?>">Back</a>
	<h1>Enter new values</h1>
	<form action="<?php echo URL; ?>home/saveEdit/<?php echo $this->change['id']; ?>" method="post">
			<label>Model</label>
			<input type="text" name="model_number" placeholder="<?php echo $this->change['model_number']; ?>">
			<br>
			<label>Category name</label>
			<input type="text" name="category_name" placeholder="<?php echo $this->change['category_name']; ?>">
			<br>
			<label>Deparment name</label>
			<input type="text" name="deparment_name" placeholder="<?php echo $this->change['deparment_name']; ?>">
			<br>
			<label>Manufacturer name</label>
			<input type="text" name="manufacturer_name" placeholder="<?php echo $this->change['manufacturer_name']; ?>">
			<br>
			<label>UPC</label>
			<input type="text" name="upc" placeholder="<?php echo $this->change['upc']; ?>">
			<br>
			<label>SKU</label>
			<input type="text" name="sku" placeholder="<?php echo $this->change['sku']; ?>">
			<br>
			<label>Regular price</label>
			<input type="text" name="regular_price" placeholder="<?php echo $this->change['regular_price']; ?>">
			<br>
			<label>Sale price</label>
			<input type="text" name="sale_price" placeholder="<?php echo $this->change['sale_price']; ?>">
			<br>
			<label>Description</label>
			<input type="text" name="description" placeholder="<?php echo $this->change['description']; ?>">
			<br>
			<input type="submit" value="Submit">

	</form>
</div>