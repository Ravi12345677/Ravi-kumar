<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="title">
            REGISTRATION FORM
        </div>
        <div class="form">

            <div class="input_field">
                <label>Upload Image</label>
                <input type="file" name="uploadfile" style="width:100%;">
            </div>


            <div class="input_field">
                <label>First Name</label>
                <input type="test" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="test" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="test" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label style="margin-right: 100px;">Caste</label>
                <input type="radio" name="r1" value="General" required><label style="margin-left: 5px;">General</label>
                <input type="radio" name="r1" value="SC" required><label style="margin-left: 5px;">SC</label>
                <input type="radio" name="r1" value="OBC" required><label style="margin-left: 5px;">OBC</label>
                <input type="radio" name="r1" value="ST" required><label style="margin-left: 5px;">ST</label>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field">
                <label>Salary</label>
                <input type="text" class="input" name="salary" required>
            </div>

            <div class="input_field">
                <label>Work Place</label>
                <input type="text" class="input" name="work" required>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
   if(isset($_POST['register']))
    {
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "image/".$filename;
        move_uploaded_file($tempname, $folder);
        
        $fname    =$_POST['fname'];
        $lname    =$_POST['lname'];
        $pwd      =$_POST['password'];
        $cpwd     =$_POST['conpassword'];
        $gender   =$_POST['gender'];
        $email    =$_POST['email'];
        $phone    =$_POST['phone'];
        $caste    =$_POST['r1'];
        $address  =$_POST['address'];
        $salary   =$_POST['salary'];
        $work     =$_POST['work'];

        //if($fname!="" && $lname!="" && $pwd!="" && $cpwd!="" && $gender!="" && $email!="" && $phone!="" && $address!="")
        //{

        $query = "INSERT INTO form1(img_source,fname,lname,password,cpassword,gender,email,phone,caste,address,salary,work) VALUES('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$address','$salary','$work')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "Failed";
        }
    //}
    //else    
    //{
       // echo "<script>alert('Fill the form first');</script>";
    //}
    }
?>
