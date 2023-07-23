<?php
$fname=$_GET['fname'];
$lname=$_GET['Lname'];
$Username=$_GET['uname'];
$id=$_GET['id'];
$password=$_GET['pwd'];
$email=$_GET['Email'];
$phone=$_GET['ph'];
$Gender=$_GET['gender'];
$date=$_GET['date'];
$Hobby=isset($_GET['Dance'])?'Dance': '';
$Hobby=isset($_GET['Painting'])?'Painting': '';
$Hobby=isset($_GET['Trekking'])?'Trekking': '';
$Hobby=isset($_GET['Music'])?'Music': '';
$Hobby=isset($_GET['Scating'])?'Scating': '';
$City=$_GET['City'];
$zipcode=$_GET['pin'];
$address=$_GET['address'];
$uname=$_GET['uname'];
$file=$_GET['file'];
echo "<table cellpadding='3' border='1'  align='center cellspacing='0'>";
echo "<tr><td>fname</td><td>".$fname."</td></tr>";
echo "<tr><td>lname</td><td>".$lname."</td></tr>";
echo "<tr><td>username</td><td>".$username."</td></tr>";
echo "<tr><td>id</td><td>".$id."</td></tr>";
echo "<tr><td>password</td><td>".$password."</td></tr>";
echo "<tr><td>email</td><td>".$email."</td></tr>";
echo "<tr><td>phone</td><td>".$phone."</td></tr>";
echo "<tr><td>Gender</td><td>".$Gender."</td></tr>";
echo "<tr><td>date</td><td>".$date."</td></tr>";
echo "<tr><td>Hobby</td><td>".$Hobby."</td></tr>";
echo "<tr><td>City</td><td>".$City."</td></tr>";
echo "<tr><td>zipcode</td><td>".$zipcode."</td></tr>";
echo "<tr><td>Address</td><td>".$Address."</td></tr>";
echo "<tr><td>uname</td><td>".$uname."</td></tr>";
echo "<tr><td>file</td><td>".$file."</td></tr>";
echo"</table>";
?>


