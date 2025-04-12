<?php
$time_now=mktime(date('h')+3,date('i')+30,date('s'));
$tdate=date('d/m/Y',$time_now);
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
    $query="Select * from booking Where date='$tdate'";
    $result=mysqliii_query($conn,$query);
}
else
{
    echo 'connection is failed';
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
      <table id="cart" border="1">
        <thead>
          <tr>
          <th class="first">Date</th>
            <th class="first">Time</th>
            
            <th class="first">Table NO.</th>
            <th class="second">Name</th>
            <th class="third">Phone</th>
            <th class="fourth">Email</th>
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
                <td><?php echo $row["date"];?></td>
                <td><?php echo $row["time"];?></td>
                <td><?php echo $row["people"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["email"];?></td>
              </tr>
<?php
        
            }
        } else {
            echo "0 results";
        }
        ?>

        
        </tbody>
      </table>
      </form>
    </div>
  </div>
</body>
</html>
