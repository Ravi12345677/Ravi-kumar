
<?php
include("connection.php");

$query = "SELECT * FROM FORM1";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

echo $total;

if($data)
        {
            //echo "<script>alert('Record Updated')</script>";
            ?>

            <meta http-equiv = "refresh" content = "0; url =C:\xampp\htdocs\Registration_Form\EmployeeMnagement\index.php" />

            <?php
        }
        else
        {
            //echo "Failed to update";
        }

?>