<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Your Pizza</title>
   <!-- here css link is added-->
    <link rel="stylesheet" href="./css/style.css">
    

   

</head>
<body>
 <header>
        <div>
       
          <a href="index.php"><img src="./img/pizza-logo.png" alt="pizza logo"></a>
        </div>      
        <div class="navbar-collapse" id="navbarContent">
    <ul class="navbar-list">
        <li class="nav-item"><a class="nav-link " aria-current="page" href="#"> Home</a></li>
        <li class="nav-item"><a class="nav-link" href="view.php"> View</a></li>
    </ul>
</div>

      </header>

    <main class="main order-pizza">
        <form action="#" method="post" class="pizza-form">
            <div class="contact">
                <label for="name">Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
<!--here phone information is added-->
            <div class="contact">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number" pattern="[0-9]{10}" 
                       title=" enter a 10-digit phone number ">
            </div>
            
            <div class="contact">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- this is dilevery details section -->
            <div class="deliverydetails">
                <label for="address_">Delivery Address:</label>
                <input type="text" id="address_" name="address_" required>
            </div>

            <!--  this is Pizza customization part-->
            <div class="pizzadesign">
                <label for="pizza-size">Pizza Size:</label>
                <select id="pizza_size" name="pizza_size" required>
                    <option value="" disabled selected>Select Size</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                
            </div>
          

            <div class="pizzadesign">
                <h3>Choose Your Crust Type:</h3><!-- Radio buttons for selecting the pizza crust type -->
                <label><input type="radio" name="crust" value="thin" required> Thin Crust</label>
                <label><input type="radio" name="crust" value="thick" required> Thick Crust</label>
                <label><input type="radio" name="crust" value="stuffed" required> Stuffed Crust</label>
                <label><input type="radio" name="crust" value="Neapolitan" required> NeapolitanCrust</label>
                <label><input type="radio" name="crust" value="Sicilian " required> Sicilian Crust</label>
               
            </div>

        <!-- select the  Vegetarian topping -->
        <div class=" vegetarian topings">
            <h3> Choose your vegetarian topings here</h3>
            <label><input type="checkbox" name="toppings" value="Cheese"> Cheese</label>
            <label><input type="checkbox" name="toppings" value="Sauteed mushrooms"> Sauteed mushrooms</label>
            <label><input type="checkbox" name="toppings" value="Broccoli"> Broccoli</label>
            <label><input type="checkbox" name="toppings" value="peppers"> Peppers</label>
            <label><input type="checkbox" name="toppings" value="onion"> onion</label>
            <h3> Choose your non-vegetarian topings here</h3>
            <label><input type="checkbox" name="toppings" value="Ham"> Ham</label>
            <label><input type="checkbox" name="toppings" value="Beef">Beef</label>
            <label><input type="checkbox" name="toppings" value="Pepperoni"> Pepperoni</label>
            <label><input type="checkbox" name="toppings" value="Sausage">Sausage</label>
            <label><input type="checkbox" name="toppings" value="Bacon"> Bacon</label>
        </div>

<!-- select the pizza sauce -->
        <div class="pizza sauce">
            <h3>Choose your Pizza Sauce here:</h3>
            <label><input type="radio" name="sauce" value="Pepper" required>Pepper Sauce</label>
            <label><input type="radio" name="sauce" value="Sweet Pizza" required> Sweet Pizza Sauce</label>
            <label><input type="radio" name="sauce" value="tomato" required> tomato Sauce</label>
            <label><input type="radio" name="sauce" value="Pesto" required>Pesto Sauce</label>
            <label><input type="radio" name="sauce" value="Béchamel" required>Béchamel Sauce</label>
        </div>

          
        
             <!-- Preferred delivery time -->
            <div class="submitbutton">
                <input type="submit" value="Place Order" class="submit-button">
            </div>
        </form>

      
    </main>

 <!--this code helps submission -->
    <div class="form-group submit-message">
           <?php
					 	
						 require_once ('database.php');
						 if(isset($_POST) & !empty($_POST)){
						  $fullname = $database->sanitize($_POST['fullname']);
				          $phone = $database->sanitize($_POST['phone']);
						  $email = $database->sanitize($_POST['email']);
                          $address_ = $database->sanitize($_POST['address_']);
                          $pizza_size = $database->sanitize($_POST['pizza_size']);
                          $crust = $database->sanitize($_POST['crust']);
                          $toppings = $database->sanitize($_POST['toppings']);
                          $sauce = $database->sanitize($_POST['sauce']);
                           // Create a record in the database
						  $res = $database->create($fullname,$phone,$email,$address_,$pizza_size,$crust,$toppings,$sauce);
						  if ($res){
							  echo "<p>Record created</p>";
						  }
						  else{
						  echo "<p>record is not added</p>";
						  }
						 }
                      

					 ?>
        </div>


    <footer class="footer">
        
        <div class="footerinfo">
          <h4>About Us</h4>
          <ul>
            <li>FAQ</li>
            <li> Media & community</li>
            <li> food wiki </li>
          </ul>

        </div>
        
        <div class="footersocial">
          <h4>Follow Us</h4>
          <ul>
            <!--Icons for connecting with social media-->
            

            <li><a href="#"><img src="./img/Facebook-logo.png" alt="Facebook"></a></li>
            <li><a href="#"><img src="./img/instagram.jpg" alt="Instagram"></a></li>
            <li><a href="#"><img src="./img/twiiter.png" alt="Twitter"></a></li>

          </ul>
        </div>
      </footer>
</body>
</html>
