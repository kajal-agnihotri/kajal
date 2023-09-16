<?php 

$conn = new mysqli("localhost","root","","assessment1");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $pnumber = $_POST['pnumber'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $Ip_Address = $_SERVER['REMOTE_ADDR'];

    $sql = "insert into contact_form (full_name,phone_number,email,subject,message,Ip_Address) values ('$fname','$pnumber','$email','$subject','$msg','$Ip_Address')";
    mysqli_query($conn,$sql);
    echo "Registeration Successfully";

    
}elseif($fname='' || $pnumber='' || $email='' || $subject='' || $msg=''){
    echo "Please insert data";    

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
<body>
    <h1>Register Here</h1>
    <div>
        <form action="" method="POST">
            <label for="full name">Full Name</label>
            <input type="text" name="fname" placeholder="Full Name" required><br>
        
        <label for="phone number">Phone Number</label>
        <input type="number" name="pnumber" placeholder="phone number" required><br>
        
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="email" required><br>

    <label for="subject">Subject</label>
    <input type="text" name="subject" placeholder="subject" required><br>

    <label for="message" >Message</label>
    <input type="text" name="msg" placeholder="message" required><br>

    <input type="hidden" name="Ip_Address" <?php echo $_SERVER['REMOTE_ADDR'];?>>

    Submit<input type="submit" name="submit">

    </form>
    </div>
</body>
</html>