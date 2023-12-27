<!--fetch the data from database and display it in form of table.-->

<?php
if(isset($_POST["fread"]))
{
 $host="localhost";
 $username="form_user";
 $dbname="contact_data";
 $password="xyz123";

 //create connection
 $con=mysqli_connect($host,$username,$password,$dbname);

 //check connection whether it is working or not
 if(!$con)
 {
     die("connection failed-".mysqli_connect_error());
 }

 $sql1 = "select * from user_entries";
 $result = $con->query($sql1);
}
?>

<!Doctype html>
<html>
<body>
<table border="2px solid black">
 <thead>
    <tr>
        <th>ID</th>
        <th>Name></th>
        <th>Email ID</th>
        <th>Message</th>
    </tr>
</thead>
<tbody>
 <?php
while($row=$result->fetch_object())
{
    echo '<table border="2px solid black">';
    echo '<tr>';
    echo '<td>'.$row->id.'</td>';
    echo '<td>'.$row->Name_fd.'</td>';
    echo '<td>'.$row->Email_fd.'</td>';
    echo '<td>'.$row->Message_fd.'</td>';
    echo '</tr>';
    echo '</table>';
}
 ?>
</tbody>
</table>
</body>
</html>