<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Customer</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: latha;
            color: white;
            background: url(pic2.jpg);
            background-size: cover;

        }

        form,
        input[type="button"]:hover {
            background-color: orange;
        }

    </style>
</head>

<body>



    <input type="text" id="search" placeholder="Search food by name" class="food-search"> &nbsp;&nbsp;

    <input class="ssearch" type="submit" name="submit" value="Search">

    <br><br>

    <div class="navbar">
        <!--<div class="dropdown">
            <button class="dropbtn">Profile Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">-->
               <!-- <a href="CustomerProfileUpdate.php">Profile Update</a>
                
            </div>
        </div>

-->
        <!--    <div class="dropdown">
                   <button class="dropbtn">Menu 
                    <i class="fa fa-caret-down"></i>
                   </button>
                   <div class="dropdown-content">
                     <a href="#">Fried Rice with BBQ Chicken</a>
                     <a href="#">Steak with Mash Potato</a>
                     <a href="#">Crispy Chicken with Fried Rice </a>
                     <a href="#">Grilled Chicken</a>
                     <a href="#">BBQ Chicken Wings </a>
                     <a href="#">Crispy Chicken Wings</a>
                     <a href="#">Chicken Chowmin</a>
                     <a href="#">Egg Noodles</a>
                     <a href="#">Thai Soup & Wonthon</a>
                     <a href="#">Corn Soup</a>

                   </div>
                 </div>
	
    		  -->

              
        <a href="CustomerProfileUpdate.php">Profile Update</a>
        <a href="menu.php">Menu</a>

        <a href="shoppingCart.php">Shopping Cart</a>


        <div class="dropdown">
            <button class="dropbtn">Order History
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Order History 1</a>
                <a href="#">Order History 2</a>
                <a href="#">Order History 3</a>
            </div>
        </div>


        <div class="dropdown">
            <button class="dropbtn">Order Cancel
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Order Cancel 1</a>
                <a href="#">Order Cancel 2</a>
                <a href="#">Order Cancel 3</a>
            </div>
        </div>
        <a href="CustomerRating.php">Customer Rating</a>

        <a href="index.php">Sign Out</a>

    </div>

   <div class="wd">
        <h1>Food Details</h1><br>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Food</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>

            <tbody id="output">

            </tbody>
        </table>
    </div>

<script type="text/javascript">
        $(document).ready(function() {
            $("#search").keypress(function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });

    </script>

</body>
<div class="footer">
 <br><p>Copyright@2021_Restaurant_Management_System</p>
</div>

</html>
