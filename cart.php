<?php 
include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" type="text/css">
	<title>cart</title>
</head>
<body>
	<div class="container" >
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>My Cart</h1>
			</div>
			<!-- table -->

			<div class="col-lg-9" c>

				<table class="table">
					<thead class="text-center">
						
						<tr>
							<th scope="col">Serial No. </th>
							<th scope="col">Name </th>
							<th scope="col">Price </th>
							<th scope="col">Quantity</th>							 
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody class="text-center" >
						
						<?php
						  $total=0;
						  if (isset($_SESSION['cart'])) {
							  foreach ($_SESSION['cart'] as $key=>$value) {
								  $total=$total+($value['price'] * $value['Quantity']);
								  $key=$key+1;
								  echo "<tr>
										      <td>$key</td>
										      <td>$value[name]</td>
										      <td>$value[price]Ks</td>
										      <form action='manage_cart.php' method='post'>
                            <td><input type='number' min='1' max='10' value='$value[Quantity]' name='updatequan'></td>
                            <td><button class='btn btn-sm  btn-outline-dark' name='update' style='margin-top: -1px;'>UPDATE</button></td>
											      <td><button class='btn btn-sm btn-outline-danger' name='remove' style='margin-top: -1px;'>REMOVE</button></td>
											      <input type='hidden' name='name' value='$value[name]'>
										      </form>
									      </tr>";	
							  }
						  }
						?>

					</tbody>
				</table>
			</div>
			<div class="col-lg-3">
				<div class="border bg-light rounded text-center p-4">
					<h4 >Total</h4>
					<h5 ><?php echo $total ; ?>Ks</h5>
					<form>
						<a href="checkout.php" class="btn btn-outline-success btn-block">CHECKOUT</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>