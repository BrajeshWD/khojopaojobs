<html >
    <head>
        <title>khojopaojobs</title>
        <link rel="stylesheet" href="css/home.css">
<script type="text/javascript" src="home.js"> 
</script>
    </head>
    <body>
                <?php include 'header.php'?>
                                        
                        <div id="bd1">   <div id="sub_bd1"  ><h1>Stay Home Stay Safe<br>Wear Mask<br>Keep Social Distancing</h1></div></div>
                           <div id="bd2" >
                        <p id="find_title">Search your desired job</p>
                    <form id="frm1" onsubmit="return valid_search()" method="post" action="job_search.php" >
                        <input id="keyword_find" class="find" type="text" placeholder="Job_Title,Keyword,Company" name='title'><label id="lblkeyword" style="visibility:hidden;color:red;font-weight: bolder;">fill it</label><br>
                        <input id="loc_find" class="find" type="text" placeholder="location" name='loc'><label id="lblloc" style="visibility:hidden;color:red;font-weight: bolder;">fill it</label><br>
                        <input id="exp_find"class="find" type="text" placeholder="experience" name='exp'><label id="lblexp" style="visibility:hidden;color:red;font-weight: bolder;">fill it</label><br><br>
                        <input class="find" type="submit" name="jobsearch" value="KhoJo">                      

                    </form>
                                    
                    <p><img id="img" src="image\find4.gif" width=300px height=300px></p>
                    </div></section>
                    <section>  
                     <div id="bd3"class="signin">
                    <form onsubmit="return validate()" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <h2>Registered user Sign-in Here</h2>
                    <label for="uname:">user name:</label><input  type="text"   class="signin" id="uname"  name="usrname" placeholder="Enter your name"><label id="lbluser" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br>
                    <label for="password:">password:</label><input  type="text" class="signin" id="pwd" name="pwd" placeholder="Enter your  password"><label id="lblpwd" style="visibility:hidden;color:red;font-weight: bolder;">fill it first</label><br>
                    <br><br>
                    <input type="submit" value="Sign-In" class="signin" name="sign-in">
                        </form>
                        
                        <?php
                         include 'config.php';
                        if(isset($_POST['sign-in'])){
                         $uname=$_POST['usrname'];
                        $pwd=$_POST['pwd'];
                        $conn=new pdo($db_name,$user_name,$password);
                        $sql=$conn->prepare("select user_name,pswd from sign_up");
                        $sql->execute();
                        $result=$sql->fetchAll(PDO::FETCH_NUM);
                            if($result){
                                foreach($result as $row){
                                    if(($uname==$row[0])&& ($pwd==$row[1])){
                                        session_start();
                                        $_SESSION['user_name']=$row[0];                                        
                                        header("location:signin.php");
                                        break;
                                }
                            }
                                    echo "<h2>Password does not match.Please try again";
                                    
                               
                              
                               
                                    
                               
                            }
                            else{
                                echo "record not found";
                            }
                    }
                        ?>
<form action="signup.php" method="post">                        
   <input name="signup" style="width:160px;background-color:rgb(210,11,11);" type="submit" value="New User->Register" class="signup" >
</form>


                     
<div id="marquee"><h1>Current Jobs</h1><ul><li>Jobs in Governments</li><li>Jobs in Company</li><li>Jobs in Private</li><li>Jobs in Public</li></div></div>

           <?php include 'footer.php'?>
    
    </body>
</html>
