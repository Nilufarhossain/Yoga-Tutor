
<div class="container"><br>
	<?php if(isset($_SESSION['notice'])): ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<?php if(isset($_SESSION['notice'])){echo $_SESSION['notice']; unset($_SESSION['notice']);} ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif;?>
	<div class="row"> 
		<div class="col-md-12">  
			<table id="example" class="table table-striped table-bordered"> 
				<caption style="caption-side: top;"><h3>Book</h3></caption>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Cover</th>
						<th scope="col">Name</th>
						<th scope="col">Author</th>
						<th scope="col">Quantity</th>
						<th scope="col">Stock</th>
						<th scope="col">Date</th>  
					</tr>
				</thead>
				<?php if(!empty($books)):?>
				<tbody>
				<?php $i=1; foreach($books as $book):?>
					<tr>
						<th scope="row"><?php echo $i; ?></th>
						<td><img src="<?php echo $root_url.'/asset/book/'.$book['image']?>" class="img-fluid rounded-circle" style="height: 80px;" alt="Book Cover Photo"></td>
						<td><?php echo $book['name']; ?></td>
						<td><?php echo $book['author']; ?></td>
						<td><?php echo $book['quantity']; ?></td>
						<td><?php echo $book['stock']; ?></td>
						<td><?php echo $book['created_at']; ?></td> 
					</tr> 
				<?php $i++; endforeach; ?>
				</tbody> 
				<?php endif; ?>
			</table>
		</div>  
	</div>
</div>

 