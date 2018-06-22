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
$sql2 = "SELECT id FROM think_t1";
$result2=$conn->query($sql2);
$count=$result2->num_rows; //总数变量

$moren=4;
$morem=1;
$seep=4;
if(!empty($_POST['moren'])){
  $moren+=$_POST['moren']*$seep;
  $morem=$moren-($seep-1);
}
$sql = "SELECT * FROM think_t1 where id >=" .$morem. " and id<=" .$moren;
mysqli_query($conn, 'set names utf8');
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
	if($moren>$count){
	  echo "";
	}else{
	  while($row = $result->fetch_assoc()) {
		  $str='<div class="main_items zx_divs">
				  <div class="items_img pull-left"><img src="img/textImg/'.$row['id'].'.jpg"/></div>
				  <div class="items_text pull-left">
				   <p class="text_p1">'.$row['titles'].'</p>
				   <p class="text_p2">'.$row['texts'].'</p>
				   <p class="text_p3">'.$row['nums'].'阅读</p>
				  </div>
				  <div class="clearfix"></div>
			   </div>';
		 echo $str;
	  }
	}
} else {
    echo "";
}

?>