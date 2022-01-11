<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <link rel="stylesheet" href="bai2.css">
</head>
<body>
    
    <div class="container">
        
        <form action="table.php" method="post">
        <h2>Thông tin khách hàng</h2>
        <div class="input">
            <div class="input__content">
                <label for="ten"> Họ tên: </label>
                <input type="text" name="ten" placeholder="Nhập họ tên">  
            </div>
            <div class="input__content">
                <label for=""> Giới tính: </label>
                <input type="radio" name="gt" value="Nam" id="nam">
                <label for="nam"> Nam </label>
                <input type="radio" name="gt" value="Nữ" id="nu">
                <label for="nu"> Nữ </label>
                <input type="radio" name="gt" value="Khác" id="khac">
                <label for="khac"> Khác </label>
            </div>
            <div class="input__content">
                <label for="date"> Ngày sinh: </label>
                <input type="date" name="date" id="date">
            </div>
            <div class="input__content">
                <label for="diaChi"> Địa chỉ: </label>
                <input type="text" name="diaChi" placeholder="Nhập địa chỉ">
            </div>
            <div class="input__content">
                <label for="tel"> Số điện thoại: </label>
                <input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="013-141-435">
            </div>            
            <input class="btn" type="submit" value="SUBMIT" name="submit"></input>
            <input class="btn" type="reset" value="RESET" name="reset"></input>
        </div>
        </form>
        
        <div class="output">
            <?php require_once 'ketnoi.php' ?>
            <?php

            if(isset($_POST['submit'])){
                $gt = $_POST['gt'];
                if ($gt == "Nam") {
                    $gt = "Nam";
                }
                elseif ($gt == "Nữ") {
                    $gt = "Nữ";
                }
                elseif ($gt == "Khác") {
                    $gt = "Khác";
                } 

                $ten = $_POST['ten'];
                $date = $_POST['date'];
                $diaChi = $_POST['diaChi'];
                $tel = $_POST['tel'];
                $a = "INSERT INTO `ttkh`(`name`, `sex`, `date`, `address`, `phone`) VALUES (N'$ten',N'$gt',N'$date',N'$diaChi',N'$tel')";
                if ($conn -> query($a)) {
                    echo "<script>alert('Thêm thành công')</script>";
                }
                else{
                    echo "<script>alert('Thêm không thành công')</script>";
                }

                $conn->close();
            }
            
            
            
            ?>
            
        </div>
    </div>
               
            
            
            
           
      
    
</body>
</html>