
<?php include '../include/cheader.php';?>

<html>
    <head>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <center><a href="add.php"><button>Add Employee</button></a><br><br><br>
        <h4>List of Employees and their details</h4><br>
    </body>
</html>
<?php
$con = mysqli_connect("localhost","root","","task") or die(mysqli_error($con));
session_start();
$query = "select * from employee";
$result = mysqli_query($con,$query);?>
<table border="1" cellpadding="10">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email-id</th>
        <th>Phone Number</th>
        <th>Department</th>
        <th>Date of Joining</th>
        <th>Task</th>
    </tr>
<?php if(mysqli_num_rows($result)>0){ 
    while($row = mysqli_fetch_array($result)){?>
       
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['dept'];?></td>
            <td><?php echo $row['joining'];?></td>
            <td><?php echo "<a href='#'> View </a>"?></td>
        </tr>
</table>
    <?php }
}
else{
    echo "Looks like there are no employees!"; 
}
?>
</center>