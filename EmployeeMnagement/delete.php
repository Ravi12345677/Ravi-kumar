<?php
include("connection.php");

$id= $_GET['id'];

$query= "DELETE FROM form1 where ID='$id'";
$data= mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>

<meta http-equiv = "refresh" content = "0; url =http://localhost/Registration_form/EmployeeMnagement/display.php" />

    <?php
}else{
    echo "failed to delete";
}
?>