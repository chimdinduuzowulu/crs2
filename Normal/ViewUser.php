<?php
session_start();
include_once '../connection.php';
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$id=$fname=$lname=$type=$phone="";
$sql="SELECT * FROM user where email = '$email' AND password = '$password'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_assoc($res))
{
    $id = $row['id'];
    $fname =$row['fname'];
    $lname = $row['lname'];
    $phone =$row['phone'];
    $type =$row['type'];
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/ViewUser.css">
</head>
<!--  -->
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="https://media.istockphoto.com/vectors/default-profile-picture-avatar-photo-placeholder-vector-illustration-vector-id1223671392?k=20&m=1223671392&s=612x612&w=0&h=lGpj2vWAI3WUT1JeJWm1PRoHT3V15_1pdcTn2szdwQ0=" width="100" class="rounded-circle">
                </div>          
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">Welcome</span>
                    <h5 class="mt-2 mb-0"><?php echo $fname?></h5>
                    <span><?php echo $type?></span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts"><?php echo $email?></p>
                        <p class="fonts"><?php echo $phone?></p>
                    
                    </div>
                    
                    
                    
                    <div class="buttons">
                        
                        <button class="btn btn-primary px-4" style="color:white;" onclick=getPage("../nbproject/Edit.php?data=<?php echo $id ?>")>Edit</button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
<!--  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    