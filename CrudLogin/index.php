

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Login System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>
  body {
    background-image: url('./10798281_19362653.jpg');
    background-size: cover;
    opacity: 0.8; /* Set the opacity value between 0 (completely transparent) and 1 (fully opaque) */
    /* You can add more background properties here if needed */
  }
</style>

	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 style="font-weight: bolder; color: blue; text-shadow: 3px 6px 5px black;" class="display-4 text-center">CRUD Login System</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enter name">
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a  href="read.php" style="color: black;" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>