<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="bai1.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <div class="input">
            <label for="a">Số a</label>
            <input type="number" name="a" placeholder="Nhap so a">
            <br>
            <br>
            <label for="b">Số b</label>
            <input type="number" name="b" placeholder="Nhap so b">
            <br>
            <br>
            <input class="form-control" type="submit" name="cong" value="+" >
            <input class="form-control" type="submit" name="tru" value="-" >
            <input class="form-control" type="submit" name="nhan" value="*" >
            <input class="form-control" type="submit" name="chia" value="/" >
            
        </div>
            
        </form>
        <div class="output">
        <?php

            if(isset($_POST['cong'])) {
                echo ($_POST['a']). ' + ' .($_POST['b']). ' = ' . ($_POST['a'] + $_POST['b']);
            }
            if(isset($_POST['tru'])) {
                echo ($_POST['a']). ' - ' .($_POST['b']). ' = ' . ($_POST['a'] - $_POST['b']);
            }
            if(isset($_POST['nhan'])) {
                echo ($_POST['a']). ' * ' .($_POST['b']). ' = ' . ($_POST['a'] * $_POST['b']);
            }
            if(isset($_POST['chia'])) {
                echo ($_POST['a']). ' / ' .($_POST['b']). ' = ' . ($_POST['a'] / $_POST['b']);
            }

        ?>
        </div>
    </div>
  
    
</body>
</html>