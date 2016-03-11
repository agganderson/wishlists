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
		<a href="/Wishlists/dashboard" class="btn btn-primary btn-sm">Home</a>
		<a href="/Wishlists/logout" class="btn btn-default btn-sm">Logout</a>

		<h1><?= $product['item'] ?></h1>
		<div id="added_by">
			<p>Users who added this product to their wishlist:</p>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>User:</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      </tr>
			    </tbody>
			  </table>
		</div>
	</div>
</body>
</html>