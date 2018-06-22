<?PHP
header("Content-type: text/html; charset=utf-8"); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ajax_jq";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo '<div id="carousel-example-generic" class="carousel slide zx_divs" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner zx_divs" role="listbox">
		<div class="item active">
		  <img src="img/img1.jpg" alt="...">
		</div>
		<div class="item">
		  <img src="img/img2.jpg" alt="...">
		</div>
		<div class="item">
		  <img src="img/img3.jpg" alt="...">
		</div>
	  </div>
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>';
?>