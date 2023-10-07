<?php
	
	require_once ('database.php');
	 //  'read' method is used to read the database 
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Your Pizza</title>
	<meta name="description" content="This week we will be using OOP PHP to create our CRUD application">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <!-- here css link is added-->
	<link rel="stylesheet" href="./css/style.css">

</head>
<body>
<header>
        <div>
	
          <a href="index.php"><img src="./img/pizza-logo.png" alt="pizza logo"></a>
        </div>      
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
      </header>





<!-- table is displayed where data is stored-->
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>phone</th>
				<th>email</th>
                <th>address</th>
                <th>pizza_size</th>
                <th>crust</th>
                <th>toppings</th>
                <th>sauce</th>

			</tr>
			<?php
				
           while($r = mysqli_fetch_assoc($res)){
			?>
			<tr><!--  data is displayed from the database -->
				<td> <?php echo $r['id']; ?></td>
				<td> <?php echo $r['fullname']; ?></td>
				<td> <?php echo $r['phone']; ?></td>
				<td> <?php echo $r['email']; ?></td>
                <td> <?php echo $r['address_']; ?></td>
                <td> <?php echo $r['pizza_size']; ?></td>
				<td> <?php echo $r['crust']; ?></td>
                <td> <?php echo $r['toppings']; ?></td>
                <td> <?php echo $r['sauce']; ?></td>
				
			</tr>
			<?php
		   }

			?>
		</table>
	</div>
</div>
</body>
</html>