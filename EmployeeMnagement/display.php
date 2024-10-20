<html>
    <head>
        <title>Display</title>
        <style>
            body{
               background:#D071f9; 
            }
            table
            {
                background-color: white;
            }
            .update, .delete{
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 25px;
                width: 80px;
                font-weight:bold ;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            }
        </style>
    </head>



<?php
include("connection.php");

$query = "SELECT * FROM FORM1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);



echo $total;

if($total!=0)
{
   ?>

    <h2 align="center"><mark>EMPLOYEE RECORD</mark></h2>
    <center>
   <table border="1px" cellspacing="7" width="100%">
    <tr>
    <th width="5%">ID</th>
    <th width="5%">IMAGE</th>
    <th width="10%">FIRST NAME</th>
    <th width="10%">LAST NAME</th>
    <th width="10%">GENDER</th>
    <th width="20%">EMAIL</th>
    <th width="10%">PHONE</th>
    <th width="10%">CASTE</th>
    <th width="20%">ADDRESS</th>
    <th width="10%">SALARY</th>
    <th width="10%">Work Place</th>
    <th width="15%">Operations</th>
    </tr>


   <?php

   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            <td>".$result['ID']."</td>
            <td><img src='".$result['img_source']."' height='50px' width='70px'></td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['caste']."</td>
            <td>".$result['address']."</td>
            <td>".$result['salary']."</td>
            <td>".$result['work']."</td>

            <td><a href='update_design.php?id=$result[ID]'><input
                type='Submit' value='Update' class='update'></a>
            
            <a href='delete.php?id=$result[ID]'><input
                type='Submit' value='Delete' class='delete' onclick = 'return check_delete()'></a></td>

        </tr>
        ";
   }
}
else
{
    echo "No records found";
}
?>
</table>
</center>

<script>
    function check_delete()
    {
        return confirm('Are you sure your want to delete this record ?');
    }
</script>


</html>
