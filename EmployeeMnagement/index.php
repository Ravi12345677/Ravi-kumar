<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f9f109a3d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css.css">
    <title>Employee</title>
</head>
<body>
    <nav>
        <div class="left-nav">
            <h2><img src="image/WhatsApp Image rk.jpg"><div class="rk">Ravi_Kumar</div></h2>
        </div>
        <div class="midel-nav">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="right-nav">
            <img src="image/WhatsApp Image rk.jpg">
        </div>
    </nav> 
    <div class="container">
        <div class="left-side">
            <ul>
                <li><i class="fa-sharp fa-solid fa-house"></i><a href="About.php">Home</a></li>
                <li><i class="fa-solid fa-bars"></i><a href="">Dashboard</a></li>
                <li><i class="fa-solid fa-person-digging"></i><a href="display.php">Employee</a></li>
                <li><i class="fa-sharp fa-solid fa-location-dot"></i><a href="registration.php">ADD Employee</a></li>
                <li><i class="fa-sharp fa-solid fa-gear"></i><a href="">Setting</a></li>
            </ul>   
        </div>
      <div class="min-container">
        <div class="right-side">
            <div class="top-content">
             <div class="ditels">
                 <h3>Total_Employee</h3>
                 <h3><?php
                            include("connection.php");

                            $query = "SELECT * FROM FORM1";
                            $data = mysqli_query($conn,$query);
                            $total = mysqli_num_rows($data);

                            echo $total;

                            if($data)
                                    {
                                        ?>

                                        <meta http-equiv = "refresh" content = "0; url =C:\xampp\htdocs\Registration_Form\EmployeeMnagement\index.php" />

                                        <?php
                                    }
                                    

                            ?></h3>
                 
             </div>
             <div class="ditels">
                 <h3>Vacation</h3>
                 <h3>50</h3>
             </div>
             <div class="ditels">
                 <h3>At_Work_Place</h3>
                 <h3><?php
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

                            ?></h3>
             </div>
             <div class="ditels">
                 <h3>Employee Cancele</h3>
                 <h3>50</h3>
             </div>
            </div> 
         </div> 
         
         <div class="right-side">
             <div class="content">
                <?php
                    include("connection.php");

                    $query = "SELECT * FROM FORM1";
                    $data = mysqli_query($conn,$query);
                    $total = mysqli_num_rows($data);
                    //echo $total;
                    if($total!=0)
                    {
                    ?>
                    <h2 align="center"><mark>Some Details About Employee</mark></h2>
                    
                    <table border="1px" cellspacing="20" width="100%">
                        <tr>
                            <th width="5%" style='background-color: #ccc'>Image</th>
                            <th width="10%" style='background-color: #ccc'>FIRST NAME</th>
                            <th width="10%" style='background-color: #ccc'>LAST NAME</th>
                            <th width="10%" style='background-color: #ccc'>PHONE</th>
                            <th width="10%" style='background-color: #ccc'>ADDRESS</th>
                            <th width="10%" style='background-color: #ccc'>Work Place</th>
                        </tr>
                        <?php
                        while($result = mysqli_fetch_assoc($data))
                        {
                            echo "<tr>
                                    <td><img src='".$result['img_source']."' height='50px' width='100%' border-radius='50px'></td>
                                    <td style='padding: 10px; background-color: #ccc'>".$result['fname']."</td>
                                    <td style='padding: 10px; background-color: #ccc'>".$result['lname']."</td>         
                                    <td style='padding: 10px; background-color: #ccc'>".$result['phone']."</td>         
                                    <td style='padding: 10px; background-color: #ccc'>".$result['address']."</td>          
                                    <td style='padding: 10px; background-color: #ccc'>".$result['work']."</td>  
                                </tr>";
                        }
                        }
                        else
                        {
                            echo "No records found";
                        }
                        ?>
                    </table>
                    
                <!-- <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Work Place</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                       <tr>
                           <td><img src="image/WhatsApp Image rk.jpg"></td>
                           <td>Company Name</td>
                           <td>lname</td>
                           <td>Head Office</td>
                           <td>1,00,000</td>
                       </tr>
                    </tbody>
                </table> -->
             </div>
         </div>
      </div>  
    </div>  
</body>
</html>