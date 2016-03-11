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
		<a href="/Wishlists/dashboard" class="btn btn-primary btn-sm">Home</a>

		<h1>Create a New Wish List Item:</h1>
		<form class="form-horizontal" role="form" action="/Wishlists/create" method="POST">
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Item:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="item" name="item" placeholder="Enter an item...">
		    </div>
		  </div>
	        <div class="form-group">        
	          <div class="col-sm-offset-2 col-sm-10">
	            <button type="submit" class="btn btn-info">Create</button>
	          </div>
	        </div>
	</div>
</body>
</html>