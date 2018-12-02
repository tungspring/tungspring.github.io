
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   
  </head>
  <body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="row">
					<div class="tieudebai">
						<p>Bài 5.1 Bài tập tổng hợp</p>
					</div>
					<div class="thumbnail video">
						<iframe width="100%" height="580px" src="https://www.youtube.com/embed/LyBN_ngLx1s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="menu">
						<div><a href="" title="Quay lại"><i class="fas fa-reply"></i></a></div>
						<div><a href="" title="Bài học trước"><i class="fas fa-angle-double-left"></i></a></div>
						<div><a href="" title="Bài học tiếp theo"><i class="fas fa-angle-double-right"></i></a></div>
						<div><a href="" title="Mở rộng video"><i class="fas fa-expand"></i></a></div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<div class="tieudebai">
						<p><span><i class="fas fa-bars"></i></span>Danh sách bài học</p>
					</div>
					<div id="danhsachbaihoc">
						<ul>
							<li><p class="abc active"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
							<li><p class="abc"><i class="fas fa-play-circle"></i>Bài 1</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
    	// Get the container element
		var btnContainer = document.getElementById("danhsachbaihoc");

		// Get all buttons with class="btn" inside the container
		var btns = btnContainer.getElementsByClassName("abc");

		// Loop through the buttons and add the active class to the current/clicked button
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		    var current = document.getElementsByClassName("active");
		    current[0].className = current[0].className.replace(" active", "");
		    this.className += " active";
		  });
		}
    </script>
  </body>
 </html>