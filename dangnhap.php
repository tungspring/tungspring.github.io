<?php 
    if(isset($_POST['dn']))
    {
        session_start();

        $data = file_get_contents("demo.json");
        $data = json_decode($data,true);
        
        $TaiKhoan = $_POST['tk'];
        $MatKhau = md5($_POST['mk']);
        
        $dangnhap = $data["tbldangnhap"];
        
        foreach ($dangnhap as $value) {
            if ($value['TaiKhoan']==$TaiKhoan&&$value['MatKhau']==$MatKhau) {
                $_SESSION['tk']=$value['TaiKhoan'];
                header('location:index.php');
            }
        }
        echo "Thông tin tài khoản không đúng";
    }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Tài khoản:<input type="text" name="tk">
        <br>
        Mật khẩu:<input type="password" name="mk">
        <br>
        <input type="submit" value="Đăng nhập" name="dn">
    </form>
</body>
</html>