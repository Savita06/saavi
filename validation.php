<?php
//echo "saavi";
if(empty($_POST)){
	echo "* Fields are required";
}
 else if(empty($_POST['fname'])){
	echo "Fname is required";
}
else if(empty($_POST['lname'])){
	echo "lname is required";
}
else if(empty($_POST['dob'])){
	echo "data of birth is required";
}
else if(empty($_POST['email'])){
	echo "email is required";
}
else if(empty($_POST['pswd'])){
	echo "Password is required";
}
else if(empty($_POST['gender'])){
	echo "gender is required";
}
else{
	
	echo "<b>Firstname is: </b>".$_POST['fname']."<br>";
	echo "<b>lastname is:</b> ".$_POST['lname']."<br>";
	echo "<b>Date of birth is:</b></b> ".$_POST['dob']."<br>";
	echo "<b>Email is :</b>".$_POST['email']."<br>";
	echo "<b><b>password is: </b>".$_POST['pswd']."<br>";
	echo "<b>Gender is :</b>".$_POST['gender']."<br>";
	echo "<b>Description is :</b>".$_POST['descri']."</br>";
	//echo "<b>Subjects is :</b>".$_POST['sub']."<br>";
	echo "<b>Subject is :</b>";
	foreach($_POST['check_list'] as $selected){
echo $selected." ";
}
}
?>