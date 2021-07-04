<html>
    <head><title>khojopaojobs</title>
    <link rel="stylesheet" href="css/home.css"></link>
</head>
<body><?php
    session_start();
    session_unset();
    session_destroy();
    header("location:home.php");
    ?>
</body>
</html>
