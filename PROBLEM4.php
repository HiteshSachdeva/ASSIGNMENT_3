<?phP
$hostname="localhost";
$username="root";
$password="";
$databasename="WEB";

$conn = mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
    echo "connection successful";
}
else{
    echo "connection failed " +mysqli_connect_error();
}
?>
<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
echo "<font size = '7'>";
echo nl2br("\n Users Table Data");
            echo "</font>";
{?>
    <table border="2px">
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>E-MAIL</th>
                <th>GENDER</th>
                <th>CITY</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_array($result))
        {   ?>
            <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['USERNAME']?></td>
                <td><?php echo $row['EMAIL']?></td>
                <td><?php echo $row['GENDER']?></td>
                <td><?php echo $row['CITY']?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
<?php
}
?>

<html>
    <head>
        <title> user details </title>
    </head>
    <body>
    </body>
</html>