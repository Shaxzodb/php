<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<center><h1>Salom Hush kelibsiz</h1></center>";
    ?>
    <hr/>
    <?php
        $mysql=mysqli_connect("remotemysql.com","WDItdGVDsx","7YSOgN4UUJ","WDItdGVDsx");
        $sql="SELECT * FROM `Users`";
        $result=mysqli_query($mysql,$sql);
        while($row=mysqli_fetch_assoc($result)){
           
            echo "<h2>Name: <font color='red'>".$row['name']."</font></h2>";
            echo "<h3>Email: ".$row['email']."</h3>";
            echo "<h3>Password: ".$row['password']."</h3>";
           
        }
    ?>
</body>
</html>