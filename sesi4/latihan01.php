<?php
    $usr= "";
    $pwd= "";
    $salah = 0;

    if(isset($_GET["txUser"])){
    $usr = $_GET["txUser"];
    $pwd = $_GET["txPASS"];
    
    if($usr==" "){
        $salah = 1;
    }else{
        echo "isi dari field user: ". $usr;
    }
    if($pwd==" "){
        $salah = 1;
    }else{
        echo "isi dari field password: ". $pwd;
    }
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Form Dengan Metode GET</title>
</head>
<body>

<?php
    if($salah == 1){
        echo "<div style= 'color: red'> User Name/Password masih kosong </div>";
    }
?>
    
    <form method="GET" action= "latihan01.php">
        <div>
            User Name
            <input type="text" name= "txUser" required>
        </div>
        <div>
            Password
            <input type="password" name= "txPASS">
        </div>
        <div>
            <button type="submit"> Login </button>
        </div>
    </form>
</body>
</html>