<html>
    <head>
        <title>new</title>
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



//echo $total;

if($total!=0)
{
   ?>

    <h2 align="center"><mark>EMPLOYEE RECORD</mark></h2>
    <center>
   <table border="1px" cellspacing="7" width="100%">
    <tr>
    <!-- <th>Image</th> -->
    <th width="10%">FIRST NAME</th>
    <th width="10%">LAST NAME</th>
    <th width="10%">PHONE</th>
    <th width="20%">ADDRESS</th>
    <th width="10%">Work Place</th>
    </tr>


   <?php

   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>         
            <td>".$result['phone']."</td>         
            <td>".$result['address']."</td>          
            <td>".$result['work']."</td>  
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
