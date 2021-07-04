<?php
$db_name="mysql:host=localhost;dbname=khojopao";
$user_name="root";
$password="aaru134";
$un=$_POST['uname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$dob=$_POST['dob'];
$gender=$_POST['g1'];
$exp=$_POST['exp'];
$mbn=$_POST['mbn'];
$eid=$_POST['eid'];
$kyskl=$_POST['kyskl'];
echo $eid;
$conn=new PDO($db_name,$user_name,$password);
$sql=$conn->prepare("insert into sign_up(user_name,pswd,cpassword,dob,exp,gender,mobile_no,e_id,key_skill)values(:un,:pwd,:cpwd,:dob,:exp,:gender,:mbn,:eid,:kyskl)");
$sql->execute(array(':un'=>$un,':pwd'=>$pwd,':cpwd'=>$cpwd,':dob'=>$dob,':gender'=>$gender,':exp'=>$exp,':mbn'=>$mbn,':eid'=>$eid,':kyskl'=>$kyskl));
echo "Data saved successfull";
?>