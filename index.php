<?php 
  if(!session_start())
    session_start();
  if(!isset($_SESSION['tk']))
    header('location:dangnhap.php');


  if()
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Học trực tuyến</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="avatar">
                <img class="img-responsive" src="images/avatar.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="ten">
            <p>Tùng Kiều</p>
          </div>
          <div class="thongtin">
            <ul>
              <li><a href="">Đổi ảnh đại diện</a></li>
              <li><a href="">Đổi mật khẩu</a></li>
              <li><a href="dangxuat.php">Đăng xuất</a></li>
            </ul>
          </div>            
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
          <div class="tieude">
            <p>Khóa học của tôi</p>
          </div>
          <div class="text">
            <marquee behavior="" direction="">Chào mừng bạn đến với website học trực tuyến của TùngPRO!!!</marquee> 
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail box">
                  <div class="anh">
                    <a href=""><img class="img-responsive" src="images/avatar.jpg" alt=""></a>
                  </div>
                  <div class="ttkh">
                    <p class="tenkh">Khóa học lập trình ABC</p>
                    <a href="" class="btn btn-success btnvaohoc">Vào học</a>
                    <span class="icon">
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail box">
                  <div class="anh">
                    <a href=""><img class="img-responsive" src="images/avatar.jpg" alt=""></a>
                  </div>
                  <div class="ttkh">
                    <p class="tenkh">Khóa học lập trình ABC</p>
                    <a href="" class="btn btn-success btnvaohoc">Vào học</a>
                    <span class="icon">
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail box">
                  <div class="anh">
                    <a href=""><img class="img-responsive" src="images/avatar.jpg" alt=""></a>
                  </div>
                  <div class="ttkh">
                    <p class="tenkh">Khóa học lập trình ABC</p>
                    <a href="" class="btn btn-success btnvaohoc">Vào học</a>
                    <span class="icon">
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail box">
                  <div class="anh">
                    <a href=""><img class="img-responsive" src="images/avatar.jpg" alt=""></a>
                  </div>
                  <div class="ttkh">
                    <p class="tenkh">Khóa học lập trình ABC</p>
                    <a href="" class="btn btn-success btnvaohoc">Vào học</a>
                    <span class="icon">
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                      <i class="glyphicon glyphicon-star"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </body>
</html>