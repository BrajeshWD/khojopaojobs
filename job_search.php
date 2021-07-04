<?php
if(!isset($_POST['jobsearch']))
{
header("location:home.php");
}
?>
<html><head><title>khojopaojobs</title>
<link rel="stylesheet" href="css/home.css"></head>
<body>
<?php
include 'header.php';?>
</body>
</html>
<?php
$db_name="mysql:host=localhost;dbname=khojopao";
$user_name="root";
$password="aaru134";
$title=$_POST['title'];
$loc=$_POST['loc'];
$exp=$_POST['exp'];
$conn=new PDO($db_name,$user_name,$password);
$sql=$conn->prepare("select* from job_search where job_category='$title' or job_location='$loc' or job_exp='$exp' or job_keyskill='$title' or job_post='$title' or job_domain='$title' ");
$sql->execute();
$result=$sql->fetchAll(PDO::FETCH_NUM);
if(count($result)){
    echo "<ul id='result'>";
    foreach($result as $row){
        echo "<b>Post:</b><li style='color:blue;'>{$row[6]}</li><br><b>Domain:</b><li>{$row[7]}</li><b>Job_Skills:</b><li>{$row[8]}</li><li><b>{$row[1]}</b></li>:<li>{$row[4]}</li><br><b>link:</b><li><a href='{$row[5]}'>{$row[5]}</a></li><br><b>Exp:</b><li>{$row[3]}</li><b>Location:</b><li>{$row[2]}</li><br><p></p>";
            }
    echo "</ul>";
}
    else{
        echo "<h1>No record found</h1>";
    }
    include 'footer.php';

    ?>