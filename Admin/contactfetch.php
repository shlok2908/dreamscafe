<?php
// error_reporting(0);
$conn= mysqliii_connect('localhost','root','','demo');

try{
if($conn)
{
	$query = "SELECT * FROM message;";
  // FETCHING DATA FROM DATABASE
  $result = mysqliii_query($conn, $query);
  if (mysqliii_num_rows($result) > 0) {
    // OUTPUT DATA OF EACH ROW
    ?><table border="1">
        <tr>
                <th>Name</th> 
                <th>email</th> 
                <th>phone</th>             
                <th>message</th> 
              </tr>
      <?php
    while($row = mysqliii_fetch_assoc($result)) {
      ?><tr>
                <td><?php echo $row["name"];?></td> 
                <td><?php echo $row["email"];?></td> 
                <td><?php echo $row["phone"];?></td>             
                <td><?php echo $row["message"];?></td> 
              </tr>
    <?php
    }?>
    </table><?php
  }

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
