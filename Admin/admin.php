<?php
error_reporting(0);
session_start();
$username=$_SESSION['name'];
$conn= mysqliii_connect('localhost','root','','demo');
try{
if($conn)
{
	$query = "SELECT * FROM admin;";
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
  <title>CodePen - HTML5/CSS3 Shopping Cart Layout</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <div id="w">
    <header id="title">
      <h1>HTML5/CSS3 Shopping Cart UI</h1>
    </header>
    <div id="page">
      <form action="http://localhost/shlok/new2/login/cartupdate.php" method="post">
      <table id="cart">
        <thead>
          <tr>
          <th class="first">Name</th>
            <th class="first">Email</th>
            
            <th class="first">Photo</th>
            <th class="second">Qty</th>
            <th class="third">Product</th>
            <th class="fourth">Line Total</th>
            <th class="fourth">Order Id</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <!-- shopping cart contents -->
          <?php
          $i=0;
          if (mysqliii_num_rows($result) > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqliii_fetch_assoc($result)) {
              ?>
              <tr class="productitm">
                <!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                
                <td><img src="https://i.imgur.com/8goC6r6.png" class="thumb"></td>
               
                <!--<td><input type="number" name="" placeholder="<?php echo $row["quantity"];?>"</td>-->
                <td><input type="number" name="<?php echo $i;?>"  value="<?php echo $row["quantity"];?>"></td>
                <td><?php echo $row["food"];?></td>
                <td><?php echo $row["price"];?></td>
                <td><?php echo $row["orderid"];?></td>
                <td><span class="remove"><img src="https://i.imgur.com/h1ldGRr.png" alt="X" ></span></td>
              </tr>
<?php
              $_SESSION["'food'.$i"]=$row['food'];
            $i++; 
            }
        } else {
            echo "0 results";
        }
        $_SESSION['i']=$i;
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
