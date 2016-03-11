<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Wishlist</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
  </script>

</head>
<body>
	<div class="container">
		<br>
		<a href="/Wishlists/logout" class="btn btn-default btn-sm">Logout</a>  
		<h1>Hello, <?= $user['name'] ?></h1>
		<div id="wishlist">
			<p>Your Wish List:</p>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Item:</th>
			        <th>Added By:</th>
			        <th>Date Added:</th>
			        <th>Actions:</th>
			      </tr>
			    </thead>
			    <?php foreach($products as $product){ ?>
			    <tbody>
			      <tr>
			        <td><a href="/Wishlists/product_page/<?= $product['id'] ?>"><?= $product['item'] ?></a></td>
			        <td><?= $user['name'] ?></td>
			        <td><?= $product['created_at'] ?></td>
			        <td><a href="/Wishlists/delete/<?= $product['id'] ?>">Remove from my wishlist</a></td>
			      </tr>
			    </tbody>
			    <?php } ?>
			  </table>
		</div>

		<div id="other_wishlist">
			<p>Other User's Wish List:</p>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Item:</th>
			        <th>Added By:</th>
			        <th>Date Added:</th>
			        <th>Actions:</th>
			      </tr>
			    </thead>
			    <?php foreach($other_products as $other){ ?>
			    <tbody>
			      <tr>
			        <td><a href="/Wishlists/product_page/<?= $product['id'] ?>"><?= $other['item'] ?></a></td>
			        <td><?= $other['name'] ?></td>
			        <td><?= $other['created_at'] ?></td>
			        <td><a href="/Wishlists/add_to_wishlist/<?= $product['id'] ?>">Add to my wishlist</a></td>
			      </tr>
			    </tbody>
			    <?php } ?>
			  </table>
		</div>

		<a href="/Wishlists/create_page" class="btn btn-success btn-sm">Add Item</a>
	</div>
</body>
</html>