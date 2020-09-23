<?php

// sledeca linija poziva klasu home i model display u koju se i poziva baza
// zakomentarisana je da ne bih 2 puta ubacivao podatke u bazu
// $home = new Home();
// $home->display();
?>
	<span>Category</span>
	<form action="<?php echo URL; ?>home/showCategory" method="post">
		<select name="category">
			<?php while ($results = $this->showCategory->fetch_array()) :?>
					<option value="<?php echo $results['category_name']; ?>"><?php echo $results['category_name']; ?></option>
			<?php endwhile; ?>
		</select>
		<input type="submit" value="Enter">
	</form>

<table border="1px" cellpadding="10" cellspacing="0" class="list">
		<thead>
			<tr class="table">
				<th>id</th>
				<th>model_number</th>
				<th>category_name</th>
				<th>deparment_name</th>
				<th>manufacturer_name</th>
				<th>upc</th>
				<th>sku</th>
				<th>regular_price</th>
				<th>sale_price</th>
				<th>description</th>
				<th>url</th>
				<th>Change</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
				<?php if (isset($this->category)): ?>
					<?php while ($cat_result = $this->category->fetch_array()) :?>
						<tr class="table-row">
							<td><?php echo $cat_result['id']; ?></td>
							<td><?php echo $cat_result['model_number']; ?></td>
							<td><?php echo $cat_result['category_name']; ?></td>
							<td><?php echo $cat_result['deparment_name']; ?></td>
							<td><?php echo $cat_result['manufacturer_name']; ?></td>
							<td><?php echo $cat_result['upc']; ?></td>
							<td><?php echo $cat_result['sku']; ?></td>
							<td><?php echo $cat_result['regular_price']; ?></td>
							<td><?php echo $cat_result['sale_price']; ?></td>
							<td><?php echo $cat_result['description']; ?></td>
							<td><a href="<?php echo $cat_result['url']; ?>"><?php echo $cat_result['url']; ?></a></td>
							<td><a href="<?php echo URL; ?>home/changeProduct/<?php echo $cat_result['id'];?>">Change</a></td>
							<td><a href="<?php echo URL; ?>home/deleteProduct/<?php echo $cat_result['id'];?>">Delete product</a></td>
						</tr>

					<?php endwhile; ?>
				<?php else: ?>
					<?php while ($result = $this->showRes->fetch_array()) :?>
						<tr class="table-row">
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['model_number']; ?></td>
							<td><?php echo $result['category_name']; ?></td>
							<td><?php echo $result['deparment_name']; ?></td>
							<td><?php echo $result['manufacturer_name']; ?></td>
							<td><?php echo $result['upc']; ?></td>
							<td><?php echo $result['sku']; ?></td>
							<td><?php echo $result['regular_price']; ?></td>
							<td><?php echo $result['sale_price']; ?></td>
							<td><?php echo $result['description']; ?></td>
							<td><a href="<?php echo $result['url']; ?>"><?php echo $result['url']; ?></a></td>
							<td><a href="<?php echo URL; ?>home/changeProduct/<?php echo $result['id'];?>">Change</a></td>
							<td><a href="<?php echo URL; ?>home/deleteProduct/<?php echo $result['id'];?>">Delete product</a></td>
						</tr>

					<?php endwhile; ?>
				<?php endif; ?>
		</tbody>
</table>