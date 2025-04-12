<?php
// error_reporting(0);
session_start();
$username=$_SESSION['name'];
$conn= mysqliii_connect('localhost','root','','demo');

try{
if($conn)
{
	$query = "SELECT * FROM $username;";
  // FETCHING DATA FROM DATABASE
  $result = mysqliii_query($conn, $query);
  
}
else
{
	echo 'connection is failed';
}
}
catch(Exception $e)
{
    echo $e;
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <link rel="stylesheet" href="cart.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <div id="w">
    <header id="title">
      <h1>MY CART</h1>
    </header>
    <div id="page">
      <form action="http://localhost/shlok/new2/login/cartupdate.php" method="post">
      <table id="cart">
        <thead>
          <tr>
            <th class="first">Photo</th>
            <th class="second">Qty</th>
            <th class="third">Product</th>
            <th class="fourth">Line Total</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <!-- shopping cart contents -->
          <?php
          $i=0;
          $total=0;
          if (mysqliii_num_rows($result) > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqliii_fetch_assoc($result)) {
                     
        $line_total = $row["quantity"] * $row["price"];
        $total += $line_total;
              
              ?>
              <tr class="productitm">
                <!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->
                <td><img src="https://dairyfarmersofcanada.ca/sites/default/files/styles/recipe_image/public/image_file_browser/conso_recipe/2022/Capuccino.jpg.jpeg?itok=J1pWPwe2" class="thumb"></td>
                
                <td><?php echo $row["quantity"];?></td>
                <td><?php echo $row["food"];?></td>
                <td><?php $line_total = $row["quantity"] * $row["price"]; echo $line_total;?></td>
                <td><span class="remove"><img src="https://i.imgur.com/h1ldGRr.png" alt="X" ></span></td>
              </tr>
<?php
             // $_SESSION["$i"]=$row['quantity'];
             // $_SESSION["'food'.$i"]=$row['food'];
            $i++; 
            }
        } 
        else {
            echo "0 results";
        }
        //$_SESSION['i']=$i;
        function hello() {
          echo "Hello";
      }
     /* function remove($string) {
        $query = "SELECT * FROM cart;";
        // FETCHING DATA FROM DATABASE
        $result = mysqliii_query($conn, $query);
        while($row = mysqliii_fetch_assoc($result)) {
          if($name==$row["food"])
          {
              $count=$row["quantity"];
              $count--;
              $query = "UPDATE cart SET quantity = '$count' WHERE food = '$name';" ;
              mysqliii_query($conn,$query);
          }
      }
      return 0;
    }*/
        ?>
 <tr class="totalprice">
                    <td colspan="3" class="light">Total:</td>
                    <td colspan="2" class="light"><?php echo $total; ?></td>
                </tr>
        
          
          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout"><button type="submit" id="submitbtn">Checkout Now!</button></td>
          </tr>
        </tbody>
      </table>
      </form>
    </div>
  </div>
</body>
<!-- partial -->
  
</body>
</html>
