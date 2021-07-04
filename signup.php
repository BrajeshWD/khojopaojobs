<?php
if(!isset($_POST['signup']))
{
header("location:home.php");
}
?>
<html><head><title>KhojoPaoJobs</title>
<link rel="stylesheet" href="css/signup.css">
<script type="text/javascript" src="home.js"> 
</script>
</head>
<body>
<?php include 'header.php'?>
<div id="signup">
                    <form onsubmit="return validating()" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="frm2">
                    <h2>Registration</h2>                     
                    <label id="uname:">User name:</label><br><input  type="text"   class="signup" id="username" placeholder="enter your name" name="uname"><label id="lblusername" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br><br>
                    <label id="password:">Password:</label><br><input  type="text" class="signup" id="password" placeholder="enter your desird password" name="pwd"><label id="lblpassword" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br><br>
                    <label id="cpassword:">Confirm password:</label><br><input  type="text" class="signup" id="cpassword" placeholder="enter your confirm password" name="cpwd"><label id="lblcpassword" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br><br>
                                            
                    <label id="mobile_no">Mobile no.</label><br><input id="Mobile_No" class="signup" type="text" placeholder="enter your mobile no." name="mbn"><label id="lblmobile" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br>
                    <label id="lblmobile1" style="visibility:hidden;color:red;font-weight: bolder;">Invalid No.</label><br>
                    <label id="email_id">Email-Id</label><br><input id="Email_Id" type="text" class="signup" placeholder="enter your email-id" name="eid"><label id="lbleid" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br><br>
                    <label id="key_skills">Key Skills</label><br><input id="Key_Skills" type="text" class="signup" name="kyskl" placeholder="enter atleast 3 Key skills, exp:PHP,Database,Data Entry,Accounts,Finance etc"><label id="lblskills" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br><br>
                    <label id="dob:">DOB:</label><br><input  type="date"  class="signup" id="dob" name="dob"><label id="lbldob" style="visibility:hidden;color:red;font-weight: bolder;">not selected</label><br><br>
                    <label id="gender:">Gender:</label><br><input  type="radio" value="male"  class="signup" id="male" name="g1">male</input><input type="radio" id="female" value="female"  name="g1">female</input><label id="lblgender" style="visibility:hidden;color:red;font-weight: bolder;">Not selected</label><br><br>
                    <label id="exp:">experience</label><br>
                    <select class="signup" id="exp" name="exp">
                                <option>0 year</option>
                                <option>1 year</option>
                                <option>2 year</option>
                                <option>3 year</option>
                                <option>4 year</option>
                                <option>5 year</option>
                                <option>6 year</option>
                                <option>more</option>
                    </select><br> <br>       
                    <input type="submit" value="Sign-Up" name="save" class="signup">
                        </form>
                
                    </div>  
                    <?php      
                    if(isset($_POST['save'])){  
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
$conn=new PDO($db_name,$user_name,$password);
$sql=$conn->prepare("insert into sign_up(user_name,pswd,cpassword,dob,exp,gender,mobile_no,e_id,key_skill)values(:un,:pwd,:cpwd,:dob,:exp,:gender,:mbn,:eid,:kyskl)");
$sql->execute(array(':un'=>$un,':pwd'=>$pwd,':cpwd'=>$cpwd,':dob'=>$dob,':gender'=>$gender,':exp'=>$exp,':mbn'=>$mbn,':eid'=>$eid,':kyskl'=>$kyskl));
echo "<h2 style=color:Red'>Data saved successfull</h2>";
}
?>      
</body>
</html>